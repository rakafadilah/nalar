<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // ini nama table
    protected $table='tags';
    // cara  auto timestamps ketika create or update row
    public $timestamps=true;
    // field dalam table yang dapat di isi
    protected $fillable=[
        'name','slug'
    ];


    //menambahkan relasi many to many

    public function blogs(){
        return $this->belongsToMany('App\Models\Blog');
    }


}
