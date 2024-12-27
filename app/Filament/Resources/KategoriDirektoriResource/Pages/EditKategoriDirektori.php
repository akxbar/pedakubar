<?php

namespace App\Filament\Resources\KategoriDirektoriResource\Pages;

use App\Filament\Resources\KategoriDirektoriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriDirektori extends EditRecord
{
    protected static string $resource = KategoriDirektoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
