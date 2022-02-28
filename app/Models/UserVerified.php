<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerified extends Model
{
    use HasFactory;

    protected $fillable=['email','token','user_id'];

   public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
