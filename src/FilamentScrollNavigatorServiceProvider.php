<?php

namespace HoceineEl\FilamentScrollNavigator;

use Filament\Facades\Filament;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Filament\View\PanelsRenderHook;
use HoceineEl\FilamentScrollNavigator\Components\ScrollNavigator;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentScrollNavigatorServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-scroll-navigator';

    public static string $viewNamespace = 'filament-scroll-navigator';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishAssets();
            });


        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        Filament::registerRenderHook(
            PanelsRenderHook::BODY_END,
            fn() => view('filament-scroll-navigator::components.scroller'),
        );

        FilamentAsset::register([
            Css::make('filament-scroll-navigator-styles', __DIR__ . '/../dist/assets/css/filament-scroll-navigator.css'),
            Js::make('filament-scroll-navigator-scripts', __DIR__ . '/../dist/assets/js/filament-scroll-navigator2.js'),
        ], 'hoceineel/filament-scroll-navigator');
    }

    protected function getAssetPackageName(): ?string
    {
        return 'hoceineel/filament-scroll-navigator';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-scroll-navigator-styles', __DIR__ . '/../dist/assets/css/filament-scroll-navigator.css')->loadedOnRequest(),
            Js::make('filament-scroll-navigator-scripts', __DIR__ . '/../dist/assets/js/filament-scroll-navigator2.js')
                ->loadedOnRequest(),
        ];
    }


    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }
}
