<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserCar extends Eloquent
{
    protected $connection ='mongodb';
    protected $table = 'user_car';
    
    protected $fillable = [
     
        'id_samochodu',
        'id_uzytkownika',
      
    ];
}
