<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCar extends Model
{
    public $timestamps = false;
    protected $connection = "mysql";
    protected $table = "type_car";
    protected $primaryKey = "id";

    protected $fillable = [
        'id','type','created_at'
    ];
}
