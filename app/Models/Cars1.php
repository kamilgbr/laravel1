<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cars1 extends Eloquent
{
  
protected $connection ='mongodb';
protected $table = 'Otomoto';

protected $fillable = [
    
    'LinkIMG',
    'Marka_pojazdu',
    'Model_pojazdu',
    'Pojemność_skokowa',
    'Rodzaj_paliwa',
    'Moc',
    'Skrzynia_biegów',
    'Napęd',
    'Typ_nadwozia',
    'Liczba_drzwi',
    'Liczba_miejsc',
    'Kolor',
    'Kraj_pochodzenia',
    'Strona',
];

}
