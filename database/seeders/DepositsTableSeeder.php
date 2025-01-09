<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepositsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deposits')->delete();
        
        \DB::table('deposits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 7,
                'booking_id' => 14,
                'property_id' => 7,
                'customer_id' => 1,
                'method_code' => 114,
                'amount' => '680.00000000',
                'method_currency' => 'USD',
                'charge' => '78.00000000',
                'rate' => '0.01200000',
                'final_amo' => '9.09600000',
                'detail' => NULL,
                'btc_amo' => '0',
                'btc_wallet' => 'cs_test_a1vH590WcDSqdcvSqTjRe7isL9kFhQFPa3qqOS64KUealpzbC1l67UjMnC',
                'trx' => '9HXKX19BHERW',
                'try' => 0,
                'status' => 0,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2024-12-18 03:37:34',
                'updated_at' => '2024-12-18 03:37:37',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 6,
                'booking_id' => 17,
                'property_id' => 9,
                'customer_id' => 1,
                'method_code' => 110,
                'amount' => '450.00000000',
                'method_currency' => 'INR',
                'charge' => '55.00000000',
                'rate' => '1.00000000',
                'final_amo' => '505.00000000',
                'detail' => NULL,
                'btc_amo' => '0',
                'btc_wallet' => 'order_PauWEmXfhim4Pi',
                'trx' => '3ZNBWQAXV9T2',
                'try' => 0,
                'status' => 0,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2024-12-24 17:44:04',
                'updated_at' => '2024-12-24 17:44:09',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 6,
                'booking_id' => 18,
                'property_id' => 9,
                'customer_id' => 1,
                'method_code' => 110,
                'amount' => '10.00000000',
                'method_currency' => 'INR',
                'charge' => '11.00000000',
                'rate' => '1.00000000',
                'final_amo' => '21.00000000',
                'detail' => '{"hidden":null,"razorpay_payment_id":"pay_PauaSCfndMOuYB","razorpay_order_id":"order_PauZsiDJ4U5GjK","razorpay_signature":"6610c23ee4c1f78522bd2793bcff688606007befc240d3d7beceb2ea46a09b06"}',
                'btc_amo' => '0',
                'btc_wallet' => 'order_PauZsiDJ4U5GjK',
                'trx' => 'SNDRB18M7DNT',
                'try' => 0,
                'status' => 1,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2024-12-24 17:47:32',
                'updated_at' => '2024-12-24 17:48:24',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 9,
                'booking_id' => 19,
                'property_id' => 10,
                'customer_id' => 6,
                'method_code' => 110,
                'amount' => '1250.00000000',
                'method_currency' => 'INR',
                'charge' => '135.00000000',
                'rate' => '1.00000000',
                'final_amo' => '1385.00000000',
                'detail' => NULL,
                'btc_amo' => '0',
                'btc_wallet' => 'order_PcwDFvkwG0rWko',
                'trx' => 'EROZMZAKZ6Q5',
                'try' => 0,
                'status' => 0,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2024-12-29 20:11:28',
                'updated_at' => '2024-12-29 20:11:34',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 10,
                'booking_id' => 20,
                'property_id' => 11,
                'customer_id' => 6,
                'method_code' => 110,
                'amount' => '24.00000000',
                'method_currency' => 'INR',
                'charge' => '12.40000000',
                'rate' => '1.00000000',
                'final_amo' => '36.40000000',
                'detail' => '{"hidden":null,"razorpay_payment_id":"pay_Pcwmblne9dlAXC","razorpay_order_id":"order_PcwjSBr9ZhknZm","razorpay_signature":"09b9b61a0662298dfb1146e7366d679c49ab78375824c933383c95532f7219e2"}',
                'btc_amo' => '0',
                'btc_wallet' => 'order_PcwjSBr9ZhknZm',
                'trx' => 'DGSXKONTS9AW',
                'try' => 0,
                'status' => 1,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2024-12-29 20:41:58',
                'updated_at' => '2024-12-29 20:45:17',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 6,
                'booking_id' => 23,
                'property_id' => 13,
                'customer_id' => 1,
                'method_code' => 110,
                'amount' => '1000.00000000',
                'method_currency' => 'INR',
                'charge' => '110.00000000',
                'rate' => '1.00000000',
                'final_amo' => '1110.00000000',
                'detail' => NULL,
                'btc_amo' => '0',
                'btc_wallet' => 'order_PfKWjIUNwS3xGn',
                'trx' => 'W43EPOT8QXJJ',
                'try' => 0,
                'status' => 0,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2025-01-04 15:46:09',
                'updated_at' => '2025-01-04 15:46:39',
            ),
        ));
        
        
    }
}