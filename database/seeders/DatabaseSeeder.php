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

        $permisos = Permission::all();

        foreach ($permisos as $permiso) {
            $permiso->delete();
        }
        
        Permission::create(['name' => 'administrar dashboard']);
        Permission::create(['name' => 'administrar prestamo']);
        Permission::create(['name' => 'administrar recursos']);
        Permission::create(['name' => 'administrar categoria']);
        Permission::create(['name' => 'administrar editorial']);
        Permission::create(['name' => 'administrar author']);
        Permission::create(['name' => 'administrar usuario-menu']);
        Permission::create(['name' => 'administrar admin-system']);
        Permission::create(['name' => 'administrar admin-permisos']);
       
    }
}
