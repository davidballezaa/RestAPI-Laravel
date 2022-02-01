<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getCreatedAttribute() 
    {
       return $this->created_at->diffForHumans(); 
    }

    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 30);
    }
}