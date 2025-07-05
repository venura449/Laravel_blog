<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
    ];
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
