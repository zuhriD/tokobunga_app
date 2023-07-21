<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt('user'),
            'role_id' => 2,
        ]);

        Category::create([
            'name' => 'Flowers Box',
            'image' => 'box.png',
            'banner' => '1.png',
        ]);

        Category::create([
            'name' => 'Fresh Flowers',
            'image' => 'fresh.png',
            'banner' => '3.png',
        ]);

        Category::create([
            'name' => 'Artificial Flowers',
            'image' => 'arti.png',
            'banner' => '4.png',
        ]);

        Category::create([
            'name' => 'Hand Bouquet',
            'image' => 'hand.png',
            'banner' => '2.png',
        ]);

        Category::create([
            'name' => 'Standing Flowers',
            'image' => 'standing.png',
            'banner' => '6.png',
        ]);

        Category::create([
            'name' => 'Gift & Hampers',
            'image' => 'gift.png',
            'banner' => '5.png',
        ]);

        // Product::create([
        //     'name' => '',
        //     'price' => ,
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'image' => 'assets/product/.png',
        //     'category_id' => ,
        // ]);
    }
}
