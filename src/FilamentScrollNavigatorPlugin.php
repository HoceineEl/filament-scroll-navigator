<?php

namespace HoceineEl\FilamentScrollNavigator;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;
use HoceineEl\FilamentScrollNavigator\Components\ScrollNavigator;

class FilamentScrollNavigatorPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-scroll-navigator';
    }

    public function register(Panel $panel): void {}

    public function boot(Panel $panel): void
    {
        $panel
            ->renderHook(
                PanelsRenderHook::BODY_END,
                fn() => ScrollNavigator::make()->render()->render()
            );
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
