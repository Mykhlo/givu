<?php

use Illuminate\Database\Seeder;

class TargetSubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $target_subcategories =[
            [
                'name' => 'Activewear',
                'target_category_id' => '1',
            ],
            [
                'name' => 'Eyewear',
                'target_category_id' => '1',
            ],
            [
                'name' => 'Formal wear',
                'target_category_id' => '1',
            ],
            [
                'name' => 'Shoes',
                'target_category_id' => '1',
            ],
        ];
        DB::table('target_subcategories')->insert($target_subcategories);
    }
}
