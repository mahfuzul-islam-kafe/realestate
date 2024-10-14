<?php

namespace App\Providers;

use Filament\Support\Facades\FilamentColor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        FilamentColor::register([
            'primary' => [
                50  => '230, 242, 255',
                100 => '210, 234, 255',
                200 => '185, 220, 255',
                300 => '140, 200, 255',
                400 => '90, 175, 250',
                500 => '6, 102, 235',
                600 => '5, 85, 185',
                700 => '4, 70, 150',
                800 => '3, 55, 120',
                900 => '2, 45, 100',
                950 => '1, 30, 70',
            ],
        ]);

        $roles = ['admin', 'user', 'agent'];
        foreach ($roles as $role) {
            Blade::if($role, function () use ($role) {
                return Auth::check() && Auth::user()->role == $role;
            });
        }
    }
}
