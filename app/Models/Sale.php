<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    //テーブル名
    protected $table ='sales';

    //可変項目
    protected $fillable = 
    [
       'id',
       'product_id'
    ];
}
