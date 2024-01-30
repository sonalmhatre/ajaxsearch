<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pujavidhi extends Model
{
    use HasFactory;
    protected $table ='pujavidhi';
    protected $fillable=['title','image','price','description','category'];
    public function categories(){
        return $this->belongsTo('App\Models\Category','category');
    }
}
