<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\product::factory(10)->create();
        \App\Models\productCategory::factory(5)->create();
        \App\Models\order::factory(10)->create();
        \App\Models\enq::factory(10)->create();
        \App\Models\coupon::factory(5)->create();
        \App\Models\color::factory(10)->create();
        \App\Models\cart::factory(10)->create();
        \App\Models\blog::factory(5)->create(); 
        \App\Models\blogCategory::factory(2)->create(); 
    }
}
