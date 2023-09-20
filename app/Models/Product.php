<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price'
    ];

    protected $appends = ['usd_price'];

    public function getUsdPriceAttribute() {
        return env("USD_CONV", 1)*$this->price;
    }
}
