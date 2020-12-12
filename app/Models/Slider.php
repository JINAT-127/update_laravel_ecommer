<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
     use HasFactory;
    protected $table = "Slider";
    protected $fillable = [
    	"title","category_id","products_id","photo","description"
    ];

    public function products(){
    	return $this->belongsTo('App\Models\products');
    }
}
