<?php

namespace App\Filament\Resources\RadiusResource\Pages;

use App\Filament\Resources\RadiusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadius extends ListRecords
{
    protected static string $resource = RadiusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
