<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_reviews')->delete();
        
        
        
    }
}