<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    /*
    If the table are not defined, the ORM take the name of the class (Post)
    and will be put lower and added a 's' at the end

    Post => posts

    And can connected without problem
    */
    protected $table = 'posts';

    /**
     * Return a Attribute
     * set method is a mutator and modify the value before to save in the db
     * get method is a accesor and modify the value after to get to the db
     * 
     * In the var $value will be content the value in the column with the same name
     * that the function, it's mean, in the table 'posts' are a column with the name
     * 'title' and this fucntion use this column because is the same name that the
     * function (titlegi) 
     */
    protected function title() : Attribute{
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }
}
