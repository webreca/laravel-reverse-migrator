<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('amenities')->delete();
        
        \DB::table('amenities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Free Wi-Fi',
                'logo' => 'wifi.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 12:58:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Swimming Pool',
                'logo' => 'swimming-pool.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'In-House Restaurant',
                'logo' => 'in-house-restaurant.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gym',
                'logo' => 'gym.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Spa',
                'logo' => 'spa.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bar',
                'logo' => 'bar.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Smart TV',
                'logo' => 'smart-tv.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Hair Dryer',
                'logo' => 'hair-dryer.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Air Conditioner',
                'logo' => 'air-conditioner.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Free Parking',
                'logo' => 'free-parking.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Transportation Arrangement',
                'logo' => 'transportation-arrangement.png',
                'status' => 1,
                'created_at' => '2025-01-04 07:09:06',
                'updated_at' => '2025-01-04 07:09:06',
            ),
        ));
        
        
    }
}