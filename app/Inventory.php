<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = [
        'id',
    ];

    public function material ()
    {
        return $this->belongsTo('App\Material');
    }
}
