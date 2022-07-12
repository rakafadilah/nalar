<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    public $timestamps=true;
    protected $fillable=[
        'name','slug','deskripsi'
    ];

    //menambahkan relasi one to many
    public function blogs()
    {
        return $this->hasMany('App\Models\Blog');
    }
}
