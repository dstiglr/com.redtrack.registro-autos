<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;
    protected $connection = "mysql";
    protected $table = "service";
    protected $primaryKey = "id";

    protected $fillable = [
        'id','car_model','price','comments','plates','employed_sanitizer','company','economic','type_car','created_at'
    ];
}
