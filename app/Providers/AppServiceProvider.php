<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('pages.layout.header', function($view) {
            $path = app(Request::class)->path();
            $view->with([
                'path' => $path,
                'logo' => match ($path) {
                    '/' => 'casa-nova',
                    'servicos-ambientais' => 'ambiental',
                    'servicos-financeiros' => 'financeiro',
                    'seguranca-privada' => 'seguranca',
                    'compra-venda-veiculos' => 'veiculos',
                },
            ]);
        });
    }
}
