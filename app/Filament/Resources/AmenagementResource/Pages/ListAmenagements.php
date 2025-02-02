<?php

namespace App\Filament\Resources\AmenagementResource\Pages;

use App\Filament\Resources\AmenagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmenagements extends ListRecords
{
    protected static string $resource = AmenagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
