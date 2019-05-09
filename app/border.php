<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class border extends Model
{
    use SoftDeletes;
    protected $table="borders";
    protected $fillable=[
        'name',
        'father',
        'mother',
        'mobile',
        'email',
        'room',
        'block',
        'technology',
        'shift',
        'semester',
    ];
    protected $dates=['delete_at'];
}
