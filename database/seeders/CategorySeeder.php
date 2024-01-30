<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('y-m-d h:i:s');
        $data = [[
            'category_name' => 'Love & Relationship',
            'category_icon' => 'cat_img1.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Good Health',
            'category_icon' => 'cat_img2jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Children',
            'category_icon' => 'cat_img3.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Education',
            'category_icon' => 'cat_img4.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Legal',
            'category_icon' => 'cat_img5.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Money & Career',
            'category_icon' => 'cat_img6.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'House And Property',
            'category_icon' => 'cat_img7.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Black Magic & Evil Eye',
            'category_icon' => 'cat_img8.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Mental Stress & Depression',
            'category_icon' => 'cat_img9.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Peace & Prosperity',
            'category_icon' => 'cat_img10.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Nakshatra & Grah Shanti',
            'category_icon' => 'cat_img11.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Festive',
            'category_icon' => 'cat_img12.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ],
        [
            'category_name' => 'Sindhurmani Rati Kamdev puja',
            'category_icon' => 'cat_img13.jpg',
            'created_at'=>$date,
            'updated_at'=>$date
        ]];
        DB::table('categories')->insert($data);
    }
}
