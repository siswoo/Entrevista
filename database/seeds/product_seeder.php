<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'mesa',
            'product_description' => 'mesa de madera',
            'price' => '20000',
        ]);
        DB::table('product')->insert([
            'name' => 'silla',
            'product_description' => 'silla de oficina',
            'price' => '90000',
        ]);
        DB::table('product')->insert([
            'name' => 'computador',
            'product_description' => 'de segunda',
            'price' => '500000',
        ]);
    }
}
