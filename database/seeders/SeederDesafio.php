<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class SeederDesafio extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'User1',
            'email' => 'user1@user.com',
            'password' => Hash::make('senha123'),
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
                'user_id' => 2,
                'categories_id' => 3,
            ],
            [
                'name' => 'Produto 4',
                'price' => 20.5,
                'user_id' => 2,
                'categories_id' => 2,
            ],
        ]);
    }
}
