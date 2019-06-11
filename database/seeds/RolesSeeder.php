<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Create roles with default guard (first).
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create(['name' => 'admin']);
        $advertiser_role = Role::create(['name' => 'advertiser']);
        $customer_role = Role::create(['name' => 'customer']);        
    }
}
