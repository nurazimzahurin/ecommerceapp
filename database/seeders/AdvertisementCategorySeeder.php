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
            'id' => AdvertisementCategory::APPAREL_ACCESSORIES
        ],[
            'name' => 'Apparel & Accessories'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::STYLE_FASHION
        ],[
            'name' => 'Style & Fashion'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::HOME_GARDEN
        ],[
            'name' => 'Home & Gardens'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::SPORT
        ],[
            'name' => 'Sport Accessories & Equipments'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::HEALTH_WELLNESS
        ],[
            'name' => 'Health & Wellness'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::CHILDREN_INFANTS
        ],[
            'name' => 'Children & Infants'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::PETS_SUPPLIES
        ],[
            'name' => 'Pet Supplies'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::ELECTRONICS
        ],[
            'name' => 'Electronics'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::DESIGN
        ],[
            'name' => 'Design'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::TECHNOLOGY
        ],[
            'name' => 'Technology'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::LABOR
        ],[
            'name' => 'Labor'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::CONSULTANCY
        ],[
            'name' => 'Consultancy'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::EDUCATION
        ],[
            'name' => 'Education'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::SANITATION
        ],[
            'name' => 'Sanitation'
        ]);

        AdvertisementCategory::firstOrCreate([
            'id' => AdvertisementCategory::ELECTRICAL_PLUMBING
        ],[
            'name' => 'Electrical & Plumbing'
        ]);
    }
}
