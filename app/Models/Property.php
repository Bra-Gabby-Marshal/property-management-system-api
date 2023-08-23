<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['property_name', 'address', 'city', 'country', 'type', 'minimum_price', 'maximum_price', 'ready_to_sell'];
}