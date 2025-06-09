<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Protein',
                'slug' => 'PROTEIN',
                'created_at' => '2025-06-08 22:26:11',
                'updated_at' => '2025-06-08 22:26:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'BCAA',
                'slug' => 'BCAA',
                'created_at' => '2025-06-08 22:26:18',
                'updated_at' => '2025-06-08 22:26:18',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Calogen',
                'slug' => 'CALOGEN',
                'created_at' => '2025-06-09 17:31:49',
                'updated_at' => '2025-06-09 17:31:49',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Creatine',
                'slug' => 'CREATINE',
                'created_at' => '2025-06-09 17:41:45',
                'updated_at' => '2025-06-09 17:41:45',
            ),
        ));
        
        
    }
}