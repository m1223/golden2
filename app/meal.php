<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class meal extends Model
{
    use SoftDeletes;
    protected $table="meals";
    protected $fillable=[
      'name',
      'mobile',
      'room',
      'block',
      'meal'
    ];
    protected $dates=['delete_at'];

}
