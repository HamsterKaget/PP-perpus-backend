<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create the roles
        Role::create(['name' => 'siswa']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'guru']);

    }
}
