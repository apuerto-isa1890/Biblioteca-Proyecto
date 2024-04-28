<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Categoria::factory(100)->create();

        Permission::create(['name' => 'administrar usuarios']);
        Permission::create(['name' => 'administrar categorias']);
        Permission::create(['name' => 'administrar recursos']);
        Permission::create(['name' => 'administrar roles']);
        Permission::create(['name' => 'administrar permisos']);
    }
}
