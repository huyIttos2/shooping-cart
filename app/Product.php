<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable = ['imagPath','title','description','price'];
}
