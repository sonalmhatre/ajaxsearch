<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PujaViddhiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('y-m-d h:i:s');
        $data =[[
            'title' => 'Sindhurmani Rati Kamdev puja',
            'image' => 'god_img1.jpg',
            'price' => 130,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>1,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Sindhurmani Rati manmadha pujan',
            'image' => 'god_img1.jpg',
            'price' => 130,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>2,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Sindhurmani Rati Kamdev puja',
            'image' => 'god_img1.jpg',
            'price' => 130,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>3,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Ardhanarishvara Puja',
            'image' => 'god_img1.jpg',
            'price' => 150,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>4,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Gauri Shankar puja',
            'image' => 'god_img1.jpg',
            'price' => '$130-$150',
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>5,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Mangal dosh nivaran puja',
            'image' => 'god_img1.jpg',
            'price' => 150,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>6,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Gayatri puja for famliy',
            'image' => 'god_img1.jpg',
            'price' => 150,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>7,
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'title' => 'Gayatri puja for famliy friends',
            'image' => 'god_img1.jpg',
            'price' => 130,
            'description' => 'Ardhnarishwara is the symbol of male and female duality. It represents the bond of love between Lord Shiva and his consort Parvati Ji as Ardhnarishwara is a combination of.',
            'category' =>8,
            'created_at'=>$date,
            'updated_at'=>$date
        ]];
        DB::table('pujavidhi')->insert($data);
    }
}
