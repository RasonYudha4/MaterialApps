<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'Client',
        'Work_date'
    ];
    public $timestamps = false;
    public function OrderMaterial() : HasMany 
    {
        return $this->HasMany(OrderMaterial::class);
    }
}
