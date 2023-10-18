<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * @var \DateInterval|false|mixed
     */
    protected $table = 'orders';
    protected $fillable = [
        'full_name',
        'email',
        'address',
        'location',
        'tel',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'num_of_days',
    ];
    public function Products(){
        return $this->belongsToMany(Product::class,"order_products")->withPivot(["qty","price"]);
    }
}
