<?php

namespace Database\Seeders;

use App\Models\AdvertisementCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisementCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::GRAPHICS_DESIGN
        ],[
            'name' => 'Graphics & Design'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::DIGITAL_MARKETING
        ],[
            'name' => 'Digital Marketing'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::WRITING_TRANSLATION
        ],[
            'name' => 'Writing & Translation'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::VIDEO_ANIMATION
        ],[
            'name' => 'Video & Animation'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::MUSIC_AUDIO
        ],[
            'name' => 'Music & Audio'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::PROGRAMMING_TECH
        ],[
            'name' => 'Programming & Tech'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::BUSINESS
        ],[
            'name' => 'Business'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::LIFESTYLES
        ],[
            'name' => 'Lifestyles'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::INDUSTRIES
        ],[
            'name' => 'Industries'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::SELL_BUY
        ],[
            'name' => 'Buy and Sell'
        ]);
    }
}
