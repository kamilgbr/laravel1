@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Dodawanie nowego samochodu</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <a hidden> {{$id = Auth::id();}}</a>

                    @if($id == "61e847088432000081003d12")
                  
                    <form action="{{route('cars1.save')}}" method="post">
                        @csrf

                        <label>Link do oferty: </label> <input class="form-control" type="text"     name="Link" required><br><br>         
                        <label>Link do głównego zdjęcia: </label> <input class="form-control" type="text"     name="LinkIMG" required><br><br> 
                        <label>Cena: </label> <input class="form-control" type="text"     name="Cena" required><br><br> 
                        <label>Marka pojazdu: </label> <input class="form-control" type="text"     name="Marka_pojazdu" required><br><br>         
                        <label>Model pojazdu: </label> <input class="form-control" type="text"     name="Model_pojazdu" required><br><br>  
                        <label>Rok produkcji: </label> <input class="form-control" placeholder="np. 2005" type="text"     name="Rok_produkcji" required><br><br>
                        <label>Przebieg: </label> <input class="form-control" placeholder="np. 125000" type="text" name="Przebieg" required><br><br>
                       
                        <label>Rodzaj paliwa: </label> <select class="form-control" name="Rodzaj_paliwa" required>
                            <option>Benzyna</option>
                            <option>Diesel</option>
                            <option>Benzyna+LPG</option>
                        </select><br><br>

                        <label>Pojemość skokowa: </label> <input class="form-control" placeholder="np. 1991" type="text"   name="Pojemość_skokowa" required><br><br>


                        <label>Moc: </label> <input class="form-control" type="text"  name="Moc" required><br><br>

                        <label>Skrzynia biegów: </label> <select class="form-control" name="Skrzynia_biegów" required>
                            <option>Wybierz</option>
                            <option>Manualna</option>
                            <option>Automatyczna</option>
                        </select><br><br>

                        <label>Napęd: </label> <select class="form-control" name="Napęd" required>
                            <option>Wybierz</option>
                            <option>Na przednie koła</option>
                            <option>Na tylne koła</option>
                            <option>4x4</option>
                        
                        </select><br><br>

                        <label>Typ nadwozia: </label> <select class="form-control" name="Typ_nadwozia" required>
                            <option>Wybierz</option>
                            <option>Sedan</option>
                            <option>Kombi</option>
                            <option>Coupe</option>
                            <option>Kabiriolet</option>
                            <option>Kompakt</option>
                            <option>SUV</option>
                            <option>Auta małe</option>
                            <option>Auta miejskie</option>
                            <option>Minivan</option>
                        </select><br>

                        <label>Liczba drzwi: </label> <select class="form-control" name="Liczba_drzwi" required> 
                            <option>Wybierz</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select><br><br>

                        <label>Liczba miejsc: </label> <select class="form-control" name="Liczba_miejsc" required> 
                            <option>Wybierz</option>
                            <option>2</option>
                            <option>4</option>
                            <option>5</option>
                            <option>7</option>
                        </select><br><br>

                        <label>Kolor: </label> <input class="form-control" type="text"  name="Kolor" required><br><br>  
                        <label>Strona: </label> <select class="form-control" name="Strona" required> 
                            <option>Wybierz</option>
                            <option>otomoto</option>
                            <option>autocentrum</option>
                          
                        </select><br><br>
                       

                            <p><button class="btn btn-primary">Zatwierdź</button></p>
                    </form>
                    @else

                    <script type="text/javascript">
                        window.location.href = "http://localhost:8000/login";//here double curly bracket
                    </script>

                    @endif
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
{{-- @include('footer') --}}

@endsection



