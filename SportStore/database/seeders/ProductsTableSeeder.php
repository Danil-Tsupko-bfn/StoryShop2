<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Protein',
                'brief_description' => 'made up of building blocks called amino acids',
                'description' => '<p>Proteins are made up of building blocks called amino acids. There are about 20 different amino acids that link together in different combinations. Your body uses them to make new proteins, such as muscle and bone, and other compounds such as enzymes and hormones. It can also use them as an energy source.</p>',
                'price' => '16.00',
                'old_price' => '25.00',
                'SKU' => 'SKU-98745',
                'stock_status' => 'instock',
                'quantity' => 20,
                'image' => 'images/products/main_image/p2Y2RF1bhQjq68vGJOeTidYSIBryEJaX0QDb9gVT.png',
                'images' => 'images/products/alt_images/rFO6ZfoZibHlreVLFvqkctvM9Z98zGYbFulsJJNx.png',
                'created_at' => '2025-06-08 22:27:36',
                'updated_at' => '2025-06-08 22:27:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'BCAA',
            'brief_description' => 'A branched-chain amino acid (BCAA) is an amino acid having an aliphatic ',
                'description' => '<p>The three proteinogenic BCAAs are among the nine <a href="https://en.wikipedia.org/wiki/Essential_amino_acid">essential amino acids</a> for humans, accounting for 35% of the essential amino acids in muscle proteins and 40% of the preformed amino acids required by mammals</p>',
                'price' => '20.00',
                'old_price' => '35.00',
                'SKU' => 'SKU-98746',
                'stock_status' => 'instock',
                'quantity' => 10,
                'image' => 'images/products/main_image/WygzqVXO0wrAAbWRYnQTcozHmA8Kq79oJiET83K9.png',
                'images' => 'images/products/alt_images/h9obZJTirDmEBpqOE4GrOVw8QscQVrczAZ3gygls.png',
                'created_at' => '2025-06-08 22:28:36',
                'updated_at' => '2025-06-08 22:28:36',
            ),
        ));
        
        
    }
}