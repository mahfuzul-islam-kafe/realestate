<?php

namespace App\Filament\Resources\StatsOverviewResource\Widgets;

use App\Models\Property;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PropertiesWidget extends BaseWidget
{
    protected static string $view = 'filament.widgets.properties-widget';

    public function getPropertiesCount(): int
    {
        return Property::count();
    }

    public function getSoldCount(): int
    {
        return Property::where('is_sold', true)->count();
    }

    public function getRentedCount(): int
    {
        return Property::where('is_rented', true)->count();
    }
}
