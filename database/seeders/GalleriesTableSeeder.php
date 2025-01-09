<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 4,
                'property_id' => 3,
                'image' => '67432225adf681732452901.jpg',
                'created_at' => '2024-11-25 00:25:02',
                'updated_at' => '2024-11-25 00:25:02',
            ),
            1 => 
            array (
                'id' => 5,
                'property_id' => 3,
                'image' => '67432226573c71732452902.jpg',
                'created_at' => '2024-11-25 00:25:04',
                'updated_at' => '2024-11-25 00:25:04',
            ),
            2 => 
            array (
                'id' => 6,
                'property_id' => 3,
                'image' => '6743222828efa1732452904.jpg',
                'created_at' => '2024-11-25 00:25:06',
                'updated_at' => '2024-11-25 00:25:06',
            ),
            3 => 
            array (
                'id' => 7,
                'property_id' => 4,
                'image' => '67432367e985d1732453223.jpg',
                'created_at' => '2024-11-25 00:30:24',
                'updated_at' => '2024-11-25 00:30:24',
            ),
            4 => 
            array (
                'id' => 8,
                'property_id' => 4,
                'image' => '674323687d6e51732453224.jpg',
                'created_at' => '2024-11-25 00:30:26',
                'updated_at' => '2024-11-25 00:30:26',
            ),
            5 => 
            array (
                'id' => 9,
                'property_id' => 4,
                'image' => '6743236a5bf801732453226.jpg',
                'created_at' => '2024-11-25 00:30:28',
                'updated_at' => '2024-11-25 00:30:28',
            ),
            6 => 
            array (
                'id' => 10,
                'property_id' => 5,
                'image' => '67432ae0d83451732455136.jpg',
                'created_at' => '2024-11-25 01:02:17',
                'updated_at' => '2024-11-25 01:02:17',
            ),
            7 => 
            array (
                'id' => 11,
                'property_id' => 5,
                'image' => '67432ae1b3fb31732455137.jpg',
                'created_at' => '2024-11-25 01:02:19',
                'updated_at' => '2024-11-25 01:02:19',
            ),
            8 => 
            array (
                'id' => 12,
                'property_id' => 5,
                'image' => '67432ae36a4dc1732455139.jpg',
                'created_at' => '2024-11-25 01:02:21',
                'updated_at' => '2024-11-25 01:02:21',
            ),
            9 => 
            array (
                'id' => 13,
                'property_id' => 6,
                'image' => '674b0da77aee41732971943.jpg',
                'created_at' => '2024-12-01 00:35:44',
                'updated_at' => '2024-12-01 00:35:44',
            ),
            10 => 
            array (
                'id' => 14,
                'property_id' => 6,
                'image' => '674b0da8b739e1732971944.jpg',
                'created_at' => '2024-12-01 00:35:45',
                'updated_at' => '2024-12-01 00:35:45',
            ),
            11 => 
            array (
                'id' => 15,
                'property_id' => 6,
                'image' => '674b0da9c94fb1732971945.jpg',
                'created_at' => '2024-12-01 00:35:46',
                'updated_at' => '2024-12-01 00:35:46',
            ),
            12 => 
            array (
                'id' => 16,
                'property_id' => 7,
                'image' => '6756f6d676a091733752534.jpg',
                'created_at' => '2024-12-10 01:25:34',
                'updated_at' => '2024-12-10 01:25:34',
            ),
            13 => 
            array (
                'id' => 17,
                'property_id' => 7,
                'image' => '6756f6d6947641733752534.jpg',
                'created_at' => '2024-12-10 01:25:34',
                'updated_at' => '2024-12-10 01:25:34',
            ),
            14 => 
            array (
                'id' => 18,
                'property_id' => 7,
                'image' => '6756f6d6b0c031733752534.jpg',
                'created_at' => '2024-12-10 01:25:34',
                'updated_at' => '2024-12-10 01:25:34',
            ),
            15 => 
            array (
                'id' => 19,
                'property_id' => 7,
                'image' => '6756f6d6bed321733752534.jpg',
                'created_at' => '2024-12-10 01:25:34',
                'updated_at' => '2024-12-10 01:25:34',
            ),
            16 => 
            array (
                'id' => 20,
                'property_id' => 7,
                'image' => '6756f6d6d448b1733752534.jpg',
                'created_at' => '2024-12-10 01:25:34',
                'updated_at' => '2024-12-10 01:25:34',
            ),
            17 => 
            array (
                'id' => 21,
                'property_id' => 8,
                'image' => '675981350fd4b1733919029.jpg',
                'created_at' => '2024-12-11 23:40:29',
                'updated_at' => '2024-12-11 23:40:29',
            ),
            18 => 
            array (
                'id' => 22,
                'property_id' => 8,
                'image' => '675981351a96e1733919029.jpg',
                'created_at' => '2024-12-11 23:40:29',
                'updated_at' => '2024-12-11 23:40:29',
            ),
            19 => 
            array (
                'id' => 23,
                'property_id' => 8,
                'image' => '67598135231661733919029.jpg',
                'created_at' => '2024-12-11 23:40:29',
                'updated_at' => '2024-12-11 23:40:29',
            ),
            20 => 
            array (
                'id' => 24,
                'property_id' => 2,
                'image' => '67619c35691b71734450229.jpg',
                'created_at' => '2024-12-18 03:13:51',
                'updated_at' => '2024-12-18 03:13:51',
            ),
            21 => 
            array (
                'id' => 25,
                'property_id' => 2,
                'image' => '67619c374641a1734450231.jpg',
                'created_at' => '2024-12-18 03:13:52',
                'updated_at' => '2024-12-18 03:13:52',
            ),
            22 => 
            array (
                'id' => 26,
                'property_id' => 2,
                'image' => '67619c38709931734450232.jpg',
                'created_at' => '2024-12-18 03:13:53',
                'updated_at' => '2024-12-18 03:13:53',
            ),
            23 => 
            array (
                'id' => 27,
                'property_id' => 1,
                'image' => '67619c7d6ee7d1734450301.jpg',
                'created_at' => '2024-12-18 03:15:02',
                'updated_at' => '2024-12-18 03:15:02',
            ),
            24 => 
            array (
                'id' => 28,
                'property_id' => 1,
                'image' => '67619c7e7ed481734450302.jpg',
                'created_at' => '2024-12-18 03:15:02',
                'updated_at' => '2024-12-18 03:15:02',
            ),
            25 => 
            array (
                'id' => 29,
                'property_id' => 1,
                'image' => '67619c7ec71981734450302.jpg',
                'created_at' => '2024-12-18 03:15:03',
                'updated_at' => '2024-12-18 03:15:03',
            ),
            26 => 
            array (
                'id' => 30,
                'property_id' => 9,
                'image' => '676a2aa768a111735010983.jpg',
                'created_at' => '2024-12-24 14:59:43',
                'updated_at' => '2024-12-24 14:59:43',
            ),
            27 => 
            array (
                'id' => 31,
                'property_id' => 9,
                'image' => '676a2aa79d7cb1735010983.jpg',
                'created_at' => '2024-12-24 14:59:45',
                'updated_at' => '2024-12-24 14:59:45',
            ),
            28 => 
            array (
                'id' => 32,
                'property_id' => 9,
                'image' => '676a2aa932c8a1735010985.jpg',
                'created_at' => '2024-12-24 14:59:45',
                'updated_at' => '2024-12-24 14:59:45',
            ),
            29 => 
            array (
                'id' => 33,
                'property_id' => 10,
                'image' => '67711100e0bc71735463168.jpg',
                'created_at' => '2024-12-29 20:06:08',
                'updated_at' => '2024-12-29 20:06:08',
            ),
            30 => 
            array (
                'id' => 34,
                'property_id' => 10,
                'image' => '67711100efe2e1735463168.png',
                'created_at' => '2024-12-29 20:06:09',
                'updated_at' => '2024-12-29 20:06:09',
            ),
            31 => 
            array (
                'id' => 35,
                'property_id' => 10,
                'image' => '6771110135cfe1735463169.png',
                'created_at' => '2024-12-29 20:06:09',
                'updated_at' => '2024-12-29 20:06:09',
            ),
            32 => 
            array (
                'id' => 40,
                'property_id' => 11,
                'image' => '6771189d305231735465117.jpg',
                'created_at' => '2024-12-29 20:38:38',
                'updated_at' => '2024-12-29 20:38:38',
            ),
            33 => 
            array (
                'id' => 41,
                'property_id' => 11,
                'image' => '6771189eb7ba21735465118.jpg',
                'created_at' => '2024-12-29 20:38:40',
                'updated_at' => '2024-12-29 20:38:40',
            ),
            34 => 
            array (
                'id' => 42,
                'property_id' => 11,
                'image' => '677118a03f16e1735465120.jpg',
                'created_at' => '2024-12-29 20:38:42',
                'updated_at' => '2024-12-29 20:38:42',
            ),
            35 => 
            array (
                'id' => 43,
                'property_id' => 12,
                'image' => '6776b62e2a2b71735833134.jpg',
                'created_at' => '2025-01-03 02:52:15',
                'updated_at' => '2025-01-03 02:52:15',
            ),
            36 => 
            array (
                'id' => 44,
                'property_id' => 12,
                'image' => '6776b62fc77f81735833135.jpg',
                'created_at' => '2025-01-03 02:52:16',
                'updated_at' => '2025-01-03 02:52:16',
            ),
            37 => 
            array (
                'id' => 45,
                'property_id' => 12,
                'image' => '6776b630dde151735833136.jpg',
                'created_at' => '2025-01-03 02:52:18',
                'updated_at' => '2025-01-03 02:52:18',
            ),
            38 => 
            array (
                'id' => 46,
                'property_id' => 13,
                'image' => '6778ee1ea47431735978526.jpg',
                'created_at' => '2025-01-04 13:45:28',
                'updated_at' => '2025-01-04 13:45:28',
            ),
            39 => 
            array (
                'id' => 47,
                'property_id' => 13,
                'image' => '6778ee2032b4a1735978528.jpg',
                'created_at' => '2025-01-04 13:45:29',
                'updated_at' => '2025-01-04 13:45:29',
            ),
            40 => 
            array (
                'id' => 48,
                'property_id' => 13,
                'image' => '6778ee21248c51735978529.jpg',
                'created_at' => '2025-01-04 13:45:35',
                'updated_at' => '2025-01-04 13:45:35',
            ),
        ));
        
        
    }
}