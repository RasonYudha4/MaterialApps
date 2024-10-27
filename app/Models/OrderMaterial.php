<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderMaterial extends Model
{
    protected $table = 'ordermaterial';

    protected $fillable = [
        'work_order_number',
        'materialId',
        'Percentage'
    ];

    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function Material(): BelongsTo
    {
        return $this->belongsTo(Material::class);
    }
}
