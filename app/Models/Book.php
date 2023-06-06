<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Book extends Model implements HasMedia
{
   use HasMediaTrait;
   
    protected $fillable = [
        'name',
        "user_id",
        'author'
    ];
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }





}
