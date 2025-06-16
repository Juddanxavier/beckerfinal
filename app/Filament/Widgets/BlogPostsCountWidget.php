<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogPostsCountWidget extends BaseWidget
{
    protected int | string | array $columnSpan = '1/2';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Blog Posts', Blog::count()),
        ];
    }
}
