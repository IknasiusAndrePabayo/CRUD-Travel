<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'travel_package_id',
        'total_price',
        'status',
    ];

    /**
     * Relationship dengan paket perjalanan (TravelPackage).
     */
    public function travelPackage()
    {
        return $this->belongsTo(TravelPackage::class);
    }
}
