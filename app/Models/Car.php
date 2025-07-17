<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $primaryKey = 'car_id';

    protected $fillable = ['car_name','car_price','car_details','car_image'];

    protected $casts = [
        'car_price' => 'decimal:2',
    ];

     protected static function booted()
    {

        static::created(function ($car) {
            logger("✅ New car added: {$car->car_name}, Price: ₹{$car->car_price}");
        });

        static::updated(function ($car) {
            logger("✏️ Car ID {$car->car_id} has been updated.");
        });

        static::deleted(function ($car) {
            logger("🗑️ Car ID {$car->car_id} has been deleted.");
        });
    }
}