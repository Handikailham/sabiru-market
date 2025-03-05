<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\MyStatsOverview; // contoh widget kustom Anda

class Dashboard extends BaseDashboard
{
    // Override header widgets bawaan
    public function getHeaderWidgets(): array
    {
        // Kembalikan array kosong agar "Welcome Admin" & "Filament Info" hilang
        return [];
    }

    // (Opsional) Jika Anda ingin menampilkan widget buatan sendiri di bagian utama
    public function getWidgets(): array
    {
        return [
            MyStatsOverview::class,
        ];
    }
}
