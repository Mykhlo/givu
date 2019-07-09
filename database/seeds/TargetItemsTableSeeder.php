<?php

use Illuminate\Database\Seeder;

class TargetItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $target_items = [
            [
                'name' => 'Running wear',
                'target_category_id' => '1',
                'target_subcategory_id' => '1',
            ],
            [
                'name' => 'Yoga wear',
                'target_category_id' => '1',
                'target_subcategory_id' => '1',
            ],
            [
                'name' => 'Costumes',
                'target_category_id' => '1',
                'target_subcategory_id' => '1',
            ],
            [
                'name' => 'Eyeglasses / Contact Lenses',
                'target_category_id' => '1',
                'target_subcategory_id' => '2',
            ],
            [
                'name' => 'Sunglasses',
                'target_category_id' => '1',
                'target_subcategory_id' => '2',
            ],
            [
                'name' => 'Suits and business attire',
                'target_category_id' => '1',
                'target_subcategory_id' => '3',
            ],
            [
                'name' => 'Handbags',
                'target_category_id' => '1',
                'target_subcategory_id' => '3',
            ],
            [
                'name' => 'Jewelry',
                'target_category_id' => '1',
                'target_subcategory_id' => '3',
            ],
            [
                'name' => 'Watches',
                'target_category_id' => '1',
                'target_subcategory_id' => '3',
            ],
            [
                'name' => 'Lingerie & underwear',
                'target_category_id' => '1',
                'target_subcategory_id' => '3',
            ],
            [
                'name' => 'luggage',
                'target_category_id' => '1',
                'target_subcategory_id' => '3',
            ],            
            [
                'name' => 'Athletic',
                'target_category_id' => '1',
                'target_subcategory_id' => '4',
            ],
            [
                'name' => 'Boots',
                'target_category_id' => '1',
                'target_subcategory_id' => '4',
            ],
            [
                'name' => 'Dress shoes',
                'target_category_id' => '1',
                'target_subcategory_id' => '4',
            ],
            [
                'name' => 'Socks',
                'target_category_id' => '1',
                'target_subcategory_id' => '4',
            ],
            [
                'name' => 'Swimwear',
                'target_category_id' => '1',    
                'target_subcategory_id' => '5',            
            ],
            [
                'name' => 'Wallets & briefcases & leather goods',
                'target_category_id' => '1', 
                'target_subcategory_id' => '5',               
            ],
            [
                'name' => 'Boats',
                'target_category_id' => '2', 
                'target_subcategory_id' => '6',               
            ], 
            [
                'name' => 'Camping-car',
                'target_category_id' => '2', 
                'target_subcategory_id' => '6',               
            ], 
            [
                'name' => 'Commercial vehicles',
                'target_category_id' => '2', 
                'target_subcategory_id' => '6',               
            ], 
            [
                'name' => 'Bikes',
                'target_category_id' => '2', 
                'target_subcategory_id' => '6',               
            ],           
        ];
        DB::table('target_items')->insert($target_items);
    }
}
