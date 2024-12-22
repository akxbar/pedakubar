<?php

namespace App\Filament\Resources\PenangungJawabResource\Pages;

use App\Filament\Resources\PenangungJawabResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePenangungJawab extends CreateRecord
{
    protected static string $resource = PenangungJawabResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
