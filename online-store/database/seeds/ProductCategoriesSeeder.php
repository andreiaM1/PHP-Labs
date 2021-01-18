<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Electronics',
            'description' => 'Various electronic devices coming from best reviewed brands',
            'image' => 'https://www.aromvo.com/wp-content/uploads/2020/06/electronic-gadgets.jpeg'
           
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Furniture',
            'description' => 'Quality products covering a broad range of customer needs',
            'image' => 'https://www.thespruce.com/thmb/3Ri08fLfWx8Lp6CZk962KoIVAiU=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/charlotablunarova-com-M0FIbfxhK64-unsplash-255b2e6e7b524fe1aa895d817a6cb460.jpg'
           
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Books',
            'description' => 'Various genres, able to fit almost every customer expectation',
            'image' => 'https://i0.wp.com/saddind.co.uk/wp-content/uploads/book-writing.jpg?fit=800%2C534&ssl=1',
           
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Office Supplies',
            'description' => 'Office Supplies',
            'image' => 'https://www.marcoofficesupply.com/wp-content/uploads/2019/11/office-supplies-7.jpg',
           
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Home Accessories',
            'description' => 'Home Decor',
            'image' => 'https://productimages.hepsiburada.net/s/36/375/10509634994226.jpg',
           
        ]);
        
    }
}
