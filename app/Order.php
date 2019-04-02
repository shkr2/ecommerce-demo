<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'billing_email', 'billing_name', 'billing_address', 'billing_city',
        'billing_province', 'billing_postalcode', 'billing_phone', 'billing_name_on_card',
        'billing_subtotal', 'billing_tax', 'billing_vat', 'billing_total', 'error'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function products() {
        return $this->belongsToMany('App\Product');
    }

}
