<?php

namespace App\Filament\Resources\PemondokanResource\Pages;

use App\Filament\Resources\PemondokanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemondokans extends ListRecords
{
    protected static string $resource = PemondokanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
