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

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    protected static ?string $navigationGroup = 'Direktori';
    protected static ?string $navigationLabel = 'Kategori Direktori';
    protected static ?string $pluralModelLabel = 'Kategori Direktori';
    protected ?string $heading = 'Kategori Direktori';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('icon')
                    ->required()
                    ->options(getIcon()),
                    Forms\Components\Select::make('color')
                    ->required()
                    ->options(getWarna()),
                    Forms\Components\Hidden::make('sort')
                    ->default(function (?string $operation) {
                        if ($operation === 'create') {
                            return KategoriDirektori::max('sort') + 1;
                        }
                        return null; // Or some other default value for non-create operations
                    }),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('active'),
            ])

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
            ])->paginated(false)

            ->defaultSort('sort', 'asc')

            ->reorderable('sort');
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
