<?php

namespace App\Filament\Resources\NaissanceResource\Pages;

use App\Filament\Resources\NaissanceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNaissance extends ViewRecord
{
    protected static string $resource = NaissanceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
