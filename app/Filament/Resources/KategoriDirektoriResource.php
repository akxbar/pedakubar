<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriDirektoriResource\Pages;
use App\Filament\Resources\KategoriDirektoriResource\RelationManagers;
use App\Models\KategoriDirektori;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriDirektoriResource extends Resource
{
    protected static ?string $model = KategoriDirektori::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('active'),
            ])->defaultSort('id', 'desc')

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKategoriDirektoris::route('/'),
            // 'create' => Pages\CreateKategoriDirektori::route('/create'),
            // 'edit' => Pages\EditKategoriDirektori::route('/{record}/edit'),
        ];
    }
}
