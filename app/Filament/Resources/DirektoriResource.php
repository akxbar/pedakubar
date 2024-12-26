<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Direktori;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\KategoriDirektori;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\DirektoriResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DirektoriResource\RelationManagers;

class DirektoriResource extends Resource
{
    protected static ?string $model = Direktori::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Direktori';
    protected static ?string $navigationLabel = 'Direktori';
    protected static ?string $pluralModelLabel = 'Direktori';
    protected ?string $heading = 'Direktori';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Nama Tempat')
                                    ->required(),
                                Forms\Components\TextInput::make('logo')
                                    ->label('Logo Title'),
                                Forms\Components\Select::make('kategori_direktori_id')
                                    ->label('Kategori')
                                    ->options(KategoriDirektori::all()->where('active', 1)->pluck('title', 'id'))
                                    ->required(),

                                TinyEditor::make('body')
                                    ->label('Fasilits')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsVisibility('public')
                                    ->fileAttachmentsDirectory('direktori')
                                    ->profile('simpel')
                                    ->ltr()
                                    ->columnSpan('full'),

                                Forms\Components\TextInput::make('no_telp')
                                    ->label('Nomor Telpon'),
                                Forms\Components\TextInput::make('alamat'),

                                Forms\Components\TextInput::make('link_gmap')
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Gambar Utama')
                                    ->image()
                                    ->directory('direktori')

                                    ->imageResizeMode('cover')
                                    ->imageResizeTargetWidth('440')
                                    ->helperText('Gambar Max 1MB, Setiap Gambar di Size Kecilkan Dulu')
                                    ->maxSize(1024),

                                    Repeater::make('multi_image')
                                    ->label('Fasilitas')
                                    ->addActionLabel('Add image')
                                    ->maxItems(6)
                                    ->schema([
                                        Forms\Components\TextInput::make('title'),
                                        Forms\Components\FileUpload::make('image')
                                            ->image()
                                            ->reorderable()
                                            ->appendFiles()
                                            ->helperText('max 500kb')
                                            ->maxSize(500)
                                            ->directory('multi_direktori'),
                                    ]),

                                Forms\Components\Toggle::make('publish')
                                    ->default(true)
                                    ->inline(),


                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),


            ])->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Nama Tempat')
                    ->searchable(),

                Tables\Columns\TextColumn::make('kategori_direktori.title'),

                Tables\Columns\ToggleColumn::make('publish'),
            ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->before(function (Model $record) {
                        if ($record->image == null) {
                            return;
                        } else {

                            Storage::disk('public')->delete($record->image);
                        }
                    })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDirektoris::route('/'),
            'create' => Pages\CreateDirektori::route('/create'),
            'edit' => Pages\EditDirektori::route('/{record}/edit'),
        ];
    }
}
