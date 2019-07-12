<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = [
            ['name' => 'Male'],
            ['name' => 'Female'],
            ['name'=>'Other'],            
        ];
        DB::table('genders')->insert($gender);
    }
}
