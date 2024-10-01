<?php

namespace HoceineEl\FilamentScrollNavigator;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use HoceineEl\FilamentScrollNavigator\Components\ScrollNavigator;

class FilamentScrollNavigatorPlugin implements Plugin
{
    public string | Color | Closure $color = 'primary';

    public function getId(): string
    {
        return 'filament-scroll-navigator';
    }

    public function color(Color|string|Closure $color): static
    {
        $this->color = $color instanceof Closure ? $color() : $color;
        return $this;
    }

    public function register(Panel $panel): void
    {
        Filament::registerRenderHook(
            PanelsRenderHook::BODY_END,
            function () {
                $colorValue = $this->color instanceof Color
                    ? $this->color[500]
                    : $this->color;

                return view('filament-scroll-navigator::components.scroller', ['color' => $colorValue]);
            },
        );
    }

    public function boot(Panel $panel): void {}

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
