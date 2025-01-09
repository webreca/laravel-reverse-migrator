<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Themed',
                'icon' => '<i class="fas fa-house-damage"></i>',
                'status' => 1,
                'created_at' => '2024-11-02 16:10:38',
                'updated_at' => '2025-01-03 03:53:19',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Creative Spaces',
                'icon' => '<i class="fab fa-firefox"></i>',
                'status' => 1,
                'created_at' => '2024-11-02 16:10:38',
                'updated_at' => '2024-11-02 16:10:38',
            ),
            2 => 
            array (
                'id' => 15,
                'name' => 'Business',
                'icon' => '<i class="fas fa-business-time"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:27:19',
                'updated_at' => '2024-12-31 05:27:19',
            ),
            3 => 
            array (
                'id' => 16,
                'name' => 'Shopping',
                'icon' => '<i class="fas fa-funnel-dollar"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:28:00',
                'updated_at' => '2025-01-03 03:50:26',
            ),
            4 => 
            array (
                'id' => 17,
                'name' => 'Holiday',
                'icon' => '<i class="fab fa-staylinked"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:28:30',
                'updated_at' => '2024-12-31 05:28:30',
            ),
            5 => 
            array (
                'id' => 18,
                'name' => 'Pleasure',
                'icon' => '<i class="far fa-kiss-wink-heart"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:28:54',
                'updated_at' => '2024-12-31 05:28:54',
            ),
            6 => 
            array (
                'id' => 19,
                'name' => 'Fun Stay',
                'icon' => '<i class="fas fa-temperature-low"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:37:30',
                'updated_at' => '2024-12-31 05:37:30',
            ),
            7 => 
            array (
                'id' => 20,
                'name' => 'Retreat',
                'icon' => '<i class="las la-cookie-bite"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:39:42',
                'updated_at' => '2024-12-31 05:39:42',
            ),
            8 => 
            array (
                'id' => 21,
                'name' => 'Party',
                'icon' => '<i class="fas fa-cocktail"></i>',
                'status' => 1,
                'created_at' => '2024-12-31 05:41:31',
                'updated_at' => '2024-12-31 05:41:31',
            ),
        ));
        
        
    }
}