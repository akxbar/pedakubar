<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Foto;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FotoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FotoResource\RelationManagers;

class FotoResource extends Resource
{
    protected static ?string $model = Foto::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Galleri Foto';
    protected static ?string $pluralModelLabel = 'Galleri Foto';
    protected ?string $heading = 'Galleri Foto';
    protected static ?int $navigationSort = 4;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),

                Forms\Components\Select::make('kat_id')
                ->label('Kategori Hari')
                ->required()
                ->options(getDay()),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()
                    ->helperText('Tidak Boleh Lebih dari 1MB')
                    ->directory('foto')
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('750')
                    ->maxSize(1024)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('tgl')
                ->label('Kategori Hari')
                    ->default(fn ($record) => getDay()[$record->kat_id])
                   ,
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFotos::route('/'),
            // 'create' => Pages\CreateFoto::route('/create'),
            // 'edit' => Pages\EditFoto::route('/{record}/edit'),
        ];
    }
}
