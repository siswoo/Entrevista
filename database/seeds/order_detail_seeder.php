<?php

use Illuminate\Database\Seeder;

class order_detail_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_details')->insert([
            'order_id' => '1',
            'product_description' => 'mesa',
            'price' => '100000',
            'quantily' => '2',
            'delivery_address' => 'Bogota',
        ]);
        DB::table('orders_details')->insert([
            'order_id' => '2',
            'product_description' => 'silla',
            'price' => '180000',
            'quantily' => '2',
            'delivery_address' => 'Bogota',
        ]);
        DB::table('orders_details')->insert([
            'order_id' => '3',
            'product_description' => 'de segunda',
            'price' => '1000000',
            'quantily' => '2',
            'delivery_address' => 'Bogota',
        ]);
    }
}
