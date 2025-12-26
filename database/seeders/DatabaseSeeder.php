<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // 1. Isi Roles
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Admin', 'description' => 'Administrator Sistem'],
            ['id' => 2, 'name' => 'Staff', 'description' => 'Operator Lapangan'],
            ['id' => 3, 'name' => 'Member', 'description' => 'Pelanggan Biasa'],
        ]);

        // 2. Buat Akun Admin Default
        \App\Models\User::create([
            'role_id' => 1, // Admin
            'name' => 'Super Admin',
            'email' => 'admin@courtvision.com',
            'password' => Hash::make('password123'),
            'phone_number' => '081234567890',
        ]);

        // 3. Isi Kategori
        DB::table('field_categories')->insert([
            ['name' => 'Futsal'],
            ['name' => 'Badminton'],
        ]);

        // 4. Isi Contoh Lapangan
        DB::table('fields')->insert([
            [
                'category_id' => 1,
                'name' => 'Futsal A (Vinyl)',
                'hourly_rate' => 120000,
                'status' => 'available',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2093&auto=format&fit=crop'
            ],
            [
                'category_id' => 2,
                'name' => 'Court 1 (Badminton)',
                'hourly_rate' => 40000,
                'status' => 'available',
                'image' => 'https://images.unsplash.com/photo-1626224583764-84786c71971e?q=80&w=2070&auto=format&fit=crop'
            ],
        ]);
    }
}
