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
            2 => 
            array (
                'id' => 3,
                'name' => 'BCAA v2',
                'brief_description' => 'essential amino acids',
                'description' => '<p>BCAAs are a group of three essential amino acids: leucine, isoleucine, and valine. These nutrients are vital for muscle protein synthesis, energy production during workouts, and reducing muscle soreness after exercise.</p><p>Our premium BCAA supplement supports:</p><ul><li><strong>Faster muscle recovery</strong></li><li><strong>Improved endurance and performance</strong></li><li><strong>Reduced muscle fatigue</strong></li><li><strong>Preservation of lean muscle mass</strong></li></ul><p>Perfect for athletes, bodybuilders, and fitness enthusiasts, BCAA is best consumed before, during, or after workouts for optimal results.</p>',
                'price' => '25.00',
                'old_price' => '30.00',
                'SKU' => 'SKU-0000',
                'stock_status' => 'instock',
                'quantity' => 10,
                'image' => 'images/products/main_image/EZlfkdzYuIV5TRdIpZuwAC7mG2vNySqzbSE9lqB6.png',
                'images' => 'images/products/alt_images/h1zpN2FDUVkkml70EmHZnej89EDD2VvMAiAb13Jv.png',
                'created_at' => '2025-06-09 17:13:21',
                'updated_at' => '2025-06-09 17:13:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BCAA v3',
                'brief_description' => 'essential amino acids',
                'description' => '<p>BCAAs are a group of three essential amino acids: leucine, isoleucine, and valine. These nutrients are vital for muscle protein synthesis, energy production during workouts, and reducing muscle soreness after exercise.</p>',
                'price' => '60.00',
                'old_price' => '65.00',
                'SKU' => 'SKU-0001',
                'stock_status' => 'instock',
                'quantity' => 10,
                'image' => 'images/products/main_image/3qYI2Y1Z19rXJ5FzT4H9gIH7uYDXeBAJ8WM629my.png',
                'images' => 'images/products/alt_images/EFBrsfdVPKPAmb9ne5aPNowUrmte72GFetphyz9Q.png',
                'created_at' => '2025-06-09 17:19:45',
                'updated_at' => '2025-06-09 17:19:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Protein v2',
                'brief_description' => 'Proteins are made up of building blocks called amino acid',
                'description' => '<p>Proteins are made up of building blocks called amino acids. There are about 20 different amino acids that link together in different combinations. Your body uses them to make new proteins, such as muscle and bone, and other compounds such as enzymes and hormones. It can also use them as an energy source.</p>',
                'price' => '100.00',
                'old_price' => '120.00',
                'SKU' => 'SKU-1001',
                'stock_status' => 'instock',
                'quantity' => 25,
                'image' => 'images/products/main_image/19Q3XJLfK8ISlzDYzdl1BQ8MuUci6H6cwGKgmyiC.png',
                'images' => 'images/products/alt_images/qOZ19aF0PqpMzhWsYOj3q2yLYcfzSaZpBeCKGnFx.png',
                'created_at' => '2025-06-09 17:26:41',
                'updated_at' => '2025-06-09 17:26:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Protein v3',
                'brief_description' => 'Proteins are made up of building blocks called amino acids.',
                'description' => '<p>Proteins are made up of building blocks called amino acids. There are about 20 different amino acids that link together in different combinations. Your body uses them to make new proteins, such as muscle and bone, and other compounds such as enzymes and hormones. It can also use them as an energy source.</p>',
                'price' => '125.00',
                'old_price' => '150.00',
                'SKU' => 'SKU-1100',
                'stock_status' => 'instock',
                'quantity' => 60,
                'image' => 'images/products/main_image/YK2TWGmhqaYoG1iMTELuu2l2lmGScArSVMiPUyBW.png',
                'images' => 'images/products/alt_images/0lEbUxKS4tIHNiAU9DXYGkxf8729FBhcqzJQpTVZ.png',
                'created_at' => '2025-06-09 17:29:16',
                'updated_at' => '2025-06-09 17:29:16',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Calogen',
                'brief_description' => 'Calogen is a specialized liquid nutritional supplement',
            'description' => '<p>Calogen is a specialized liquid nutritional supplement, specifically a Food for Special Medical Purposes (FSMP), used under medical supervision. It\'s a high-energy, fat-based product primarily designed to support individuals with higher energy needs or who are unable to meet their nutritional requirements through food alone. It\'s a long-chain triglyceride (LCT) fat emulsion, meaning it provides a concentrated source of calories from fat</p>',
                'price' => '85.00',
                'old_price' => '90.00',
                'SKU' => 'SKU-3501',
                'stock_status' => 'instock',
                'quantity' => 15,
                'image' => 'images/products/main_image/4iEsFCAaj1G8cMISEOBFDqMEFseVWzBDZ6nZh51D.png',
                'images' => 'images/products/alt_images/yf7IshQBuMCsc04znhnQpQRtKg4diyTzyveFrReI.png',
                'created_at' => '2025-06-09 17:36:38',
                'updated_at' => '2025-06-09 17:36:38',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Calogen v2',
                'brief_description' => 'Calogen is a specialized liquid nutritional supplement, specifically a Food for Special Medical',
            'description' => '<p>Calogen is a specialized liquid nutritional supplement, specifically a Food for Special Medical Purposes (FSMP), used under medical supervision. It\'s a high-energy, fat-based product primarily designed to support individuals with higher energy&nbsp;</p>',
                'price' => '65.00',
                'old_price' => '55.00',
                'SKU' => 'SKU-0998',
                'stock_status' => 'instock',
                'quantity' => 77,
                'image' => 'images/products/main_image/LPWVRQvsn10By09UPYwb3fCdjNyoynlwboERnsYk.png',
                'images' => 'images/products/alt_images/b7vNHXM4kgnL3KmbHL6tsV5kxwgeG1ds7t4F9oFL.png',
                'created_at' => '2025-06-09 17:39:27',
                'updated_at' => '2025-06-09 17:39:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Creatine',
                'brief_description' => 'Overview. Creatine is a compound that comes from three amino acids',
                'description' => '<p>Overview. Creatine is a compound that comes from three amino acids. Creatine is found mostly in your body\'s muscles as well as in the brain. Most people get creatine through seafood and red meat — though at levels far below those found in synthetically made creatine supplements</p>',
                'price' => '23.00',
                'old_price' => '32.00',
                'SKU' => 'SKU-7777',
                'stock_status' => 'instock',
                'quantity' => 14,
                'image' => 'images/products/main_image/86KN3iTtDKvCwo2JJUsrB4en4twHqp4Fn5DkTyCR.png',
                'images' => 'images/products/alt_images/x1PDUCZQfW7MR1ZHO0FI4xKnlXUaXbIpaT1vPFUx.png',
                'created_at' => '2025-06-09 17:45:14',
                'updated_at' => '2025-06-09 17:45:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Creatine v2',
                'brief_description' => 'Overview. Creatine is a compound that comes from three amino acids',
                'description' => '<p>Overview. Creatine is a compound that comes from three amino acids. Creatine is found mostly in your body\'s muscles as well as in the brain. Most people get creatine through seafood and red meat — though at levels far below those found in synthetically made creatine supplements.</p>',
                'price' => '60.00',
                'old_price' => '55.00',
                'SKU' => 'SKU-9565',
                'stock_status' => 'instock',
                'quantity' => 15,
                'image' => 'images/products/main_image/QAS0KMHm0aM7jFsxQVi35FwuXGEIXhbskhtgaw2z.png',
                'images' => 'images/products/alt_images/TuW3JZR9Poyb1YDsxUW2B1P9UA737AJl6er5JCN6.png',
                'created_at' => '2025-06-09 17:49:25',
                'updated_at' => '2025-06-09 17:49:25',
            ),
        ));
        
        
    }
}