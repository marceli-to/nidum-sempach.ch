<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Apartement extends Model
{
  protected $fillable = [
    'number',
    'building',
    'floor',
    'rooms',
    'footage',
    'footage_outer',
    'rent_net',
    'additional_cost',
    'rent_gross',
    'order',
    'state',
    'flatfox_uri',
    'last_update_by',
  ];

  protected $appends = [
    'number_string',
    'floor_string',
  ];

  public function getNumberStringAttribute()
  {
    return strtolower(str_replace(' ', '', $this->number));
  }

  public function getFloorStringAttribute()
  {
    return strtolower(str_replace(' ', '', $this->floor));
  }
}
