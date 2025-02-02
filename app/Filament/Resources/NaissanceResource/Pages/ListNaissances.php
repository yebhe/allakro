<?php

namespace App\Filament\Resources\NaissanceResource\Pages;

use App\Filament\Resources\NaissanceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNaissances extends ListRecords
{
    protected static string $resource = NaissanceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
