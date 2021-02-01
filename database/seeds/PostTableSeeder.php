<?php

use App\category;
use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = category::all();

        foreach($categories as $key => $c){
            for($i = 1; $i<=20; $i++){
                Post::create([
                    'title'=> "Post $i $key",
                    'url_clean'=> "Post-$i-$key",
                    'content' => "Within the DatabaseSeeder class, you may use the call method to execute additional seed classes. Using the call method allows you to break up your database seeding into multiple files so that no single seeder class becomes too large. The call method accepts an array of seeder classes that should be executed:",
                    'posted' => 'yes',
                    'category_id' => $c->id
                ]);
            }
        }
        
    }
}
