<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrgCategoriesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(TargetSubcategoriesTableSeeder::class);
        $this->call(TargetCategoriesTableSeeder::class);
        $this->call(TargetItemsTableSeeder::class);
    }
}
