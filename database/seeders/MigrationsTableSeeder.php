<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2025_01_04_104704_create_admin_notifications_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2025_01_04_104704_create_admin_password_resets_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2025_01_04_104704_create_admin_reviews_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2025_01_04_104704_create_admins_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2025_01_04_104704_create_amenities_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2025_01_04_104704_create_booking_guests_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2025_01_04_104704_create_bookings_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2025_01_04_104704_create_categories_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2025_01_04_104704_create_commission_logs_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2025_01_04_104704_create_coupons_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2025_01_04_104704_create_customers_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2025_01_04_104704_create_deposits_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2025_01_04_104704_create_extensions_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2025_01_04_104704_create_forms_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2025_01_04_104704_create_frontends_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2025_01_04_104704_create_galleries_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2025_01_04_104704_create_gateway_currencies_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2025_01_04_104704_create_gateways_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2025_01_04_104704_create_general_settings_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2025_01_04_104704_create_languages_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2025_01_04_104704_create_notification_logs_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2025_01_04_104704_create_notification_templates_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2025_01_04_104704_create_pages_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2025_01_04_104704_create_password_resets_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2025_01_04_104704_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2025_01_04_104704_create_properties_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2025_01_04_104704_create_reviews_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2025_01_04_104704_create_subscribers_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2025_01_04_104704_create_support_attachments_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2025_01_04_104704_create_support_messages_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2025_01_04_104704_create_support_tickets_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2025_01_04_104704_create_transactions_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2025_01_04_104704_create_types_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2025_01_04_104704_create_user_logins_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2025_01_04_104704_create_users_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2025_01_04_104704_create_withdraw_methods_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2025_01_04_104704_create_withdrawals_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2025_01_04_104955_create_admin_notifications_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2025_01_04_104955_create_admin_password_resets_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2025_01_04_104955_create_admin_reviews_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2025_01_04_104955_create_admins_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2025_01_04_104955_create_amenities_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2025_01_04_104955_create_booking_guests_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2025_01_04_104955_create_bookings_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2025_01_04_104955_create_categories_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2025_01_04_104955_create_commission_logs_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2025_01_04_104955_create_coupons_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2025_01_04_104955_create_customers_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2025_01_04_104955_create_deposits_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2025_01_04_104955_create_extensions_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2025_01_04_104955_create_forms_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2025_01_04_104955_create_frontends_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2025_01_04_104955_create_galleries_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2025_01_04_104955_create_gateway_currencies_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2025_01_04_104955_create_gateways_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2025_01_04_104955_create_general_settings_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2025_01_04_105022_create_admin_notifications_table',
                'batch' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2025_01_04_105022_create_admin_password_resets_table',
                'batch' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2025_01_04_105022_create_admin_reviews_table',
                'batch' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2025_01_04_105022_create_admins_table',
                'batch' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2025_01_04_105022_create_amenities_table',
                'batch' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2025_01_04_105022_create_booking_guests_table',
                'batch' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2025_01_04_105022_create_bookings_table',
                'batch' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2025_01_04_105022_create_categories_table',
                'batch' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2025_01_04_105045_create_admin_notifications_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2025_01_04_105045_create_admin_password_resets_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2025_01_04_105045_create_admin_reviews_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2025_01_04_105045_create_admins_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2025_01_04_105045_create_amenities_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2025_01_04_105045_create_booking_guests_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2025_01_04_105045_create_bookings_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2025_01_04_105045_create_categories_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2025_01_04_105045_create_commission_logs_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2025_01_04_105045_create_coupons_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2025_01_04_105045_create_customers_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2025_01_04_105045_create_deposits_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'migration' => '2025_01_04_105045_create_extensions_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'migration' => '2025_01_04_105045_create_forms_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'migration' => '2025_01_04_105045_create_frontends_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'migration' => '2025_01_04_105045_create_galleries_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'migration' => '2025_01_04_105045_create_gateway_currencies_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'migration' => '2025_01_04_105045_create_gateways_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'migration' => '2025_01_04_105045_create_general_settings_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'migration' => '2025_01_04_105045_create_languages_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'migration' => '2025_01_04_105045_create_notification_logs_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'migration' => '2025_01_04_105045_create_notification_templates_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'migration' => '2025_01_04_105045_create_pages_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'migration' => '2025_01_04_105045_create_password_resets_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'migration' => '2025_01_04_105045_create_personal_access_tokens_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'migration' => '2025_01_04_105045_create_properties_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'migration' => '2025_01_04_105045_create_reviews_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'migration' => '2025_01_04_105045_create_subscribers_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'migration' => '2025_01_04_105045_create_support_attachments_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'migration' => '2025_01_04_105045_create_support_messages_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'migration' => '2025_01_04_105045_create_support_tickets_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'migration' => '2025_01_04_105045_create_transactions_table',
                'batch' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'migration' => '2025_01_04_105045_create_types_table',
                'batch' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'migration' => '2025_01_04_105045_create_user_logins_table',
                'batch' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'migration' => '2025_01_04_105045_create_users_table',
                'batch' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'migration' => '2025_01_04_105045_create_withdraw_methods_table',
                'batch' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'migration' => '2025_01_04_105045_create_withdrawals_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}