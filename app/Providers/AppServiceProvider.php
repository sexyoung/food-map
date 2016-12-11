<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('foods', [
          'rice' => ["lu-meat-rice", "oil-rice", "meat-rice", "turkey-meat-rice"],
          'tofu' => ["stinky-tofu","preserved-egg-tofu","mapo-tofu"],
          'chicken' => ["salty-crisp-chicken","chicken-row","chicken-ass","chicken-wings","chicken-feet"],
          'vermicelli' => ["clear-vermicelli","large-intestine-vermicelli","oysters-vermicelli","sesame-oil-vermicelli"],
          'oysters' => ["oyster-fried-oyster","oyster-soup","oyster-fritter","baked-oysters"],
          'beef_noodles' => ["braised-beef-noodles","stew-beef-noodles","tamato-beef-noodles"],
          'thick_soup' => ["fried-spanish-mackerel-thick-soup","squid-thick-soup","calamary-thick-soup","pork-thick-soup"],
          'staple' => ["pineapple-cakes","ci-cake","sun-cake","cow-tongue-cake","peanut-candy"],
          'pearl' => ["black-tapioca-pearls-curd","heart-tapioca","pearl-milk-tea","three-color-tapioca"]
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
