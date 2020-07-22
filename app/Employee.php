<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $connection = "mysql";
    protected $table = "employee";
    protected $primaryKey = "id";

    protected $fillable = [
        'id','name','created_at'
    ];
}
