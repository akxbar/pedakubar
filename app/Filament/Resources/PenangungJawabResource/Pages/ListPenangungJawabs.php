<?php

namespace App\Filament\Resources\PenangungJawabResource\Pages;

use App\Filament\Resources\PenangungJawabResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenangungJawabs extends ListRecords
{
    protected static string $resource = PenangungJawabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
