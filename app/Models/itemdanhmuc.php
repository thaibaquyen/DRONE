<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemdanhmuc extends Model
{
    use HasFactory;
    protected $table = "itemdanhmuc";
    protected  $primaryKey = "id";
    public $timestamps = false;
}
