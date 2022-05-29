@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Wszystkie samochody:</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                
                  
                    <div class="d-none"> {{$licznik = 0;}}  </div>   
              

                  <form action="{{ route('search') }}" method="GET">
                  <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label  class="col-form-label">Marka:</label><br>
                      <label  class="col-form-label">Model:</label>
                    </div>
                    <div class="col-auto">
                      <input required type="text"  class="form-control" name="marka"><br>
                      <input required type="text"  class="form-control" name="model">
                    
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary" type="submit">Szukaj</button>
                    </div>
                  
                  </div>
                </form><br><br>
                    

                  @if($cars->isNotEmpty())
                      @foreach ($cars as $item)
                      @if ($licznik < 50)
                        <div class="post-list">
                          
                          <div class="card mb-3" style="max-width: auto;">
                            <div class="row g-0">
                             
                              <div class="col-md-4">
                            <img src="{{ asset($item['LinkIMG']) }}" class="img-fluid rounded-start" alt="Oferta wygasła"><br>
        
                            <a style="max-width: auto;" class="btn btn-secondary position-absolute bottom-0 start-0" target="_blank" href="{{$item['Link']}}"> Oferta Otomoto</a>
                               
                              </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                  
                                  <h2 class="float-end"><b class="text-danger">{{$item['Cena']}} zł</b></h2>
                                  <h5 class="card-title"><h3><b>{{$item['Marka_pojazdu']}} {{$item['Model_pojazdu']}}</b><h3></h5>
                                    <h6 class="card-text"><b>Pojemność silnika:</b> {{$item['Pojemność_skokowa']}} cm3</h6>
                                    <h6 class="card-text"><b>Moc:</b> {{$item['Moc']}} KM</h6>
                                    <h6 class="card-text"><b>Paliwo:</b> {{$item['Rodzaj_paliwa']}}</h6>
                                    <h6 class="card-text"><b>Skrzynia Biegów:</b> {{$item['Skrzynia_biegów']}}</h6>
                                     <h6 class="card-text"><b>Nadwozie:</b> {{$item['Typ_nadwozia']}}</h6>
                                    <h6 class="card-text"><b>Rok produkcji:</b> {{$item['Rok_produkcji']}}</h6>  
                                    <h6 class="card-text"><b>Przebieg:</b> {{$item['Przebieg']}} km</h6><p class="float-end"><img width="200" height="200" class="img-fluid rounded-start" src="https://www.321sprzedane.pl/public/assets/press-banner/PL/otomoto_logo_prime-2.png"></p>
                                   
                         
                               
                                </div>
                              </div>
                            </div>
                          </div>
                          <a hidden>{{$licznik++}}</a>
                        @endif
                      @endforeach
                      @else 
                      <div class="alert alert-danger" role="alert">
                       Nie znaleziono samochodów.
                      </div>
                  @endif
                    
           
                    
    
                </div>
              <div>   
            </div>
        </div>
    </div>
</div>
</div>
<br><br>


@endsection

