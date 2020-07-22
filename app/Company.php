<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    protected $connection = "mysql";
    protected $table = "company";
    protected $primaryKey = "id";

    protected $fillable = [
        'id','name','created_at'
    ];
}
