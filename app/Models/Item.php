<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
      'warehouse_id', 'name', 'stock', 'type', 'status', 'code', 'grade', 'photo'
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
