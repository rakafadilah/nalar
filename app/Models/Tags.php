<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
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
}
