<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_title',
        'post_desc',
        'category_id',
        'author',
        'image',
        'place'
    ];
    public function Category(){
        //hasone hasmany belongsTo belongs ToMany
        return $this->belongsTo(Category::class);
    }
    


}
