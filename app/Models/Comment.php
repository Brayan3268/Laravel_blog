<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Relation one to many inverse
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
