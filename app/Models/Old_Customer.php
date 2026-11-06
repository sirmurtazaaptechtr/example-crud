<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    /** The table associated with the model. */
    protected $table = 'customers';

    /** The primary key for the model. */
    protected $primaryKey = 'CustomerID';

    /** The schema has no created_at / updated_at columns. */
    public $timestamps = false;

    /** The attributes that are mass assignable. */
    protected $fillable = [
        'CustomerName',
        'ContactName',
        'Address',
        'City',
        'PostalCode',
        'Country',
    ];

    /** Orders placed by this customer. */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'CustomerID', 'CustomerID');
    }
}