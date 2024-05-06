<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'shop_name' => "Toko Admin",
            'address' => "Jalan Pegangsaan Timur No 56, Jakarta",
            'phone_number' => "081234567890",
            'receipt_note' => "Merdeka, Bung!",
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();

        Unit::insert([
            [
                'name' => "1 Kilogram",
                'short_name' => "kg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "1 Bungkus",
                'short_name' => "bks",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "1 Batang",
                'short_name' => "btg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Type::insert([
            [
                'name' => "Sembako",
                'description' => fake()->sentence(),
                'icon' => "sembako.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rokok",
                'description' => fake()->sentence(),
                'icon' => "rokok.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Jajanan",
                'description' => fake()->sentence(),
                'icon' => "jajanan.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Product::factory(100)->create();
    }
}
