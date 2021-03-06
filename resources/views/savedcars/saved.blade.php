@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Zapisane ogłoszenia:</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a hidden>{{$id = Auth::id();}}</a>
                    @if(isset($id))
                    
                  
                    {{-- <a class="btn btn-primary" href="{{ URL::to('/savedcars/pdf') }}">Eksportuj do PDF</a> --}}
                    @foreach ($cars1 as $mess1)
                    @foreach ($cars as $mess)
                  
                    @endforeach
                    @endforeach
                    
                    {{-- @if(@isset($mess))
                    @if(($mess['id_uzytkownika'] == $id)) 

                    <div class="alert alert-primary" role="alert">
                     Zapisane samochody: {{count($mess['znacznik'])}}
                    </div>
 
                   @endif 
                   @endisset --}}
                   @if(!@isset($mess))
                   <div class="alert alert-warning" role="alert">
                    Nie masz zapisanych żadnych samochodów. Wyszukaj samochody na <a href="home">Stronie Głównej</a> aby dodać do listy ulubionych.
                   </div> 
                   @endisset
              
                  
                    @foreach ($cars1 as $item1)
                    @foreach ($cars as $item)
                     
                   @if(($item1['_id'] == $item['id_samochodu']) && $item1['Strona'] == 'otomoto')
              
                   <div class="card-deck">
                     <div class="card mb-3" style="max-width: auto;">
                         <div class="row g-0">
                          
                           <div class="col-md-4">
                         <img height="300" src="{{ asset($item1['LinkIMG']) }}" class="img-fluid rounded-start" alt="Oferta wygasła"><br>
                         <a style="max-width: auto;" class="btn btn-secondary position-absolute bottom-0 start-0" target="_blank" href="{{$item1['Link']}}"> Przejdź do oferty</a>
                            
                           </div>
                         <div class="col-md-8">
                             <div class="card-body">
                               <h2 class="float-end"><b class="text-danger">{{$item1['Cena']}} zł</b></h2>
                               <h5 class="card-title"><h3><b>{{$item1['Marka_pojazdu']}} {{$item1['Model_pojazdu']}}     <a href="{{route('savedcars.delete' , $item->_id)}}" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                              </svg></a>
                              
                             </b><h3></h5>
                                 <h6 class="card-text"><b>Pojemność silnika:</b> {{$item1['Pojemność_skokowa']}} cm3</h6>
                                 <h6 class="card-text"><b>Moc:</b> {{$item1['Moc']}} KM</h6>
                                 <h6 class="card-text"><b>Paliwo:</b> {{$item1['Rodzaj_paliwa']}}</h6>
                                 <h6 class="card-text"><b>Skrzynia Biegów:</b> {{$item1['Skrzynia_biegów']}}</h6>
                                  <h6 class="card-text"><b>Nadwozie:</b> {{$item1['Typ_nadwozia']}}</h6>
                                 <h6 class="card-text"><b>Rok produkcji:</b> {{$item1['Rok_produkcji']}}</h6>  
                                 <h6 class="card-text"><b>Przebieg:</b> {{$item1['Przebieg']}} km</h6><p class="float-end"><img width="100" height="100" class="img-fluid rounded-start" src="https://www.321sprzedane.pl/public/assets/press-banner/PL/otomoto_logo_prime-2.png"></p>
                             
                             </div>
                            
                            
                           </div>
                         </div>
                       </div>
                 <br>
                   
                 
                <br> 
                    @endif
                 @endforeach
                 @endforeach

                @foreach ($cars1 as $item1)
                   @foreach ($cars as $item)
                    
                  @if(($item1['_id'] == $item['id_samochodu']) && $item1['Strona'] == 'autocentrum')
             
                  <div class="card-deck">
                    <div class="card mb-3" style="max-width: auto;">
                        <div class="row g-0">
                         
                          <div class="col-md-4">
                        <img height="300" src="{{ asset($item1['LinkIMG']) }}" class="img-fluid rounded-start" alt="Oferta wygasła"><br>
                        <a style="max-width: auto;" class="btn btn-secondary position-absolute bottom-0 start-0" target="_blank" href="{{$item1['Link']}}"> Przejdź do oferty</a>
                           
                          </div>
                        <div class="col-md-8">
                            <div class="card-body">
                              <h2 class="float-end"><b class="text-danger">{{$item1['Cena']}} zł</b></h2>
                              <h5 class="card-title"><h3><b>{{$item1['Marka_pojazdu']}} {{$item1['Model_pojazdu']}}  <a href="{{route('savedcars.delete' , $item->_id)}}" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                              </svg></a>   
                             
                            </b><h3></h5>
                                <h6 class="card-text"><b>Pojemność silnika:</b> {{$item1['Pojemność_skokowa']}} cm3</h6>
                                <h6 class="card-text"><b>Moc:</b> {{$item1['Moc']}} KM</h6>
                                <h6 class="card-text"><b>Paliwo:</b> {{$item1['Rodzaj_paliwa']}}</h6>
                                <h6 class="card-text"><b>Skrzynia Biegów:</b> {{$item1['Skrzynia_biegów']}}</h6>
                                 <h6 class="card-text"><b>Nadwozie:</b> {{$item1['Typ_nadwozia']}}</h6>
                                <h6 class="card-text"><b>Rok produkcji:</b> {{$item1['Rok_produkcji']}}</h6>  
                                <h6 class="card-text"><b>Przebieg:</b> {{$item1['Przebieg']}} km</h6><p class="float-end"><img width="100" height="100" class="img-fluid rounded-start" src="data:image/png;base64,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"></p>
                                
                            </div>
                           
                           
                          </div>
                        </div>
                      </div>
                <br>
                  
                
               <br> 
                   @endif
                @endforeach
                @endforeach
        
    
                </div>
              <div>   
            </div>
        </div>
    </div>
</div>
<br><br>
@else

<script type="text/javascript">
    window.location.href = "http://localhost:8000/login";//here double curly bracket
</script>

@endif 

@endsection
