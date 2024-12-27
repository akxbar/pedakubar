<?php

namespace App\Filament\Resources\FotoResource\Pages;

use App\Filament\Resources\FotoResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListFotos extends ListRecords
{
    protected static string $resource = FotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'Day 1' => Tab::make()->query(fn ($query) => $query->where('kat_id', '1')),
            'Day 2' => Tab::make()->query(fn ($query) => $query->where('kat_id', '2')),
            'Day 3' => Tab::make()->query(fn ($query) => $query->where('kat_id', '3')),
            'Day 4' => Tab::make()->query(fn ($query) => $query->where('kat_id', '4')),
            'Day 5' => Tab::make()->query(fn ($query) => $query->where('kat_id', '5')),
            'Day 6' => Tab::make()->query(fn ($query) => $query->where('kat_id', '6')),
        ];
    }
}
