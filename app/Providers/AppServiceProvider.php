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
        view()->share('colleges', [
          'rice' => [
            'name' => '飯學院',
            'departments' => [
              "lu-meat-rice" => [
                "name" => "魯肉飯"
              ],
              "oil-rice" => [
                "name" => "油飯"
              ],
              "meat-rice" => [
                "name" => "爌肉飯"
              ],
              "turkey-meat-rice" => [
                "name" => "火雞肉飯"
              ]
            ]
          ],
          'tofu' => [
            'name' => '豆腐學院',
            'departments' => [
              "stinky-tofu" => [
                "name" => "臭豆腐"
              ],
              "preserved-egg-tofu" => [
                "name" => "皮蛋豆腐"
              ],
              "mapo-tofu" => [
                "name" => "麻婆豆腐"
              ]
            ]
          ],
          'chicken' => [
            'name' => '鹹酥雞學院',
            'departments' => [
              "salty-crisp-chicken" => [
                "name" => "鹹酥雞",
              ],
              "chicken-row" => [
                "name" => "雞排",
              ],
              "chicken-ass" => [
                "name" => "雞屁股",
              ],
              "chicken-wings" => [
                "name" => "雞翅",
              ],
              "chicken-feet" => [
                "name" => "雞爪",
              ]
            ]
          ],
          'vermicelli' => [
            'name' => '麵線學院',
            'departments' => [
              "clear-vermicelli" => [
                "name" => "清麵線"
              ],
              "large-intestine-vermicelli" => [
                "name" => "大腸麵線"
              ],
              "oysters-vermicelli" => [
                "name" => "蚵仔麵線"
              ],
              "sesame-oil-vermicelli" => [
                "name" => "麻油麵線"
              ]
            ]
          ],
          'oysters' => [
            'name' => '蚵仔學院',
            'departments' => [
              "oyster-fried-oyster" => [
                "name" => "蚵仔煎"
              ],
              "oyster-soup" => [
                "name" => "蚵仔湯"
              ],
              "oyster-fritter" => [
                "name" => "蚵嗲"
              ],
              "baked-oysters" => [
                "name" => "烤牡犡"
              ]
            ]
          ],
          'beef_noodles' => [
            'name' => '牛肉麵學院',
            'departments' => [
              "braised-beef-noodles" => [
                "name" => "紅燒牛肉麵"
              ],
              "stew-beef-noodles" => [
                "name" => "清燉牛肉麵"
              ],
              "tamato-beef-noodles" => [
                "name" => "番茄牛肉麵"
              ]
            ]
          ],
          'thick_soup' => [
            'name' => '羹學院',
            'departments' => [
              "fried-spanish-mackerel-thick-soup" => [
                "name" => "土魠魚羹"
              ],
              "squid-thick-soup" => [
                "name" => "魷魚羹"
              ],
              "calamary-thick-soup" => [
                "name" => "花枝羹"
              ],
              "pork-thick-soup" => [
                "name" => "肉羹"
              ]
            ]
          ],
          'staple' => [
            'name' => '名產學院',
            'departments' => [
              "pineapple-cakes" => [
                "name" => "鳳梨酥"
              ],
              "ci-cake" => [
                "name" => "棋餅"
              ],
              "sun-cake" => [
                "name" => "太陽餅"
              ],
              "cow-tongue-cake" => [
                "name" => "牛舌餅"
              ],
              "peanut-candy" => [
                "name" => "花生糖"
              ]
            ]
          ],
          'pearl' => [
            'name' => '珍珠學院',
            'departments' => [
              "black-tapioca-pearls-curd" => [
                "name" => "粉圓豆花"
              ],
              "heart-tapioca" => [
                "name" => "包心粉圓"
              ],
              "pearl-milk-tea" => [
                "name" => "珍珠奶茶"
              ],
              "three-color-tapioca" => [
                "name" => "三色粉圓"
              ]
            ]
          ]
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
