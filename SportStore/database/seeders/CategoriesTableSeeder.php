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
        ));
        
        
    }
}