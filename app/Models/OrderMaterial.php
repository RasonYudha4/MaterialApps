<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderMaterial extends Model
{
    protected $table = 'ordermaterial';

    public $timestamps = false;

    protected $fillable = [
        'orderId',
        'materialId',
        'Percentage',
        'Finished_date'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'orderId');
    }

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class, 'materialId');
    }
}
