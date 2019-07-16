<?php

use Illuminate\Database\Seeder;

class OrgCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $orgs = [
            [
                'name' => 'Environment',                
            ],
            [
                'name' => 'Animal rights',                
            ],
            [
                'name' => 'Human rights',                
            ],
            [
                'name' => 'Education',                
            ],
            [
                'name' => 'Development',                
            ],
            [
                'name' => 'Health',                
            ],
            [
                'name' => 'Art and culture',                
            ],                         
        ];
        DB::table('org_categories')->insert($orgs);
    }
}
