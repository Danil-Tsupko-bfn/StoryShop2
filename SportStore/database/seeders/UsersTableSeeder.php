<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'gert.iopru@gmail.com',
                'email_verified_at' => '2025-06-08 22:24:52',
                'password' => '$2y$10$csLeEdGL9KwgBYNohEwKD.GHkxg/aFTmtKO9aPQbEKmL816UzPm6.',
                'is_admin' => 1,
                'remember_token' => 'fYtgtROLmu',
                'created_at' => '2025-06-08 22:24:52',
                'updated_at' => '2025-06-08 22:24:52',
                'stripe_id' => NULL,
                'pm_type' => NULL,
                'pm_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'test_name',
                'email' => 'tests1@gamil.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DViRUG7Pgmmqf0ckupOkpuV7HhlVXnEqIZ44VOduWXOkwIkpA/dg.',
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2025-06-08 22:29:00',
                'updated_at' => '2025-06-08 22:29:00',
                'stripe_id' => NULL,
                'pm_type' => NULL,
                'pm_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
        ));
        
        
    }
}