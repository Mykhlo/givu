<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Korean'],
            ['name' => 'English'],
            ['name' => 'Japanese'],     
            ['name' => 'Chinese'], 
            ['name' => 'French'], 
        ];
        DB::table('languages')->insert($languages);
    }
}
