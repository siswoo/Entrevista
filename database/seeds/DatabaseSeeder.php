<?php

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
        // $this->call(UsersTableSeeder::class);
         $this->call(product_seeder::class);
         $this->call(customer_seeder::class);
         $this->call(customer_product_seeder::class);
         $this->call(order_seeder::class);
         $this->call(order_detail_seeder::class);
    }
}
