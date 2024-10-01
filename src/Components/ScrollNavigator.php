<?php

namespace HoceineEl\FilamentScrollNavigator\Components;

use Filament\Support\Components\ViewComponent;
use Illuminate\View\Component;
use Illuminate\View\View;

class ScrollNavigator extends ViewComponent
{
    protected string $view = 'filament-scroll-navigator::components.scroller';

    public static function make(): static
    {
        return app(static::class);
    }

    public function render(): View
    {
        return view($this->view);
    }
}
