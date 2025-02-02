<?php

namespace App\Filament\Resources\DemenagementResource\Pages;

use App\Filament\Resources\DemenagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDemenagement extends ViewRecord
{
    protected static string $resource = DemenagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
