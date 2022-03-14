@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Podaj swoje preferencje co do samochodu</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form action="/home/index" method="post">
                      <script type="text/javascript">
                
                       
                        var subcategory = {
                            Audi: ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8","Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "R8", "TT", "100", "80"],
                            BMW: ["Seria 1", "Seria 2", "Seria 3", "Seria 4", "Seria 5", "Seria 6", "Seria 7", "Seria 8", "X1", "X2", "X3", "X4", "X5", "X6", "X7", "Z4", "Z3", "Z8", "i8"],
                            Volkswagen: ["Caddy", "Golf", "Golf Plus", "Jetta", "Passat", "Polo", "Sharan", "Tiguan", "Touran", "Transporter"],
                            Opel: ["Astra", "Agila", "Combo", "Corsa", "Insignia", "Zafira", "Vivaro", "Meriva"],
                            Mercedes: ["Klasa E", "Agila", "Combo", "Corsa", "Insignia", "Zafira", "Vivaro", "Meriva"],
                        }
                
                        function makeSubmenu(value) {
                            if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
                            else {
                                var citiesOptions = "";
                                for (categoryId in subcategory[value]) {
                                    citiesOptions += "<option>" + subcategory[value][categoryId] + "</option>";
                                }
                                document.getElementById("categorySelect").innerHTML = citiesOptions;
                            }
                        }
                
                        function displaySelected() {
                            var country = document.getElementById("category").value;
                            var city = document.getElementById("categorySelect").value;
                            alert(country + "\n" + city);
                        }
                
                        function resetSelection() {
                            document.getElementById("category").selectedIndex = 0;
                            document.getElementById("categorySelect").selectedIndex = 0;
                        }
                    </script>
                    
                        @csrf
                        <div class="card-deck">
                          <div class="card">
                            <div class="card-body">
                              <h5><b>Wybierz markę oraz model: </b></h5><br>
                        <select class="form-control" name="q_marka" value="" id="category" size="1" onchange="makeSubmenu(this.value)">
                          <option value="" disabled selected>Wybierz markę</option>
                          <option>Audi</option>
                          <option>BMW</option>
                          <option>Volkswagen</option>
                          <option>Opel</option>
                          <option>Ford</option>
                          <option>Mercedes</option>
                          <option disabled>__________________</option>
                          <option>Renault</option>
                          <option>Toyota</option>
                          <option>Alfa Romeo</option>
                          <option>Dacia</option>
                          <option>Fiat</option>
                          <option>Clothes</option>
                          <option>Honda</option>
                          <option>Jaguar</option>
                          <option>Alfa Romeo</option>
                          <option>Dacia</option>
                          <option>Fiat</option>
                          <option>Jeep</option>
                          <option>Kia</option>
                          <option>Lancia</option>
                          <option>Land Rover</option>
                          <option>Lexus</option>
                          <option>Mazda</option>
                          <option>Mitsubishi</option>
                          <option>Nissan</option>
                          <option>Peugeot</option>
                          <option>Saab</option>
                          <option>Seat</option>
                          <option>Porshe</option>
                          <option>Smart</option>
                          <option>Suzuki</option>
                          <option>Subaru</option>
                          <option>Toyota</option>
                          
                          </select><br>
                              <select class="form-control" name="q_model" value="" id="categorySelect" size="1">
                          <option value="" disabled selected>Wybierz model</option>
                          <option></option>
                          </select>
                            </div></div></div><br>
                              
                        {{-- <div class="card-deck">
                          <div class="card">
                            <div class="card-body">
                        <h5><b>Czy któraś marka samochodu przemawia do Ciebie najbardziej?</b></h5><br>
              
                        <div class="form-floating">
                          <input class="form-control" placeholder="Leave a comment here" id="marka" name="q_marka" value="">
                          <label for="floatingTextarea">Wpisz markę samochodu (to pole jest opcjonalne)</label>
                        </div><br>
                        <span style="color: red;">Uwaga. </span> Podaj poprawną i oficjalną nazwę marki. Np. Mercedes-Benz, MINI, BMW itp.
                            </div></div></div><br> --}}
                        
                            
                            <div class="card-deck">
                              <div class="card">
                                <div class="card-body">
                              <h5><b>Rok produkcji: </b></h5><br>
                              Od: <select   name="q_rok_produkcji_od" class="form-select" aria-label="Default select example">
                                <option value="" disabled selected>Wybierz</option>
                                
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>

                          
                              </select> <br>
                            
                              Do: <select name="q_rok_produkcji_do" class="form-select" aria-label="Default select example">
                                <option value="" disabled selected>Wybierz</option>
                                
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                          
                              </select></div></div></div><br>

                        

                        <div class="card-deck">
                          <div class="card">
                            <div class="card-body">
                        <h5><b>Wybierz rodzaj paliwa:</b></h5>
                        <input  require type="radio"    id="benzyna"          name="q_paliwo"  value="Benzyna">        <label>Benzyna</label><br>
                        <input type="radio"    id="diesel"             name="q_paliwo"  value="Benzyna+LPG">             <label>Benzyna+LPG</label><br>
                        <input type="radio"    id="diesel"             name="q_paliwo"  value="Diesel">             <label>Diesel</label><br>

                            </div></div></div><br>

                            <div class="card-deck">
                              <div class="card">
                                <div class="card-body">
                        <h5><b>Minimalna moc samochodu:</b></h5>
                        
                      <div>Zakres: 0 - 800 KM
                        <input type="range" onchange="showValue(this.value);" value="" name="q_moc" class="form-range" min="0" max="800" id="myRange"></div>
                      <p>Moc: <b><span id="demo"></span> KM</b> lub większa</p>
                                </div></div></div><br>
                      
                        
                        <script>
                       function showValue(val) {
                         
                        var slider = document.getElementById("myRange");
                        var output = document.getElementById("demo");
                        output.innerHTML = slider.value;
                        
                        slider.oninput = function() {
                          output.innerHTML = val;
                        }
                      }
                        </script>

<div class="card-deck">
  <div class="card">
    <div class="card-body">
<h5><b>Pojemność silnika:</b></h5>

<div>Zakres: 700cm3 - 7000cm3
<input type="range" onchange="showPower(this.value);" value="0" name="q_pojemność" class="form-range" min="0" max="7000" id="myPower"></div>
<p>Pojemność: <b><span id="demo1"></span> cm3</b> lub większa</p>
    </div></div></div><br>


<script>
function showPower(val) {

var slider = document.getElementById("myPower");
var output = document.getElementById("demo1");
output.innerHTML = slider.value;

slider.oninput = function() {
output.innerHTML = val;
}
}
</script>


                        

                         {{-- <input class="border-0" type="range" onchange="updateTextInput(this.value);" min="0" max="800" name="q_moc" value=""/>
                          <span class="font-weight-bold indigo-text ml-2 mt-1">800</span>   <input type="text" id="textInput" value="" > --}}

                      
                        <div class="card-deck">
                          <div class="card">
                            <div class="card-body">
                              <h5><b>Skrzynia manulana czy automatyczna?</b></h5>
                              <input type="radio"    id="automatyczna"          name="q_skrzynia"  value="Automatyczna">         <label>Automatyczna</label><br>
                              <input type="radio"    id="manualna"             name="q_skrzynia"  value="Manualna">             <label>Manualna</label><br>
                         </div>
                        </div>
                      </div>
                      <br>

                      <div class="card-deck">
                        <div class="card">
                          <div class="card-body">
                        <h5><b>Wybierz rodzaj nadwozia: </b></h5><br>
                        <select name="q_typ_nadwozia" class="form-select" aria-label="Default select example">
                          <option value="" disabled selected>Wybierz</option>
                          <option value="Sedan">Sedan</option>
                          <option value="Kombi">Kombi</option>
                          <option value="Coupe">Coupe</option>
                          <option value="Kabriolet">Kabriolet</option>
                          <option value="SUV">SUV</option>
                          <option value="Kompakt">Kompakt</option>
                          <option value="Auta małe">Auta małe</option>
                          <option value="Auta miejskie">Auta miejskie</option>
                          <option value="Minivan">Minivan</option>
                    
                        </select> </div></div></div><br>
                        
                            <p> <div class="d-flex justify-content-center"><button name="find" class="btn btn-primary">Zatwierdź</button>  <button type="reset" class="btn btn-primary">Wyczyść</button></p></div>
                    </form><br>

                    <div class="d-none"> {{$licznik = 0;}}  </div>   
              
                  
                    
                   
                    
    
                </div>
              <div>   
            </div>
        </div>
    </div>
</div>
<br><br>

@include('footer')
@endsection
