<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  public $table='surveys';
  public $fillable = ['name','desc','project','template'];
  
}
