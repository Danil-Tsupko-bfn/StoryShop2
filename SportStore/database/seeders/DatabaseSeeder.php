<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


//        $categories = Category::all();
//        Product::factory(30)->create()->each(function ($product) use ($categories) {
//            $product->categories()->attach(
//                $categories->random(rand(1, 3))->pluck('id')->toArray()
//            );
//        });
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'gert.iopru@gmail.com',
            'password' => Hash::make('0987654'),
            'is_admin' => true
        ]);
    }
}
