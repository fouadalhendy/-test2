<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
    use HasFactory;
    protected $fillable=[
        'coment',

    ];

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
