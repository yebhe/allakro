<?php

namespace App\Filament\Resources\DemenagementResource\Pages;

use App\Filament\Resources\DemenagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemenagement extends EditRecord
{
    protected static string $resource = DemenagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
