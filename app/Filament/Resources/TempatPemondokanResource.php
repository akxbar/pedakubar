<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TempatPemondokanResource\Pages;
use App\Filament\Resources\TempatPemondokanResource\RelationManagers;
use App\Models\TempatPemondokan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TempatPemondokanResource extends Resource
{
    protected static ?string $model = TempatPemondokan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Lokasi Pemondokan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('publish')
                    ->default(true)
                    ->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('active'),

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
            'index' => Pages\ListTempatPemondokans::route('/'),
            // 'create' => Pages\CreateTempatPemondokan::route('/create'),
            // 'edit' => Pages\EditTempatPemondokan::route('/{record}/edit'),
        ];
    }
}
