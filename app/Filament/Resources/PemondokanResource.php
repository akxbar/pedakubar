<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Pemondokan;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PemondokanResource\Pages;
use App\Filament\Resources\PemondokanResource\RelationManagers;

class PemondokanResource extends Resource
{
    protected static ?string $model = Pemondokan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Nama Pemondokan')
                                    ->required(),
                                Forms\Components\TextInput::make('alamat'),
                                TinyEditor::make('body')
                                    ->label('Keterangan')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsVisibility('public')
                                    ->fileAttachmentsDirectory('pemondokan')
                                    ->profile('simpel')
                                    ->ltr()
                                    ->columnSpan('full')
                                    ->required(),
                                Forms\Components\TextArea::make('embed_gmap'),

                                Forms\Components\TextInput::make('link_gmap')
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([

                                Repeater::make('image')
                                    ->addActionLabel('Add image')
                                    ->maxItems(6)
                                    ->schema([
                                        Forms\Components\TextInput::make('name'),
                                        Forms\Components\FileUpload::make('fasilitas')
                                            ->image()
                                            ->reorderable()
                                            ->appendFiles()
                                            ->maxSize(1048)
                                            ->directory('pemondokan'),
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
                    ->searchable(),
            ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
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
            'index' => Pages\ListPemondokans::route('/'),
            'create' => Pages\CreatePemondokan::route('/create'),
            'edit' => Pages\EditPemondokan::route('/{record}/edit'),
        ];
    }
}
