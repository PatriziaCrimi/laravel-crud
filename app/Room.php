<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  //Questo serve per mappare la tabella Rooms
  protected $table = 'rooms';

  protected $fillable = ['availability', 'number', 'name', 'season', 'floor', 'beds', 'balcony', 'basic_price', 'size', 'description', 'notes'];
}
