<?php

namespace App\Filament\Resources\DeceResource\Pages;

use App\Filament\Resources\DeceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDece extends EditRecord
{
    protected static string $resource = DeceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
