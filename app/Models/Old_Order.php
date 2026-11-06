<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'OrderID';
    public $timestamps = false;

    protected $fillable = ['CustomerID', 'EmployeeID', 'OrderDate', 'ShipperID'];
    protected $casts = ['OrderDate' => 'datetime'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'CustomerID');
    }
    // + employee(), shipper(), orderDetails() ...
}