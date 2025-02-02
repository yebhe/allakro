<?php

namespace App\Filament\Resources\CompetenceResource\Pages;

use App\Filament\Resources\CompetenceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompetences extends ListRecords
{
    protected static string $resource = CompetenceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
