<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'titel',
        'description',
        'img',

    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function coments(){
        return $this->belongsToMany(coment::class);
    }
}
