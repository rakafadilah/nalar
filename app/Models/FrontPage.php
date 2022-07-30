<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontPage extends Model
{
    use HasFactory;
    protected $table='front_pages';
    public $timestamps=true;
    protected $fillable=[
        'title','subtitle','categories_id','image'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }
}
