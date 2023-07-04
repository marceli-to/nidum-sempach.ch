<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Apartement extends Model
{
  protected $fillable = [
    'number',
    'building',
    'additional_cost',
    'rent_net',
    'rent_gross',
    'flatfox_uri',
    'state',
    'floor',
    'rooms',
    'order',
    'square_footage',
    'last_update_by',
  ];
}
