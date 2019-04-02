<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MainCategory extends Model
{
    protected $fillable = ['title'];

    public function subCategories() {
        return $this->hasMany('App\SubCategory');
    }

    public function save(array $options = []) {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
        return parent::save($options);
    }
}
