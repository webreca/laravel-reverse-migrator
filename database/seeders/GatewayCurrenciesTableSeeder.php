<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GatewayCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gateway_currencies')->delete();
        
        \DB::table('gateway_currencies')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Stripe Checkout - USD',
                'currency' => 'USD',
                'symbol' => '$',
                'method_code' => 114,
                'gateway_alias' => 'StripeV3',
                'min_amount' => '10.00000000',
                'max_amount' => '50000000000.00000000',
                'percent_charge' => '10.00',
                'fixed_charge' => '10.00000000',
                'rate' => '0.01200000',
                'image' => NULL,
                'gateway_parameter' => '{"secret_key":"sk_test_51M8Ks2CL65BWuH7eCBcWsLP2yPfWaLtfJVxG3zfii7cCWJE1izM4jkhucmBSm6izmVtSGZyp0JDYYCVmx9E4WmQY004gfnctzD","publishable_key":"pk_test_51M8Ks2CL65BWuH7eju6khGxJMpeeFuw2Rwrjr8UYCz6ZnQ3PiFxb1gVu1i1dBto9MQrnjkBimHkFJgNcqsrJHTak0010kCY41h","end_point":"abcd"}',
                'created_at' => '2024-12-15 18:24:19',
                'updated_at' => '2024-12-15 18:24:19',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'RazorPay - INR',
                'currency' => 'INR',
                'symbol' => '₹',
                'method_code' => 110,
                'gateway_alias' => 'Razorpay',
                'min_amount' => '1.00000000',
                'max_amount' => '10000000.00000000',
                'percent_charge' => '10.00',
                'fixed_charge' => '10.00000000',
                'rate' => '1.00000000',
                'image' => NULL,
                'gateway_parameter' => '{"key_id":"rzp_live_STLvERKRcpalY5","key_secret":"5KDwzm9PaNfZSyElfNb5rSxo"}',
                'created_at' => '2024-12-15 18:37:19',
                'updated_at' => '2024-12-15 18:37:19',
            ),
        ));
        
        
    }
}