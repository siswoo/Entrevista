<?php

use Illuminate\Database\Seeder;

class customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name' => 'juan',
            'email' => 'juan@gmail.com',
        ]);
        DB::table('customer')->insert([
            'name' => 'andres',
            'email' => 'andres2019@gmail.com',
        ]);
        DB::table('customer')->insert([
            'name' => 'alejandra',
            'email' => 'aleja@gmail.com',
        ]);
    }
}
