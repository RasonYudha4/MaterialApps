<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'order';

    protected $primaryKey = 'Work_order_number';

    protected $fillable = [
        'Client',
        'Work_date'
    ];
    public $timestamps = false;
    public function orderMaterials() : HasMany 
    {
        return $this->HasMany(OrderMaterial::class, 'materialId');
    }
}
