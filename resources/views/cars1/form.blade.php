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
                   
                
                    <form action="{{route('cars1.save')}}" method="post">
                        @csrf
     
                        <label>Marka pojazdu: </label> <input class="form-control" type="text"     name="Marka_pojazdu" required><br><br>         
                        <label>Model pojazdu: </label> <input class="form-control" type="text"     name="Model_pojazdu" required><br><br>  
                        <label>Pojemość skokowa: </label> <input class="form-control" placeholder="cm3" type="text"    value="cm3" name="Pojemość_skokowa" required><br><br>

                        <label>Rodzaj paliwa: </label> <select class="form-control" name="Rodzaj_paliwa" required>
                            <option>Benzyna</option>
                            <option>Diesel</option>
                            <option>Benzyna+LPG</option>
                        </select><br><br>

                        <label>Moc: </label> <input class="form-control" type="text"  name="Moc" required><br><br>

                        <label>Skrzynia biegów: </label> <select class="form-control" name="Skrzynia_biegów" required>
                            <option>Manualna</option>
                            <option>Automatyczna</option>
                        </select><br><br>

                        <label>Napęd: </label> <select class="form-control" name="Napęd" required>
                            <option>Na przednie koła</option>
                            <option>Na tylne koła</option>
                            <option>4x4</option>
                        
                        </select><br><br>

                        <label>Typ nadwozia: </label> <select class="form-control" name="Typ_nadwozia" required>
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
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select><br><br>

                        <label>Liczba miejsc: </label> <select class="form-control" name="Liczba_miejsc" required> 
                            <option>2</option>
                            <option>4</option>
                            <option>5</option>
                            <option>7</option>
                        </select><br><br>

                        <label>Kolor: </label> <input class="form-control" type="text"  name="Kolor" required><br><br>       
                         
                       

                            <p><button class="btn btn-primary">Zatwierdź</button></p>
                    </form>

            
                   
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

@include('footer')
@endsection
