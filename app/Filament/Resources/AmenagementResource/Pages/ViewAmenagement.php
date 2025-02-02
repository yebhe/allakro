<?php

namespace App\Filament\Resources\AmenagementResource\Pages;

use App\Filament\Resources\AmenagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAmenagement extends ViewRecord
{
    protected static string $resource = AmenagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
