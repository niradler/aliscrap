<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
          'link',
           'user_id' ,
          'page_id',
         'description',
          'image',
         'keywords',
        'price',
        'priceCurrency',
        'site_name',
                ];
   
}
