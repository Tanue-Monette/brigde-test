<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillables = [
        'name',
        'price',
        'description',
        'user_id',
        'product_status',
        'photo',
        'id'
    ];

    // protected $guarded = ['_token'];

    public function users()
    {
        # declearing the relationship between product and user
        return $this->hasMany(Product::class);
    }
}
