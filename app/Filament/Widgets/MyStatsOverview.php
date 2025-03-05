<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Category;
use App\Models\Product;

class MyStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Jumlah Kategori', Category::count()),
            Card::make('Jumlah Produk', Product::count()),
        ];
    }
}
