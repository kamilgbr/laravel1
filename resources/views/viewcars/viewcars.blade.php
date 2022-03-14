@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Samochody z Otomoto:</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                
                  
                    <div class="d-none"> {{$licznik = 0;}}  </div>   
              
                  
                    
                    @foreach ($cars as $item)
              
                        @if ($licznik < 50)
                            
           
                          <div class="card-deck">
                           <div class="card">
                             {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                             <div class="card-body">
                              <img  height="250" src="{{ asset($item['LinkIMG']) }}" alt="https://www.filtrowanie.com.pl/wp-content/uploads/2017/07/brak-zdjecia-300x225.png"><br><br>
                               <h5 class="card-title">{{$item['Marka_pojazdu']}} {{$item['Model_pojazdu']}} {{$item['Generacja']}}</h5>
                               <p class="card-text">  Pojemność: {{ $item['Pojemność_skokowa']}} cm3<br>
                              Moc: {{ $item['Moc']}} KM</p>
                             </div>
                             <div class="card-footer">
                               <small class="text-muted"><b>Paliwo:</b> {{$item['Rodzaj_paliwa']}} | <b>Skrzynia biegów:</b> {{$item['Skrzynia_biegów']}} | <b>Ilość miejsc:</b> {{$item['Liczba_miejsc']}} | <b>Nadwozie:</b> {{$item['Typ_nadwozia']}}</small>
                             </div>

                             <form action="{{route('home')}}" method="post">
                              
                              {{-- @csrf
                              <button class="btn btn-primary" type="submit" name="save"> Zapisz </button>   --}}
                            
                            </form>

                           </div>
                       
                           <br>
                           <div class="d-none"> {{$licznik++;}}</div>
                        
                       <br> 
                      
                        @endif
                      
                        @endforeach
                  
                    
    
                </div>
              <div>   
            </div>
        </div>
    </div>
</div>
<br><br>

<div>@include('footer')</div>
@endsection

