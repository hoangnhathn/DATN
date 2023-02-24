<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'nhat',
                'email' => 'hoangnhathn1702@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' =>null,
            ],
            [
                'id' => 2,
                'name' => 'nga',
                'email' => 'ptnga@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' =>null,
            ],
            [
                'id' => 3,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' =>null,
            ]
            ]);

            DB::table('blogs')->insert([
                [
                    'user_id' => 3,
                    'title' => 'The Personality Trait That Makes People Happier',
                    'image' => 'blog-1.jpg',
                    'category' => 'TRAVEL',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => 'This was one of our first days in Hawaii last week.',
                    'image' => 'blog-2.jpg',
                    'category' => 'CodeLeanON',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                    'image' => 'blog-3.jpg',
                    'category' => 'TRAVEL',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => 'Happppppy New Year! I know I am a little late on this post',
                    'image' => 'blog-4.jpg',
                    'category' => 'CodeLeanON',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => 'Absolue collection. The Lancome team has been one…',
                    'image' => 'blog-5.jpg',
                    'category' => 'MODEL',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => 'Writing has always been kind of therapeutic for me',
                    'image' => 'blog-6.jpg',
                    'category' => 'CodeLeanON',
                    'content' => '',
                ],
            ]);


            DB::table('products_category')->insert([
                [
                    'category_name' => 'Men',
                ],
                [
                    'category_name' => 'Women',
                ],
                [
                    'category_name' => 'Kids',
                ],
            ]);

            DB::table('products')->insert([
                [
                    'id' => 1,
                    'category_id' => 2,
                    'product_name' => 'Pure Pineapple',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                    'content' => '',
                    'price' => 629.99,
                    'qty' => 20,
                    'discount' => 495,
                    'weight' => 1.3,
                    'sku' => '00012',
                    'featured' => true,
                    'tag' => 'Clothing',
                ],
                [
                    'id' => 2,
                    'category_id' => 2,
                    'product_name' => 'Guangzhou sweater',
                    'description' => null,
                    'content' => null,
                    'price' => 35,
                    'qty' => 20,
                    'discount' => 13,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'Clothing',
                ],
                [
                    'id' => 3,
                    'category_id' => 2,
                    'product_name' => 'Guangzhou sweater',
                    'description' => null,
                    'content' => null,
                    'price' => 35,
                    'qty' => 20,
                    'discount' => 34,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'Clothing',
                ],
                [
                    'id' => 4,
                    'category_id' => 1,
                    'product_name' => 'Microfiber Wool Scarf',
                    'description' => null,
                    'content' => null,
                    'price' => 64,
                    'qty' => 20,
                    'discount' => 35,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'Accessories',
                ],
                [
                    'id' => 5,
                    'category_id' => 3,
                    'product_name' => "Men's Painted Hat",
                    'description' => null,
                    'content' => null,
                    'price' => 44,
                    'qty' => 20,
                    'discount' => 35,
                    'weight' => null,
                    'sku' => null,
                    'featured' => false,
                    'tag' => 'Accessories',
                ],
                [
                    'id' => 6,
                    'category_id' => 2,
                    'product_name' => 'Converse Shoes',
                    'description' => null,
                    'content' => null,
                    'price' => 35,
                    'qty' => 20,
                    'discount' => 34,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'Clothing',
                ],
                [
                    'id' => 7,
                    'category_id' => 1,
                    'product_name' => 'Pure Pineapple',
                    'description' => null,
                    'content' => null,
                    'price' => 64,
                    'qty' => 20,
                    'discount' => 35,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'HandBag',
                ],
                [
                    'id' => 8,
                    'category_id' => 1,
                    'product_name' => '2 Layer Windbreaker',
                    'description' => null,
                    'content' => null,
                    'price' => 44,
                    'qty' => 20,
                    'discount' => 35,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'Clothing',
                ],
                [
                    'id' => 9,
                    'category_id' => 1,
                    'product_name' => 'Converse Shoes',
                    'description' => null,
                    'content' => null,
                    'price' => 35,
                    'qty' => 20,
                    'discount' => 34,
                    'weight' => null,
                    'sku' => null,
                    'featured' => true,
                    'tag' => 'Shoes',
                ],
            ]);

            DB::table('products_images')->insert([
                [
                    'product_id' => 1,
                    'path' => 'product-1.jpg',
                ],
                [
                    'product_id' => 1,
                    'path' => 'product-1-1.jpg',
                ],
                [
                    'product_id' => 1,
                    'path' => 'product-1-2.jpg',
                ],
                [
                    'product_id' => 2,
                    'path' => 'product-2.jpg',
                ],
                [
                    'product_id' => 3,
                    'path' => 'product-3.jpg',
                ],
                [
                    'product_id' => 4,
                    'path' => 'product-4.jpg',
                ],
                [
                    'product_id' => 5,
                    'path' => 'product-5.jpg',
                ],
                [
                    'product_id' => 6,
                    'path' => 'product-6.jpg',
                ],
                [
                    'product_id' => 7,
                    'path' => 'product-7.jpg',
                ],
                [
                    'product_id' => 8,
                    'path' => 'product-8.jpg',
                ],
                [
                    'product_id' => 9,
                    'path' => 'product-9.jpg',
                ],
            ]);

            DB::table('products_details')->insert([
                [
                    'product_id' => 1,
                    'color' => 'blue',
                    'size' => 'S',
                    'qty' => 5,
                ],
                [
                    'product_id' => 1,
                    'color' => 'blue',
                    'size' => 'M',
                    'qty' => 5,
                ],
                [
                    'product_id' => 1,
                    'color' => 'blue',
                    'size' => 'L',
                    'qty' => 5,
                ],
                [
                    'product_id' => 1,
                    'color' => 'blue',
                    'size' => 'XS',
                    'qty' => 5,
                ],
                [
                    'product_id' => 1,
                    'color' => 'yellow',
                    'size' => 'S',
                    'qty' => 0,
                ],
                [
                    'product_id' => 1,
                    'color' => 'violet',
                    'size' => 'S',
                    'qty' => 0,
                ],
            ]);

            DB::table('products_comments')->insert([
                [
                    'product_id' => 1,
                    'user_id' => 4,
                    'email' => 'BrandonKelley@gmail.com',
                    'name' => 'Brandon Kelley',
                    'messages' => 'Nice !',
                    'rating' => 4,
                ],
                [
                    'product_id' => 1,
                    'user_id' => 5,
                    'email' => 'RoyBanks@gmail.com',
                    'name' => 'Roy Banks',
                    'messages' => 'Nice !',
                    'rating' => 4,
                ],
            ]);
    }
}
