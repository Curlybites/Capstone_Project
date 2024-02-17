<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Program Manager']);
        Role::create(['name' => 'Health Dept Warehouse']);
        Role::create(['name' => 'District Pharmacy']);
        Role::create(['name' => 'Health Center Staff']);
        Role::create(['name' => 'Supplier']);
    }
}
