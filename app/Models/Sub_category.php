<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    protected $table = "Sub_category";
    protected $fillable = [
    	"subcategor_id","sub_category_name"
    ];

    public function Products(){
    	return $this->belongsTo('App\Models\Products');
    }
}
