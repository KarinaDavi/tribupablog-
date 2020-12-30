<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
    	return $this->hasMany('App\Models\Post');
    }
    public $incrementing = false;
    protected $primaryKey = 'post_id';
}
