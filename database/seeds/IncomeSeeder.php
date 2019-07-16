<?php

use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incomes = [
            ['name' => '30,000,000-40,000,000'],
            ['name' => '40,000,000-50,000,000'],
            ['name' => '50,000,000-75,000,000'],     
            ['name' => '75,000,000-100,000,000'], 
            ['name' => '100,000,000-125,000,000'], 
            ['name' => '125,000,000-150,000,000'], 
            ['name' => '150,000,000-200,000,000'], 
            ['name' => '200,000,000-300,000,000'], 
            ['name' => '300,000,000-400,000,000'], 
            ['name' => '400,000,000-500,000,000'], 
            ['name' => '500,000,000+'],    
        ];
        DB::table('incomes')->insert($incomes);
    }
}
