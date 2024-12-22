<?php

namespace App\Filament\Resources\PenangungJawabResource\Pages;

use App\Filament\Resources\PenangungJawabResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenangungJawab extends EditRecord
{
    protected static string $resource = PenangungJawabResource::class;

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
