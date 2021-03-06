<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cars1 extends Eloquent
{
  
protected $connection ='mongodb';
protected $table = 'Samochody';
 //protected $table = 'Prezentacja';

protected $fillable = [
    
    'Link',
    'LinkIMG',
    'Cena',
    'Marka_pojazdu',
    'Model_pojazdu',
    'Rok_produkcji',
    'Przebieg',
    'Rodzaj_paliwa',
    'Pojemność_skokowa',
    'Moc',
    'Skrzynia_biegów',
    'Napęd',
    'Typ_nadwozia',
    'Liczba_drzwi',
    'Liczba_miejsc',
    'Kolor',
    'Strona',
];

}
