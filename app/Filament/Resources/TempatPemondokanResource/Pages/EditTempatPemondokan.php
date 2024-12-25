<?php

namespace App\Filament\Resources\TempatPemondokanResource\Pages;

use App\Filament\Resources\TempatPemondokanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTempatPemondokan extends EditRecord
{
    protected static string $resource = TempatPemondokanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
