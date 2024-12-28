<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use App\Models\Kategori;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-lifebuoy';

    protected static ?string $navigationGroup = 'Event';
    protected static ?string $navigationLabel = 'Event';
    protected static ?string $pluralModelLabel = 'Event';
    protected ?string $heading = 'Event';
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
                                    ->required(),
                                    Forms\Components\Select::make('icon')
                                    ->label('Icon Title')
                                    ->required()
                                    ->options(getIcon()),

                                Forms\Components\Select::make('kategori_id')
                                    ->label('Kategori')
                                    ->required()
                                    ->options(Kategori::all()->where('publish', 1)->pluck('title', 'id')),
                                TinyEditor::make('body')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsVisibility('public')
                                    ->fileAttachmentsDirectory('event')
                                    ->profile('simpel')
                                    ->ltr()
                                    ->columnSpan('full'),

                                Forms\Components\TextInput::make('tempat')->label('Nama Tempat'),
                                Forms\Components\TextInput::make('alamat'),
                                Forms\Components\TextInput::make('narsum')->label('Narasumber'),
                                Forms\Components\TextInput::make('link_gmap')
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('event')
                                    ->helperText('Tidak Boleh Lebih dari 1MB')
                                    ->imageResizeMode('cover')
                                    ->imageResizeTargetWidth('400')
                                    ->maxSize(1024),
                                Forms\Components\Toggle::make('publish')
                                    ->default(true)
                                    ->inline(),

                                Forms\Components\DatePicker::make('tanggal')

                                    // ->default(now())
                                    ->label('Tanggal Waktu Kegiatan'),

                                    TimePicker::make('begin')
                                    ->label('Waktu Mulai')
                                    ->prefixIcon('heroicon-m-check-circle')
                                    ->prefixIconColor('success'),

                                    TimePicker::make('end')
                                    ->label('Waktu Selesai')
                                    ->prefixIcon('heroicon-m-check-circle')
                                    ->prefixIconColor('success'),

                                    Repeater::make('materi')
                                    ->label('Materi Event')
                                    ->addActionLabel('Add Materi')
                                    // ->maxItems(6)
                                    ->schema([
                                        Forms\Components\TextInput::make('title'),
                                        Forms\Components\FileUpload::make('file')
                                            ->appendFiles()
                                            // ->helperText('max 500kb')
                                            ->directory('materi'),
                                    ]),

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
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori.title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal Kegiatan')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
