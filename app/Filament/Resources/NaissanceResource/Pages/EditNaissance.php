<?php

namespace App\Filament\Resources\NaissanceResource\Pages;

use App\Filament\Resources\NaissanceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNaissance extends EditRecord
{
    protected static string $resource = NaissanceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
