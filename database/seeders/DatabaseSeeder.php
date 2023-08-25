<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            [
                'name' => 'Userario1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('senha123'),
            ],
            [
                'name' => 'Userario2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('senha123'),
            ],
        ]);

        DB::table('categories')->insert([
            [
                'name' => 'categoria1',
            ],
            [
                'name' => 'categoria2',
            ],
            [
                'name' => 'categoria3',
            ],
            [
                'name' => 'categoria4',
            ],
            [
                'name' => 'categoria5',
            ],
        ]);
        
        DB::table('products')->insert([
            [
                'name' => 'Produto 1',
                'price' => 12.0,
                'user_id' => 1,
                'categories_id' => 1,
            ],
            [
                'name' => 'Produto 2',
                'price' => 15.5,
                'user_id' => 1,
                'categories_id' => 1,
            ],
            [
                'name' => 'Produto 3',
                'price' => 10.0,
                'user_id' => 1,
                'categories_id' => 3,
            ],
            [
                'name' => 'Produto 4',
                'price' => 20.5,
                'user_id' => 1,
                'categories_id' => 2,
            ],
            [
                'name' => 'Produto 5',
                'price' => 20.5,
                'user_id' => 2,
                'categories_id' => 2,
            ],
        ]);
    }
}
