<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserLoginsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_logins')->delete();
        
        \DB::table('user_logins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 8,
                'user_ip' => '124.123.119.143',
                'city' => 'Hyderabad',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '78.4378',
                'latitude' => '17.3724',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-18 19:25:08',
                'updated_at' => '2024-12-18 19:25:08',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 7,
                'user_ip' => '2409:40d0:118a:51e4:b0:5d43:5112:743f',
                'city' => 'New Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.1663',
                'latitude' => '28.652',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-24 14:23:53',
                'updated_at' => '2024-12-24 14:23:53',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 6,
                'user_ip' => '2409:40d0:118a:51e4:b0:5d43:5112:743f',
                'city' => 'New Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.1663',
                'latitude' => '28.652',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-24 14:27:17',
                'updated_at' => '2024-12-24 14:27:17',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'user_ip' => '2409:40d0:118a:51e4:b0:5d43:5112:743f',
                'city' => 'New Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.1663',
                'latitude' => '28.652',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-24 14:58:36',
                'updated_at' => '2024-12-24 14:58:36',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'user_ip' => '2409:40d0:118a:51e4:b0:5d43:5112:743f',
                'city' => 'New Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.1663',
                'latitude' => '28.652',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-24 17:15:00',
                'updated_at' => '2024-12-24 17:15:00',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 9,
                'user_ip' => '205.254.171.230',
                'city' => 'Hyderabad',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '78.4378',
                'latitude' => '17.3724',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-29 20:00:12',
                'updated_at' => '2024-12-29 20:00:12',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'user_ip' => '2405:201:4003:9840:e9ae:b059:2884:320f',
                'city' => 'New Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.1663',
                'latitude' => '28.652',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2024-12-31 21:45:02',
                'updated_at' => '2024-12-31 21:45:02',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 6,
                'user_ip' => '2409:40d0:1222:9b73:e9c4:4994:e9a3:d09a',
                'city' => 'Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.2373',
                'latitude' => '28.6542',
                'browser' => 'Firefox',
                'os' => 'Ubuntu',
                'created_at' => '2025-01-03 02:40:03',
                'updated_at' => '2025-01-03 02:40:03',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 3,
                'user_ip' => '2409:40d0:1222:9b73:e9c4:4994:e9a3:d09a',
                'city' => 'Delhi',
                'country' => 'India',
                'country_code' => 'IN',
                'longitude' => '77.2373',
                'latitude' => '28.6542',
                'browser' => 'Chrome',
                'os' => 'Linux',
                'created_at' => '2025-01-03 02:43:10',
                'updated_at' => '2025-01-03 02:43:10',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 6,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2025-01-04 12:34:41',
                'updated_at' => '2025-01-04 12:34:41',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 6,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2025-01-04 15:56:09',
                'updated_at' => '2025-01-04 15:56:09',
            ),
        ));
        
        
    }
}