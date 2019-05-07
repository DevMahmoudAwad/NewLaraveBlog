<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    protected $fillable=[

    	'title',
    	'content',
    	'slug',
    ];


    public function getContentAttribute(){

    	return str_limit($this->attributes['content'],20);
    }
}
