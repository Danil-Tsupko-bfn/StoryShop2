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
                'password' => '$2y$10$.w91QCGifCnLYAcI4t.p.uyBGyKI.3TMOQ/wiO5Q7wm/NXs7HGzsO',
                'is_admin' => 1,
                'remember_token' => 'Twaw7pGzd1vcYjwDpQ3ZfwH85YX3Ufc6JyioqYydfw8NdDWdvbVHgkO8srJE',
                'created_at' => '2025-06-08 22:24:52',
                'updated_at' => '2025-06-08 23:45:28',
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
            2 => 
            array (
                'id' => 3,
                'name' => 'Ashley Koelpin PhD',
                'email' => 'testuser@example.com',
                'email_verified_at' => '2025-06-08 23:41:32',
                'password' => '$2y$10$gOUMgg5.Sjp5hxClVpnTq.bAiCkgDCY3F/mJUubim.0lmTIHyi9rG',
                'is_admin' => 0,
                'remember_token' => 'PsEFXTWKzR',
                'created_at' => '2025-06-08 23:41:32',
                'updated_at' => '2025-06-08 23:43:11',
                'stripe_id' => NULL,
                'pm_type' => NULL,
                'pm_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
        ));
        
        
    }
}