<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;    
    /**
     * The table associated with the model.|| COMING SOON ||
     *
     * @var string
     */
    protected $table = 'carts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity',
        'subtotal',
        'total',
        
        
    ];
}
