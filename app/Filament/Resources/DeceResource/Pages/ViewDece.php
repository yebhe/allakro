<?php

namespace App\Filament\Resources\DeceResource\Pages;

use App\Filament\Resources\DeceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDece extends ViewRecord
{
    protected static string $resource = DeceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
