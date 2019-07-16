<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            ['name' => 'No high school education'],
            ['name' => 'High school diploma'],
            ['name'=> 'Undergraduate diploma'],     
            ['name'=> 'Graduate'], 
            ['name'=> 'Post doc'],        
        ];
        DB::table('education')->insert($education);
    }
}
