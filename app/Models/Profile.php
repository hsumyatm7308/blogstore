<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'images';

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
