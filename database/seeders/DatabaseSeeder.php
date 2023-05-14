<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /** @var \App\Models\User $adminUser */

        $adminUser = User::factory()->create([
            'name' => 'Khiel',
            'email' => 'adminn@example.com',
            'password' => bcrypt('admin123')]);
            
            #$adminRole = Role::create(['name' => 'admin']);
            $adminUser->assignRole('admin');
        
    }
   
}
