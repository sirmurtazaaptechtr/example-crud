<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{    
    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    protected $fillable = [
        'CustomerName',
        'ContactName',
        'Address',
        'City',
        'PostalCode',
        'Country',
    ];
}
