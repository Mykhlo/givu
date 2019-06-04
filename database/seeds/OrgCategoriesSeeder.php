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
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Animal rights',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Human rights',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Education',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Development',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Health',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Art and culture',
                'created_at' => \Carbon\Carbon::now(),
            ],
            // [
            //     'name' => 'test',
            //     'created_at' => \Carbon\Carbon::now(),
            // ],              
        ];
        DB::table('org_categories')->insert($orgs);
    }
}
