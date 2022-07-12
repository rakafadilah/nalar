<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table='blogs';
    public $timestamps=true;
    protected $fillable=[
        'title','slug','content','image','categories_id','users_id',
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }
}

