<?php

use Illuminate\Database\Seeder;

class order_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'customer_id' => '1',
            'total' => '50000',
            'creation_date' => '2019/11/05',
        ]);
        DB::table('orders')->insert([
            'customer_id' => '2',
            'total' => '90000',
            'creation_date' => '2019/11/08',
        ]);
        DB::table('orders')->insert([
            'customer_id' => '3',
            'total' => '500000',
            'creation_date' => '2019/11/10',
        ]);
    }
}
