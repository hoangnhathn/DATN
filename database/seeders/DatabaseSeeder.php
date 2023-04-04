<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\TableDelete;

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

                'country' => 'Việt Nam',
                'street_address' => 'Xuân Phương, Nam Từ Liêm, Hà Nội',
                'postcode_zip' => '10000',
                'town_city' => 'Hà Nội',
                'phone' => '0123456789',
            ],
            [
                'id' => 2,
                'name' => 'nga',
                'email' => 'ptnga@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' =>null,

                'country' => 'Việt Nam',
                'street_address' => 'Xuân Phương, Nam Từ Liêm, Hà Nội',
                'postcode_zip' => '10000',
                'town_city' => 'Hà Nội',
                'phone' => '0123456789',
            ],
            [
                'id' => 3,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' =>null,

                'country' => 'Việt Nam',
                'street_address' => 'Xuân Phương, Nam Từ Liêm, Hà Nội',
                'postcode_zip' => '10000',
                'town_city' => 'Hà Nội',
                'phone' => '0123456789',
            ],
            [
                'id' => 4,
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'description' =>null,

                'country' => 'Việt Nam',
                'street_address' => 'Xuân Phương, Nam Từ Liêm, Hà Nội',
                'postcode_zip' => '10000',
                'town_city' => 'Hà Nội',
                'phone' => '0123456789',
            ]
            ]);

            DB::table('slider')->insert([
               [
                   'id' => 1,
                   'path' => 'slider1.png',
               ],
                [
                    'id' => 2,
                    'path' => 'slider2.png',
                ],
                [
                    'id' => 3,
                    'path' => 'slider3.png',
                ],
                [
                    'id' => 4,
                    'path' => 'slider4.png',
                ]
            ]);

            DB::table('blogs')->insert([
                [
                    'user_id' => 3,
                    'title' => 'Hòa Bình phát động Tháng cao điểm ủng hộ xây dựng Quỹ “Vì người nghèo” năm 2022',
                    'image' => 'blog1.png',
                    'category' => 'Company',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => 'BUỔI GẶP MẶT ĐẶC BIỆT TẠI NHÀ MÁY XE ĐẠP THỐNG NHẤT',
                    'image' => 'blog2.png',
                    'category' => 'CodeLeanON',
                    'content' => '',
                ],
                [
                    'user_id' => 3,
                    'title' => '2000KM ĐẠP XE XUYÊN VIỆT Ở TUỔI 61 VỚI “0” LẦN SỬA XE',
                    'image' => 'blog3.png',
                    'category' => 'TRAVEL',
                    'content' => '',
                ],
            ]);


            DB::table('brands')->insert([
                [
                    'name' => 'Thống Nhất',
                ],
                [
                    'name' => 'Honda',
                ],
                [
                    'name' => 'Yamaha',
                ],

            ]);


            DB::table('products_category')->insert([
                [
                    'category_name' => 'Xe đạp trẻ em',
                ],
                [
                    'category_name' => 'Xe đạp người lớn',
                ],
                [
                    'category_name' => 'Xe đạp thể thao',
                ],
                [
                    'category_name' => 'Xe máy',
                ],
                [
                    'category_name' => 'Xe ga',
                ],
                [
                    'category_name' => 'Xe côn tay',
                ],
            ]);

            DB::table('products')->insert([
                [
                    'id' => 1,
                    'brand_id' => 1,
                    'category_id' => 1,
                    'product_name' => 'Princess 12″',
                    'description' => '',
                    'content' => '',
                    'price' => 1890000,
                    'qty' => 20,
                    'discount' => 1790000,
                    'weight' => 10,
                    'sku' => '00012',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 2,
                    'brand_id' => 1,
                    'category_id' => 2,
                    'product_name' => 'M 26″-01',
                    'description' => null,
                    'content' => null,
                    'price' => 3690000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 15,
                    'sku' => '00013',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 3,
                    'brand_id' => 1,
                    'category_id' => 2,
                    'product_name' => 'SLX 26-01',
                    'description' => null,
                    'content' => null,
                    'price' => 6650000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 15,
                    'sku' => '00014',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 4,
                    'brand_id' => 1,
                    'category_id' => 2,
                    'product_name' => 'New 24″',
                    'description' => null,
                    'content' => null,
                    'price' => 2450000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 15,
                    'sku' => '00014',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 5,
                    'brand_id' => 1,
                    'category_id' => 3,
                    'product_name' => "MTB 20″ – 03",
                    'description' => null,
                    'content' => null,
                    'price' => 1990000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 11.25,
                    'sku' => '00015',
                    'featured' => false,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 6,
                    'brand_id' => 1,
                    'category_id' => 1,
                    'product_name' => 'Princess 16″',
                    'description' => null,
                    'content' => null,
                    'price' => 2090000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 10,
                    'sku' => '00016',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 7,
                    'brand_id' => 1,
                    'category_id' => 1,
                    'product_name' => 'Kitten 20″',
                    'description' => null,
                    'content' => null,
                    'price' => 2390000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 10,
                    'sku' => '00017',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 8,
                    'brand_id' => 1,
                    'category_id' => 1,
                    'product_name' => 'Neo 20″ – 04',
                    'description' => null,
                    'content' => null,
                    'price' => 2190000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 10,
                    'sku' => '00018',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 9,
                    'brand_id' => 1,
                    'category_id' => 1,
                    'product_name' => 'TE 16″ – 02',
                    'description' => null,
                    'content' => null,
                    'price' => 2090000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 10,
                    'sku' => '00019',
                    'featured' => true,
                    'tag' => 'Bicycle',
                ],
                [
                    'id' => 10,
                    'brand_id' => 2,
                    'category_id' => 4,
                    'product_name' => 'Honda Wave RSX Fi 110',
                    'description' => null,
                    'content' => null,
                    'price' => 26500000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 50,
                    'sku' => '00020',
                    'featured' => true,
                    'tag' => 'Motobike',
                ],
                [
                    'id' => 11,
                    'brand_id' => 3,
                    'category_id' => 5,
                    'product_name' => 'Yamaha Janus',
                    'description' => null,
                    'content' => null,
                    'price' => 28600000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 50,
                    'sku' => '00021',
                    'featured' => true,
                    'tag' => 'Motobike',
                ],
                [
                    'id' => 12,
                    'brand_id' => 2,
                    'category_id' => 6,
                    'product_name' => 'Honda Winner X',
                    'description' => null,
                    'content' => null,
                    'price' => 329900000,
                    'qty' => 20,
                    'discount' => null,
                    'weight' => 50,
                    'sku' => '00022',
                    'featured' => true,
                    'tag' => 'Motobike',
                ],
            ]);

            DB::table('products_images')->insert([
                [
                    'product_id' => 1,
                    'path' => 'product1_1.png',
                ],
                [
                    'product_id' => 1,
                    'path' => 'product1_2.png',
                ],
                [
                    'product_id' => 1,
                    'path' => 'product1_3.png',
                ],
                [
                    'product_id' => 2,
                    'path' => 'product2_1.png',
                ],
                [
                    'product_id' => 2,
                    'path' => 'product2_2.png',
                ],
                [
                    'product_id' => 2,
                    'path' => 'product2_2.png',
                ],
                [
                    'product_id' => 3,
                    'path' => 'product3_1.png',
                ],
                [
                    'product_id' => 3,
                    'path' => 'product3_2.png',
                ],
                [
                    'product_id' => 3,
                    'path' => 'product3_3.png',
                ],
                [
                    'product_id' => 4,
                    'path' => 'product4_1.png',
                ],
                [
                    'product_id' => 4,
                    'path' => 'product4_2.png',
                ],
                [
                    'product_id' => 4,
                    'path' => 'product4_3.png',
                ],
                [
                    'product_id' => 5,
                    'path' => 'product5_1.png',
                ],
                [
                    'product_id' => 5,
                    'path' => 'product5_2.png',
                ],
                [
                    'product_id' => 5,
                    'path' => 'product5_3.png',
                ],
                [
                    'product_id' => 6,
                    'path' => 'product6_1.png',
                ],
                [
                    'product_id' => 6,
                    'path' => 'product6_2.png',
                ],
                [
                    'product_id' => 6,
                    'path' => 'product6_3.png',
                ],
                [
                    'product_id' => 7,
                    'path' => 'product7_1.png',
                ],
                [
                    'product_id' => 7,
                    'path' => 'product7_2.png',
                ],
                [
                    'product_id' => 7,
                    'path' => 'product7_3.png',
                ],
                [
                    'product_id' => 8,
                    'path' => 'product8_1.png',
                ],
                [
                    'product_id' => 8,
                    'path' => 'product8_2.png',
                ],
                [
                    'product_id' => 8,
                    'path' => 'product8_3.png',
                ],
                [
                    'product_id' => 9,
                    'path' => 'product9_1.png',
                ],
                [
                    'product_id' => 9,
                    'path' => 'product9_2.png',
                ],
                [
                    'product_id' => 9,
                    'path' => 'product9_3.png',
                ],
                [
                    'product_id' => 10,
                    'path' => 'product10_1.png',
                ],
                [
                    'product_id' => 10,
                    'path' => 'product10_2.png',
                ],
                [
                    'product_id' => 11,
                    'path' => 'product11_1.png',
                ],
                [
                    'product_id' => 11,
                    'path' => 'product11_2.png',
                ],
                [
                    'product_id' => 12,
                    'path' => 'product12_1.png',
                ],
                [
                    'product_id' => 12,
                    'path' => 'product12_2.png',
                ],
            ]);

            DB::table('products_details')->insert([
                [
                    'product_id' => 1,
                    'color' => 'Đỏ',
                    'size' => '12',
                    'qty' => 5,
                ],
                [
                    'product_id' => 1,
                    'color' => 'Hồng',
                    'size' => '12',
                    'qty' => 5,
                ],
                [
                    'product_id' => 1,
                    'color' => 'Tím',
                    'size' => '12',
                    'qty' => 10,
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
