<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'stock', 'type', 'status', 'code', 'grade'
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
