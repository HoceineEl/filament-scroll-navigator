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
    public string | array $color = 'primary';

    public function getId(): string
    {
        return 'filament-scroll-navigator';
    }

    public function color(string|array|Closure $color): static
    {
        $this->color = $color instanceof Closure ? $color() : $color;
        return $this;
    }


    public function register(Panel $panel): void
    {
        Filament::registerRenderHook(
            PanelsRenderHook::BODY_END,
            function () {
                $colorValue = $this->getColorValue();

                return view('filament-scroll-navigator::components.scroller', [
                    'color' => $colorValue,
                ]);
            },
        );
    }

    protected function getColorValue(): string
    {
        if (is_string($this->color)) {
            return $this->color;
        }

        if (is_array($this->color) && isset($this->color[500])) {
            return $this->color[500];
        }

        $colorName = array_search($this->color, (new \ReflectionClass(Color::class))->getConstants());
        if ($colorName !== false) {
            return strtolower($colorName);
        }

        return 'primary';
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
