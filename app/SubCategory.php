<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubCategory extends Model
{
    /**
     * Get the products for the category.
     */
    public function products() {
        return $this->belongsToMany('App\Product');
    }

    public function mainCategory(){
        return $this->belongsTo('App\MainCategory');
    }

    public function save(array $options = []) {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
        return parent::save($options);
    }
}
