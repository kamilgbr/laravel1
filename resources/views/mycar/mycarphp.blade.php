@extends('layouts.app')
<title>Propozycje dla Ciebie</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Wyszukane oferty dla Ciebie:</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a hidden>{{$id = Auth::id();}}</a>

                    @if(isset($id))

                       <div class="d-none"> {{$licznik = 0;}} <div class="d-none">  {{$suma=0;}}</div>   </div> 
            
                          @if(count($cars)>0)

                            <div class="alert alert-success" role="alert">
                              Znaleziono {{count($cars)}} pasujących ofert.
                            </div>

                          @else 
                            <div class="alert alert-danger" role="alert">
                              Nie odnaleziono samochodów spełniających podane kryteria lub nie podano wystarczającej ilości danych.
                            </div>
                          @endif 
          
                    @foreach ($cars as $item)
                  
                      @if ($licznik < 200)
                   
                        @if ($item['Strona'] == "otomoto" || $item['Strona'] == "autocentrum")

                          <div class="card mb-3" style="max-width: auto;">
                          <div class="row g-0">
                         
                          <div class="col-md-4">
                          <img src="{{ asset($item['LinkIMG']) }}" class="img-fluid rounded-start" alt="Oferta wygasła"><br>

                          @if ($item['Strona'] == "otomoto")
                            <a style="max-width: auto;" class="btn btn-secondary position-absolute bottom-0 start-0" target="_blank" href="{{$item['Link']}}"> Przejdź do ogłoszenia Otomoto</a>
                          @endif

                          @if ($item['Strona'] == "autocentrum")
                            <a style="max-width: auto;" class="btn btn-secondary position-absolute bottom-0 start-0" target="_blank" href="{{$item['Link']}}"> Przejdź do ogłoszenia Autocentrum</a>
                          @endif
                          </div>

                          <div class="col-md-8">
                              <div class="card-body">
                                <h2 class="float-end"><b class="text-danger">{{$item['Cena']}} zł</b></h2>
                                @if ($item['Marka_pojazdu'] == "Mercedes")
                                  <h5 class="card-title"><h3><b>{{$item['Marka_pojazdu']}}-Benz {{$item['Model_pojazdu']}}</b><h3></h5>
                                @else
                                  <h5 class="card-title"><h3><b>{{$item['Marka_pojazdu']}} {{$item['Model_pojazdu']}}</b><h3></h5>
                                @endif
                                  <h6 class="card-text "><b>Pojemność silnika:</b> {{$item['Pojemność_skokowa']}} cm3</h6>
                                  <h6 class="card-text"><b>Moc:</b> {{$item['Moc']}} KM</h6>
                                  <h6 class="card-text"><b>Paliwo:</b> {{$item['Rodzaj_paliwa']}}</h6>
                                  <h6 class="card-text"><b>Skrzynia Biegów:</b> {{$item['Skrzynia_biegów']}}</h6>
                                  <h6 class="card-text"><b>Nadwozie:</b> {{$item['Typ_nadwozia']}}</h6>
                                  <h6 class="card-text"><b>Rok produkcji:</b> {{$item['Rok_produkcji']}}</h6>  
                                  <h6 class="card-text"><b>Przebieg:</b> {{$item['Przebieg']}} km</h6><p class="float-end">

                                  @if ($item['Strona'] == "otomoto")
                                    <img width="150" height="150" class="img-fluid rounded-start" src="https://www.321sprzedane.pl/public/assets/press-banner/PL/otomoto_logo_prime-2.png"></p>
                                  @endif

                                  @if ($item['Strona'] == "autocentrum")
                                   <img width="150" height="150" class="img-fluid rounded-start" src="data:image/png;base64,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"></p>
                                  @endif

                                  <form> 
                                    <input name="id" value="{{$item['_id']}}"  hidden> 
                                    <button type="submit" name="save"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/></svg>
                                    </button>
                                  </form>
                            </div>
                            </div>
                          </div>
                          </div>
                       
                           <div class="d-none"> {{$licznik++;}}</div>
                           <div class="d-none">  {{$suma+=$licznik;}}</div>
                           
                           {{-- @else --}}
                           @endif 
                   @endif 
                   @endforeach
                  <div class="d-none"> {{$licznik1 = 0;}}  </div> 
                   

    
                </div>
               
            
              <div>   
            </div>
        </div>
    </div>
    
</div>
</div>
@include('footer')
<br><br>
@else

<script type="text/javascript">
    window.location.href = "http://localhost:8000/login";//here double curly bracket
</script>

@endif 

@endsection
