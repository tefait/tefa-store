<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
            [
                'name' => 'Carousel Image',
                'value' => 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/5/29/d941571a-437e-443a-9db6-babf4f9780f6.jpg.webp?ect=4g;https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/5/31/70cafaaf-9149-4b4b-a16c-847a270fb92a.jpg.webp?ect=4g',
                'type' => 'multi_image',
            ],
            [
                'name' => 'Site Name',
                'value' => 'Tefa Ecommerce',
                'type' => 'text',
            ],
            [
                'name' => 'Site Logo',
                'value' => '/assets/img/logo2.png',
                'type' => 'image',
            ],
            [
                'name' => 'Site favicon',
                'value' => '/favicon.ico',
                'type' => 'image',
            ],
            [
                'name' => 'Product per page',
                'value' => '12',
                'type' => 'text',
            ],
            [
                'name' => 'Upcoming product',
                'value' => '/assets/img/new-product.png;/assets/img/new-product.png;/assets/img/new-product.png;/assets/img/new-product.png;/assets/img/new-product.png;/assets/img/new-product.png',
                'type' => 'multi_image',
            ],
            [
                'name' => 'WhatsApp',
                'value' => '0878-9481-8815',
                'type' => 'text',
            ],
            [
                'name' => 'Email',
                'value' => 'tefaitrpl@gmail.com',
                'type' => 'text',
            ],
        ];

        foreach ($setting as $set) {
            Setting::create($set);
        }

        try {
            Cache::forget('settings');
        } catch (\Throwable $th) {
        }
        Cache::rememberForever(
            'settings',
            fn () => Setting::all()->keyBy('key'),
        );
    }
}
