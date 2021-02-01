<?php
namespace App;

use App\category;
use App\PostImage;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $fillable = ['title', 'url_clean', 'content', 'category_id', 'posted'];

    public function category(){
        return $this->belongsTo(category::class);
    }
    public function image(){
        return $this->hasOne(PostImage::class);
    }
}
