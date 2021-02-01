<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['title', 'url_clean'];

    public function post(){
        return $this->hasMany(Post::class);
    }
}
