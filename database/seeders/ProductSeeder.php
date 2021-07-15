<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'OPPO mobile',
                'price' => '300',
                'category' => 'mobile',
                'discription' => 'A smart phoe have 8G ram & more features',
                'gallery' => 'https://assets.mspimages.in/c/tr:w-375,h-330,c-at_max/17290-96-1.jpg'
            ],
            [
                'name' => 'TV',
                'price' => '400',
                'category' => 'T',
                'discription' => 'A smart tv & more features',
                'gallery' => 'https://img.freepik.com/free-vector/tv-template-background_1412-18.jpg?size=338&ext=jpg'
            ],
            [
                'name' => 'Fridge',
                'price' => '600',
                'category' => 'Fridge',
                'discription' => 'A smart friidge & more features',
                'gallery' => 'https://i.pinimg.com/originals/54/21/b8/5421b8fc3d2e2fd5edec6f8373efbf8e.jpg'
            ],
            [
                'name' => 'AC',
                'price' => '500',
                'category' => 'AC',
                'discription' => 'A smart AC & more features',
                'gallery' => 'https://mns.com.pk/wp-content/uploads/2019/02/Flower-Iris.jpg',            ],
        ]);
    }
}
