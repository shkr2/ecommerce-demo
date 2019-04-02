<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model {

    protected $fillable = ['available_quantity'];

    public function categories() {
        return $this->belongsToMany('App\SubCategory');
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function save(array $options = []) {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
        return parent::save($options);
    }

    public function orders() {
        return $this->belongsToMany('App\Orders');
    }


}
