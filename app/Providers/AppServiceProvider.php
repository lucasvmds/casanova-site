<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use ImageKit\ImageKit;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function getSharedViewData(): array
    {
        $path = app(Request::class)->path();
        return [
            'path' => $path,
            'logo' => match ($path) {
                '/' => 'casa-nova',
                'servicos-ambientais' => 'ambiental',
                'servicos-financeiros' => 'financeiro',
                'seguranca-privada' => 'seguranca',
                'compra-venda-veiculos' => 'veiculos',
                'corretora-seguros' => 'financeiro',
                default => 'financeiro',
            },
        ];
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('pages.layout.header', function($view) {
            $view->with($this->getSharedViewData());
        });

        View::composer('pages.layout.base', function($view) {
            $view->with($this->getSharedViewData());
        });

        $this->app->singleton(
            ImageKit::class,
            fn () => new ImageKit(
                config('services.imagekit.public_key'),
                config('services.imagekit.private_key'),
                config('services.imagekit.endpoint'),
            )
        );

        Blade::directive('image', function(string $expression): string {
            return "<?php echo generate_image($expression); ?>";
        });
    }
}
