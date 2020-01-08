<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //


    public function index(){
         $fillable = [
        'title',
        'id',
        'image',
    ];
    $category = [
        'name',
        'id',
        'status',
          
    ];


    }

}
