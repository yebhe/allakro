<?php

namespace App\Filament\Widgets;

use App\Models\Amenagement;
use App\Models\Dece;
use App\Models\Demenagement;
use App\Models\Naissance;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Amenagement', Amenagement::count()),
            Card::make('Demenagement', Demenagement::count()),
            Card::make('Naissance', Naissance::count() ),
            Card::make('Deces', Dece::count()),
        ];
    }
}
