<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "user";
    protected $fillable = [
    	"user_id","name","username","email","password"
    ];

    public function products(){
    	return $this->hasMany('App\Models\Products');
    }
}
