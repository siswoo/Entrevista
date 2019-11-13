<?php

use Illuminate\Database\Seeder;

class customer_product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_product')->insert([
            'customer_id' => '1',
            'product_id' => '1',
        ]);
        DB::table('customer_product')->insert([
            'customer_id' => '2',
            'product_id' => '2',
        ]);
        DB::table('customer_product')->insert([
            'customer_id' => '3',
            'product_id' => '3',
        ]);
    }
}
