<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $cities = array(
            array('name' => 'Kiev'),
            array('name' => 'Lvov'),
            array('name' => 'Odessa'),
        );

        DB::table('cities')->insert($cities);
    }
}
