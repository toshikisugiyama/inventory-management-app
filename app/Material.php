<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function inventories ()
    {
        return $this->hasMany('App\Inventory');
    }
}
