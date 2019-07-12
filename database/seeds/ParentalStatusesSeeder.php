<?php

use Illuminate\Database\Seeder;

class ParentalStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parental_status = [
            ['name' => 'With children'],
            ['name' => 'Without children'],           
        ];
        DB::table('parental_statuses')->insert($parental_status);
    }
}
