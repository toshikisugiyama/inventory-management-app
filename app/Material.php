<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'supplier',
        'unit',
        'comment',
    ];

    public function inventories ()
    {
        return $this->hasMany('App\Inventory');
    }
}
