<?php

namespace App\Filament\Resources\AmenagementResource\Pages;

use App\Filament\Resources\AmenagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmenagement extends EditRecord
{
    protected static string $resource = AmenagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
