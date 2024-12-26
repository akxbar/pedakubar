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
                    Forms\Components\TextInput::make('icon')
                    ->maxLength(255),
                    Forms\Components\Select::make('color')
                    ->options([
                        'bg-blue-500' => 'Biru',
                        'bg-green-500' => 'Hijau',
                        'bg-yellow-500' => 'Kuning',
                        'bg-red-500' => 'Merah',
                        'bg-purple-500' => 'Ungu',
                        'bg-pink-500' => 'Pink',
                        'bg-indigo-500' => 'Indigo',
                        'bg-cyan-500' => 'Cyan',
                        'bg-gray-500' => 'Abu-abu',
                        'bg-black' => 'Hitam',
                        'bg-white' => 'Putih',
                    ]),
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
