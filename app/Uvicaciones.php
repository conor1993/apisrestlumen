<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Uvicaciones extends Model
{
    
     protected $fillable = ['Imei', 'dt_tracer', 'lat','lng'];
     public $timestamps = false;
    
}