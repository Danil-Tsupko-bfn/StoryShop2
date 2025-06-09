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

        $this->call(CategoriesTableSeeder::class);

        $this->call(FailedJobsTableSeeder::class);

        $this->call(ProductsTableSeeder::class);

        $this->call(CategoryProductTableSeeder::class);

        $this->call(MigrationsTableSeeder::class);

        $this->call(OrderItemsTableSeeder::class);

        $this->call(OrdersTableSeeder::class);

        $this->call(PasswordResetTokensTableSeeder::class);

        $this->call(PersonalAccessTokensTableSeeder::class);


        $this->call(UsersTableSeeder::class);

        User::updateOrCreate(
            ['email' => 'gert.iopru@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('0987654'),
                'is_admin' => true
            ]);
        $this->call(BillingDetailsTableSeeder::class);
        $this->call(SubscriptionItemsTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
    }
}
