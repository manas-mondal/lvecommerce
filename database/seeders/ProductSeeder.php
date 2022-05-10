<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
         [
   
          'name'=>'Oppo Mobile',
          'price'=>20000,
          'category'=>'mobile',
          'gallery'=>'https://tinyurl.com/34h7c63p',
          'description'=>'a smartphone with 8gb ram and much more feature',
          
  
        ],
        [
   
          'name'=>'Vivo Mobile',
          'price'=>25000,
          'category'=>'mobile',
          'gallery'=>'https://tinyurl.com/yckze385',
          'description'=>'a smartphone with 8gb ram and so much more feature',
          
  
        ],
        [
   
          'name'=>'Godrej Fridge',
          'price'=>20000,
          'category'=>'fridge',
          'gallery'=>'https://tinyurl.com/3vnyhbff',
          'description'=>'a smart fridge with so much more feature',
          
  
        ]
        ]);
    }
}
