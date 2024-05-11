<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function user()
    {
        //Relation one to one inverse
        return $this->belongsTo(User::class);
        //return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
