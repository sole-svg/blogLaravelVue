<?php

use App\category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        category::truncate();
        
        for($i = 1; $i<=20; $i++){
        category::create([
            'title'=> "categoria $i",
            'url_clean'=> "categoria-$i"
        ]);
    }}
}
