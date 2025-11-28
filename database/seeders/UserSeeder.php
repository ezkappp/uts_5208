<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        User::create([
            'name' => 'ezkap',
            'email' => 'ezkap@uts.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'vina', 
            'email' => 'vina@uts.com',
            'password' => Hash::make('12345678'),
            'role' => 'staff',
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
        ]);

        // Sample Products DENGAN GAMBAR LOKAL
        Product::create([
            'name' => 'Laptop Gaming ASUS ROG',
            'price' => 18500000,
            'stock' => 8,
            'description' => 'Laptop gaming dengan processor Intel i7 dan GPU RTX 4060, layar 15.6 inch 144Hz',
            'image' => 'laptop.jpg'
        ]);

        Product::create([
            'name' => 'Smartphone Samsung S24 Ultra', 
            'price' => 12500000,
            'stock' => 15,
            'description' => 'Flagship smartphone dengan kamera 200MP, S Pen, dan AI features terbaru',
            'image' => 'hp.jpg'
        ]);

        Product::create([
            'name' => 'Headphone Sony WH-1000XM5',
            'price' => 4500000,
            'stock' => 20,
            'description' => 'Wireless headphone premium dengan noise cancellation terbaik di kelasnya',
            'image' => 'sony-headphone.jpg'
        ]);

        Product::create([
            'name' => 'Tablet iPad Pro 12.9',
            'price' => 17500000,
            'stock' => 12,
            'description' => 'Tablet profesional dengan chip M2, layar Liquid Retina XDR, dan Apple Pencil support',
            'image' => 'ipad.jpg'
        ]);
    }
}