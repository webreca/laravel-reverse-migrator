<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home',
                'slug' => '/',
                'tempname' => 'presets.default.',
                'secs' => '["banner","recent_item","hot_deals","faq","testimonial","blog"]',
                'is_default' => 1,
                'created_at' => '2020-07-11 11:53:58',
                'updated_at' => '2024-11-13 03:18:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Browse',
                'slug' => 'browse',
                'tempname' => 'presets.default.',
                'secs' => '["banner","hot_deals","recent_item"]',
                'is_default' => 1,
                'created_at' => '2023-11-17 07:17:47',
                'updated_at' => '2024-10-27 18:59:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Blog',
                'slug' => 'blog',
                'tempname' => 'presets.default.',
                'secs' => NULL,
                'is_default' => 1,
                'created_at' => '2020-10-22 06:44:43',
                'updated_at' => '2023-11-23 17:40:28',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Contact Us',
                'slug' => 'contact',
                'tempname' => 'presets.default.',
                'secs' => NULL,
                'is_default' => 1,
                'created_at' => '2020-10-22 06:44:53',
                'updated_at' => '2023-11-23 17:46:22',
            ),
        ));
        
        
    }
}