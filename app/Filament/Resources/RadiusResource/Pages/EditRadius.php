<?php

namespace App\Filament\Resources\RadiusResource\Pages;

use App\Filament\Resources\RadiusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadius extends EditRecord
{
    protected static string $resource = RadiusResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
