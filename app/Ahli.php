<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ahli extends Model
{
    //
    protected $table = 'ahlis';
    protected $fillable = [
      'nama', 'no_kp', 'no_ahli', 'no_telefon', 'alamat', 'email'
    ];

    protected $hidden = ['remember_token'];
}
