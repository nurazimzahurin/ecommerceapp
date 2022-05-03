<?php

namespace Database\Seeders;

use App\Models\AdvertisementStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisementStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertisementStatus::firstOrCreate([
            'id' => AdvertisementStatus::INACTIVE
        ],[
            'name' => 'Inactive'
        ]);

        AdvertisementStatus::firstOrCreate([
            'id' => AdvertisementStatus::ACTIVE
        ],[
            'name' => 'Active'
        ]);
    }
}
