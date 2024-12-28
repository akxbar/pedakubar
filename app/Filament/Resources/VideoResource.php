<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Video;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VideoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VideoResource\RelationManagers;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Galleri Video';
    protected static ?string $pluralModelLabel = 'Galleri Video';
    protected ?string $heading = 'Galleri Video';
    protected static ?int $navigationSort = 4;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('link')
                    ->label('Link Youtube')
                    ->required(),
                // Forms\Components\TextInput::make('ket')->label('Keterangan'),
                Forms\Components\FileUpload::make('image')
                ->label('Gambar Beranda Youtube')
                    ->image()
                    ->required()
                    ->helperText('Tidak Boleh Lebih dari 500kb')
                    ->directory('video')
                    ->imageResizeMode('cover')
                    ->maxSize(500),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('image')
                    ->width(200),
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
                // Tables\Actions\DeleteAction::make()
                //     ->requiresConfirmation()
                //     ->before(function (Model $record) {
                //         if ($record->image == null) {
                //             return;
                //         } else {

                //             Storage::disk('public')->delete($record->image);
                //         }
                //     })

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
            'index' => Pages\ListVideos::route('/'),
            // 'create' => Pages\CreateVideo::route('/create'),
            // 'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
