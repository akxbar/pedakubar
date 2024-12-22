<?php

namespace App\Filament\Resources\PemondokanResource\Pages;

use App\Filament\Resources\PemondokanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePemondokan extends CreateRecord
{
    protected static string $resource = PemondokanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
