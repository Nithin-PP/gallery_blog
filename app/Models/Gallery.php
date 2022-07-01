<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="galleries";
    protected $fillable=['title', 'detail', 'description', 'image'];

    function blogData(){  

        return $this->hasMany(Blog::class,'galleries_id','id');
    }
  
}
