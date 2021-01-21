<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    const CREATED_AT='olusturulma_tarihi';
    const UPDATED_AT='guncellenme_tarihi';

    public function getUser() {
      return $this->hasOne('App\Models\Uyeler', 'id', 'user');
    }

    public function getComment() {
      return $this->hasMany('App\Models\Comment', 'post')->where('status',1);
    }
}
