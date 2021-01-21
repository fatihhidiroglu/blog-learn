<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uyeler extends Model
{
    use HasFactory;
    public $table='users';
    public $timestamps=false;

    public function getPost() {
      return $this->hasMany('App\Models\Post', 'user');
    }
    public function getPostCount() {
      return $this->hasMany('App\Models\Post', 'user')->count();
    }
}
