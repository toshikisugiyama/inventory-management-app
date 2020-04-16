<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'id',
        'lot_code',
        'amount',
        'dead_line',
        'status_flug',
        'comment',
        'material_id',
    ];

    public function material ()
    {
        return $this->belongsTo('App\Material');
    }
}
