<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name_ge', 'name_en','cat_id'];

    public function subcategory(){
        return $this->hasMany( 'subcategories', 'cat_id', 'id');
    }
}
