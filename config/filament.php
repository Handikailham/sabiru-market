<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Path
    |--------------------------------------------------------------------------
    |
    | URL prefix di mana Filament akan diakses. Contoh: 'admin' -> /admin
    |
    */
    'path' => env('FILAMENT_PATH', 'admin'),

    /*
    |--------------------------------------------------------------------------
    | Filament Authentication
    |--------------------------------------------------------------------------
    |
    | Pengaturan guard dan halaman login Filament. Pastikan guard sesuai dengan
    | yang Anda gunakan di file config/auth.php, biasanya 'web'.
    |
    */
    'auth' => [
        'guard' => 'web',
        'pages' => [
            'login' => \Filament\Pages\Auth\Login::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    */
    'broadcasting' => [
        // Tetap seperti bawaan Anda, jika tidak digunakan biarkan kosong
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    */
    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Assets Path
    |--------------------------------------------------------------------------
    */
    'assets_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Cache Path
    |--------------------------------------------------------------------------
    */
    'cache_path' => base_path('bootstrap/cache/filament'),

    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    */
    'livewire_loading_delay' => 'default',
];
