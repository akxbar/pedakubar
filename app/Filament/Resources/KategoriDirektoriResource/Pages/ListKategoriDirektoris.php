<?php

namespace App\Filament\Resources\KategoriDirektoriResource\Pages;

use App\Filament\Resources\KategoriDirektoriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriDirektoris extends ListRecords
{
    protected static string $resource = KategoriDirektoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
