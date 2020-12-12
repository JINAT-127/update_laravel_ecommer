<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
	 use HasFactory;
    protected $table = "brand";
    protected $fillable = [
    	"brand_id","brand_name","photo"
    ];

    public function products(){
    	return $this->belongsTo('App\Models\Products');
    }
}
