<?php

namespace App\Filament\Resources\DeceResource\Pages;

use App\Filament\Resources\DeceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeces extends ListRecords
{
    protected static string $resource = DeceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
