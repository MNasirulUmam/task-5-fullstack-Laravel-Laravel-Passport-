<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts()
    {
        return  $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
