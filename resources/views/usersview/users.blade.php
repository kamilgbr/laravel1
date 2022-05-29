@extends('layouts.app')
<title>Użytkownicy</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  <h4>Zarządzanie użytkownikami</h4></div><br>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                  
                   
                   {{-- {{$id = Auth::id();}} --}}
          
                  @if( Auth::id() == "61e847088432000081003d12")
                    
                    
                    <input hidden value="{{$licznik = 1;}}">

                    <br>
                
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imię</th>
                            <th scope="col">Nazwisko</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Rola</th>
                          </tr>
                        </thead>
                        @foreach($users as $user)
                        <input hidden {{$user['_id']}}> 
                        @if($user['role'] == 0)
                        <input hidden {{$user['role'] = 'Użytkownik';}}>
                        @endif    
                        @if($user['role'] == 1)
                        <input hidden {{$user['role'] = 'Administrator';}}> 
                        @endif 

                         <tbody>
                            <tr>
                                <th scope="col">{{$licznik}}</th>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['lastname']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['role']}}</td>
                                <td> <a hidden> {{$user['_id']}}</a><a class="btn btn-warning btn-sm" href="{{route('edituser.form' , $user->_id)}}" >Aktualizuj</a></td>
                                @if($user['role'] == 'Użytkownik')
                                <td> <a hidden> {{$user['_id']}}</a><a onclick="return confirm('Jesteś pewien, że chcesz usunąć tego użytkownika?');" class="btn btn-danger btn-sm" href="{{route('usersview.delete' , $user->_id)}}" >Usuń</a>
                                @endif
                                <td><td>
                              

                            </tr>
                      
                        <input hidden value="{{$licznik++}}">
                          </tbody>
                        @endforeach
                        @else

                        <script type="text/javascript">
                            window.location.href = "http://localhost:8000/login";//here double curly bracket
                        </script>
    
                     @endif
                       
                      </table>
              
                </div>
              <div>   
            </div>
        </div>
    </div>
</div>
</div>

<br><br>
{{-- @include('footer') --}}
@endsection
