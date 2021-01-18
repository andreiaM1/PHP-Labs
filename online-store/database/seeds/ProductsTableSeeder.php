<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //electronics
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S9',
            'product_category_id' => 1,
            'description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by
           Samsung. This is an upgrade. Clean ESN and activation ready.',
            'photo' => 'https://images-na.ssl-images-amazon.com/images/I/81wLkQ64HXL._AC_SX522_.jpg',
            'price' => 698.88
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone X',
            'product_category_id' => 1,
            'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE!
           FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
            'photo' => 'https://www.bsetechnology.com/wp-content/uploads/2018/07/iPhoneX-silver-1.jpg',
            'price' => 983.00
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 5A',
            'product_category_id' => 1,
            'description' => 'New condition
           • No returns, but backed by eBay Money back guarantee',
            'photo' =>
            'https://cdn.dxomark.com/wp-content/uploads/medias/post-59199/google_pixel_5_frontback.jpeg',
            'price' => 675.00
        ]);
        DB::table('products')->insert([
            'name' => 'LG V10 H900',
            'product_category_id' => 1,
            'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC
           Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'photo' => 'https://ae01.alicdn.com/kf/HTB1JUIaNVXXXXXsXpXXq6xXFXXXs/original-LG-V10-F600-H900-5-7-4K-4GB-RAM-64GB-ROM-Smart-Phone-Hexa-Core.jpg',
            'price' => 159.99
        ]);
        DB::table('products')->insert([
            'name' => 'Huawei Elate',
            'product_category_id' => 1,
            'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'photo' => 'https://i1.wp.com/routerunlock.com/wp-content/uploads/2019/01/Huawei-Elate-4G.jpg?fit=503%2C504&ssl=1',
            'price' => 68.00
        ]);

        //Furniture

        DB::table('products')->insert([
            'name' => 'Zia Accent Chair - Blue',
            'product_category_id' => 2,
            'description' => 'he Zia accent chair boasts mid-century modern style for an on-trend retro look in your living area. 
             Featuring a barrel design, this chair combines sloped arms, button-tufting and a well-padded loose seat cushion. ',
            'photo' => 'https://cdn.shopify.com/s/files/1/2660/5106/products/nezid69eg3xecfcezu46_1400x.jpg',
            'price' => 329.00
        ]);
        DB::table('products')->insert([
            'name' => 'Namib Wooden Coffee Table',
            'product_category_id' => 2,
            'description' => 'A round coffee table always makes a living area appear inviting. The Namib coffee table is ideal for a cup of anything with a few friends.',
            'photo' => 'https://incanda.co.za/wp-content/uploads/2018/10/LIN_7683-scaled.jpg',
            'price' => 281.89
        ]);
        DB::table('products')->insert([
            'name' => 'Derry Velvet Sofa',
            'product_category_id' => 2,
            'description' => 'Removable back cushions Ergonomic design High density foam 2 decorative pillows',
            'photo' =>
            'https://secure.img1-fg.wfcdn.com/im/57815618/resize-h600-w600%5Ecompr-r85/3513/35130614/Sofas.jpg',
            'price' => 800.00
        ]);

        //Books

        DB::table('products')->insert([
            'name' => 'The Boy, The Mole, The Fox and The Horse',
            'product_category_id' => 3,
            'description' => 'By author Charlie Mackesy.
             Discover the very special book that has captured the hearts of millions of readers all over the world.',
            'photo' => 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/5291/9781529105100.jpg',
            'price' => 80.99
        ]);
        DB::table('products')->insert([
            'name' => 'Of Mice and Men',
            'product_category_id' => 3,
            'description' => 'By author by John Steinbeck.
            Of Mice and Men represents an experiment in form - as Steinbeck put it, "a kind of playable novel, written in novel form but so scened and set that it can be played as it stands."
            A rarity in American letters, it achieved remarkable success as a novel, a Broadway play, and three acclaimed films. ',
            'photo' => 'https://pentacletheatre.org/wp-content/uploads/2016/09/Of-Mice-and-Men-8-04-15-e1473453183202.jpg',
            'price' => 8.00
        ]);

        //Office Supplies

        DB::table('products')->insert([
            'name' => 'Personal Library Kit',
            'product_category_id' => 4,
            'description' => 'For a bibliophile, theres no greater pleasure than sharing beloved books, but no crueler pain than losing them for gooduntil the Personal Library Kit!',
            'photo' => 'https://cdn.dc5.ro/img-prod/217880-1-240.jpeg',
            'price' => 39.00
        ]);
        DB::table('products')->insert([
            'name' => 'Colored Sticky Note Set',
            'product_category_id' => 4,
            'description' => '110 Pieces Page Markers Morandi Color Page Flags Index Tabs Sticky Notes Tabs With 10 Cm Measurement For Page Marker',
            'photo' => 'https://ae01.alicdn.com/kf/Hc5037ca299d54e8abf7cb75f618a3a06U/Colored-Sticky-Note-Set-Self-Stick-Page-Markers-Index-Tabs-Flags-School-Office-Supplies.jpg',
            'price' => 5.99
        ]);
        DB::table('products')->insert([
            'name' => 'Office stationery',
            'product_category_id' => 4,
            'description' => 'Removable back cushions Ergonomic design High density foam 2 decorative pillows',
            'photo' =>
            'https://www.freegreatpicture.com/files/189/4151-office-supplies.jpg',
            'price' => 4.90
        ]);

        //Home accessories

        DB::table('products')->insert([
            'name' => 'Copper Gold Coral Ornaments',
            'product_category_id' => 5,
            'description' => 'Modern Home Accessories Copper Gold Coral Ornaments Model Room Living Room Marble Crafts Decorations',
            'photo' => 'https://ae01.alicdn.com/kf/HTB1euFkXyzxK1RkSnaVq6xn9VXaV/Modern-Home-Accessories-Copper-Gold-Coral-Ornaments-Model-Room-Living-Room-Marble-Crafts-Decorations.jpg',
            'price' => 139.00
        ]);
        DB::table('products')->insert([
            'name' => 'Hand-painted Ceramic Ornaments',
            'product_category_id' => 5,
            'description' => 'Hand-painted Ceramic Ornaments Home Decorations Caballos Decoracion Arts And Crafts Vintage Home Decoration Accessories',
            'photo' => 'https://ae01.alicdn.com/kf/HTB14fRTL9zqK1RjSZFLq6An2XXak/Hand-painted-Ceramic-Ornaments-Home-Decorations-Caballos-Decoracion-Arts-And-Crafts-Vintage-Home-Decoration-Accessories.jpg_q50.jpg',
            'price' => 228.99
        ]);
        DB::table('products')->insert([
            'name' => 'Flower Glass Vase ',
            'product_category_id' => 5,
            'description' => 'European modern metal flower glass vase floral guest restaurant desktop soft decoration villa model decoration',
            'photo' =>
            'https://ae01.alicdn.com/kf/HTB1fcQLc56guuRkSnb4q6zu4XXae/European-modern-metal-flower-glass-vase-floral-guest-restaurant-desktop-soft-decoration-villa-model-decoration.jpg_q50.jpg',
            'price' => 214.89
        ]);
    }
}
