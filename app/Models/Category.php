<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['category_name','category_icon'];
    public function items(){
        return $this->hasMany('App\Models\Pujavidhi','id');
    }
}
