<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Author;
use App\Models\Iklan;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class SeputarPasuruanOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Post::count()),
            Stat::make('Total Authors', Author::count()),
            Stat::make('Total Iklan', Iklan::count()),
            Stat::make('Total Video', Video::count()),
        ];
    }
}
