<?php

use Illuminate\Database\Seeder;

class TargetCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $target_categories = [
            ['name' => 'Apparel & Accessories'],
            ['name' => 'Vehicles'],
            ['name'=>'Gifts and occasions'],
            ['name' => 'Arts & Craft supplies'],
            ['name' => 'Beauty products and services'],
            ['name' => 'Cosumer electronics'],
            ['name' => 'Dating Services'],
            ['name' => 'Education'],
            ['name' => 'Events & Showbiz'],
            ['name' => 'Food'],
            ['name' => 'Home'],
            ['name' => 'Travel'],
        ];
        DB::table('target_categories')->insert($target_categories);
    }
}
