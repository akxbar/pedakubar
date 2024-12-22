<?php

namespace App\Filament\Resources\PemondokanResource\Pages;

use App\Filament\Resources\PemondokanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemondokan extends EditRecord
{
    protected static string $resource = PemondokanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
