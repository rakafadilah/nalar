<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $table='homepages';
    public $timestamps=true;
    protected $fillable=[
        'title','subtitle','title1','subtitle1','title2','subtitle2','title3','subtitle3','image'
    ];
}
