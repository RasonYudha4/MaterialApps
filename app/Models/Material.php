<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{
    protected $table = 'materials';

    protected $fillable = [
        'names',
        'days'
    ];

    public $timestamps = false;
    public function orderMaterials() : HasMany 
    {
        return $this->HasMany(OrderMaterial::class, 'orderId');
    }
}
