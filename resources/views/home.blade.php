@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          
            <div class="card">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button style="background-color: white;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button style="background-color: white;"  type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
             
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img height="420" src="https://static.wirtualnemedia.pl/media/top/otoMoto0spot-nr1_655.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><a  style="color: white; text-decoration: none; border: 1px solid white;"  href="https://www.otomoto.pl/"><b>www.OTOMOTO.pl</b></a></h5>
                      <p style="color: white;">Zajrzyj na OTOMOTO.PL po więcej ofert.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img height="420" src="https://d-mf.ppstatic.pl/art/cn/pu/3052j34kc8gowwkwg0sw0/bmw-3.1200.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><a  style="color: white; text-decoration: none;  border: 1px solid white;"  href="https://www.autocentrum.pl/"><b>www.AUTOCENTRUM.pl</b></a></h5>
                      <p>  <p style="color: white;">Zajrzyj na AUTOCENTRUM.PL po więcej ofert.</p></p>
                    </div>
                  </div>
                  </div>
               
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button  class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span  class="visually-hidden">Next</span>
                </button>
              </div>
            <br>
              
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
                            Alfa_Romeo: ["159", "A2", "A3", "A4", "A5", "A6", "A7", "A8","Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "R8", "TT", "100", "80"],
                            Audi: ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8","Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "R8", "TT", "100", "80"],
                            BMW: ["Seria 1", "Seria 2", "Seria 3", "Seria 4", "Seria 5", "Seria 6", "Seria 7", "Seria 8", "X1", "X2", "X3", "X4", "X5", "X6", "X7", "Z4", "Z3", "Z8", "i8"],
                            Fiat: ["500","500L", "500X", "Bravo", "Cinquecento", "Doblo", "Ducato", "Fiorino", "Freemont", "Grande Punto", "Panda", "Punto", "Punto Evo", "Tipo", "Qubo", "Sedici", "Seicento",],
                            Volkswagen: ["Caddy", "Golf", "Golf Plus", "Jetta", "Passat", "Polo", "Sharan", "Tiguan", "Touran", "Transporter"],
                            Opel: ["Astra", "Agila", "Combo", "Corsa", "Insignia", "Zafira", "Vivaro", "Meriva"],
                            Mercedes: ["Klasa A", "Klasa B", "Klasa C", "CLK", "Klasa E", "Klasa S"],
                            Volvo: ["C30","C40", "C70", "S40", "S60", "S70", "S80", "V40", "V50", "V60", "V70", "V90", "XC40", "XC60", "XC70", "XC90"]
                      
                           }
                
                        function makeSubmenu(value) {
                            if (value.length == 0) document.getElementById("selectFirstCategory").innerHTML = "<option></option>";
                            else {
                                var cars = "";
                                for (categoryId in subcategory[value]) {
                                  cars += "<option>" + subcategory[value][categoryId] + "</option>";
                                }
                                document.getElementById("selectFirstCategory").innerHTML = cars;
                            }
                        }
                
                        function displaySelected() {
                            var country = document.getElementById("category").value;
                            var city = document.getElementById("selectFirstCategory").value;
                            alert(country + "\n" + city);
                        }
                
                        function resetSelection() {
                            document.getElementById("category").selectedIndex = 0;
                            document.getElementById("selectFirstCategory").selectedIndex = 0;
                        }

                        function showPower_FROM(val) {
                         
                         var slider = document.getElementById("myRange");
                         var output = document.getElementById("demo");
                         output.innerHTML = slider.value;
                         
                         slider.oninput = function() {
                           output.innerHTML = val;
                         }
                       }

                        function showPower_TO(val) {
                         
                         var slider = document.getElementById("myRange1");
                         var output = document.getElementById("demo1");
                         output.innerHTML = slider.value;
                         
                         slider.oninput = function() {
                           output.innerHTML = val;
                         }
                       }

                        function showCapacity_TO(val) {
                        
                          var slider = document.getElementById("myCapacity2");
                          var output = document.getElementById("capacityoutput2");
                          output.innerHTML = slider.value;
                          
                          slider.oninput = function() {
                          output.innerHTML = val;
                          }
                        }

                        function showCapacity_FROM(val) {

                          var slider = document.getElementById("myCapacity");
                          var output = document.getElementById("capacityoutput");
                          output.innerHTML = slider.value;

                          slider.oninput = function() {
                          output.innerHTML = val;
                          }
                        }

                        </script>
                    
                        @csrf
                        <div class="card-deck">
                          <div class="card">
                            <div class="card-body">

                              <h5><b>Wybierz markę oraz model: </b></h5>
                                  <br>

                                <select class="form-control" name="q_marka" value="" id="category" size="1" onchange="makeSubmenu(this.value)">
                                    <option value="" disabled selected>Marka</option>
                                    <option>Audi</option>
                                    <option>BMW</option>
                                    <option>Fiat</option>
                                    <option>Volkswagen</option>
                                    <option>Opel</option>
                                    <option>Ford</option>
                                    <option>Mercedes</option>
                                    <option>Volvo</option>
                                    <option disabled>__________________</option>
                                    <option>Renault</option>
                                    <option>Toyota</option>
                                    <option>Dacia</option>
                                    <option>Clothes</option>
                                    <option>Honda</option>
                                    <option>Jaguar</option>
                                    <option>Dacia</option>
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
                          
                                </select>
                                  <br>

                                <select class="form-control" name="q_model" value="" id="selectFirstCategory" size="1">
                                  
                                  <option value="" disabled selected>Model</option>
                                  <option></option>
                                </select>

                            </div>
                          </div>
                        </div><br>
                   
                        <div class="card-deck">
                          <div class="card">
                            <div class="card-body">
                              <h5><b>Rok produkcji: </b></h5>
                              <select   name="q_rok_produkcji_od" class="form-select" aria-label="Default select example">
                                      <option value="" disabled selected>Od</option>
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
                            
                              <select name="q_rok_produkcji_do" class="form-select" aria-label="Default select example">
                                   <option value="" disabled selected>Do</option>
                                
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
                                    <input  require type="radio" id="benzyna" name="q_paliwo"  value="Benzyna"> <label>Benzyna</label><br>
                                    <input type="radio"   id="benzyna_lpg"  name="q_paliwo"  value="Benzyna+LPG"> <label>Benzyna+LPG</label><br>
                                    <input type="radio"  id="diesel"  name="q_paliwo"  value="Diesel">  <label>Diesel</label><br>
                                    <input type="radio"  id="hybryda" name="q_paliwo"  value="Hybryda">  <label>Hybryda</label><br>
                            </div>
                          </div>
                        </div>
                        
                            <br>

                        <div class="card-deck">
                          <div class="card">
                             <div class="card-body">
                              <h5><b>Wybierz zakres mocy:</b></h5>
                        
                                <div>
                                    <input type="range" onchange="showPower_FROM(this.value);" value="0" name="q_moc_od" class="form-range" min="0" max="800" id="myRange">
                                </div>

                                  <p>Moc od: <b><span id="demo"></span> KM</b></p>

                                  <div>
                                    <input type="range" onchange="showPower_TO(this.value);" value="0" name="q_moc_do" class="form-range" min="0" max="800" id="myRange1">
                                  </div>

                                  <p>Moc do: <b><span id="demo1"></span> KM</b></p>
                                    
                            </div>
                          </div>
                        </div>
                    
                    
                        <br>
                      
                     

                      <div class="card-deck">
                        <div class="card">
                          <div class="card-body">
                      <h5><b>Pojemność silnika:</b></h5>

                      <div>
                      <input type="range" onchange="showCapacity_FROM(this.value);" value="0" name="q_pojemność_od" class="form-range" min="0" max="7000" id="myCapacity"></div>
                      <p>Pojemność od: <b><span id="capacityoutput"></span> cm3</b></p>

                      <br>

                      <div>
                        <input type="range" onchange="showCapacity_TO(this.value);" value="0" name="q_pojemność_do" class="form-range" min="0" max="7000" id="myCapacity2"></div>
                        <p>Pojemność do: <b><span id="capacityoutput2"></span> cm3</b></p>
                          </div></div></div><br>



                        <div class="card-deck">
                          <div class="card">
                            <div class="card-body">
                              <h5><b>Rodzaj skrzyni biegów:</b></h5>
                              <input type="radio"    id="automatyczna"          name="q_skrzynia"  value="Automatyczna">         <label>Automatyczna</label><br>
                              <input type="radio"    id="manualna"             name="q_skrzynia"  value="Manualna">             <label>Manualna</label><br>
                         </div>
                        </div>
                      </div>
                      <br>

                      <div class="card-deck">
                        <div class="card">
                          <div class="card-body">
                        <h5><b>Typ nadwozia: </b></h5>
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
                        
                            <p> <div class="d-flex justify-content-center"> <button name="find" class="btn btn-primary">Zatwierdź</button><button type="reset" class="btn btn-primary">Wyczyść</button></div></p>
                    </form><br>

                    <div class="d-none"> {{$licznik = 0;}}  </div>   
                  
                </div>
              <div>   
            </div>
        </div>
    </div>
    
</div>
</div>
<br><br>
#@include('footer')
@endsection
