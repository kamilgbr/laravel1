@extends('layouts.app')
<title>Użytkownicy</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Edytuj dane użytkownika</h4></div><br>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
            
            
                    <a hidden> {{$id = Auth::id();}}</a>
           
                   

                    @if($id == "61e847088432000081003d12")
                    
                                    
                                    @if($data)
                                      <form action="{{route('edituser.update' , $data->_id)}}" method="POST"> 
                                       @csrf
                                       @method('PUT')
                                      
                                      
                                               
                                        <b>Imię: </b><input name="name" class="form-control" value="{{$data->name}}"><br>
                                            <b> Nazwisko:</b> <input name="lastname" class="form-control" value="{{$data->lastname}}"><br>
                                                <b> Rola: </b> <input name="role" class="form-control" placeholder="0-użytkownik, 1-administrator"value="{{$data->role}}">
                                                <br>
                                            <button class="btn btn-primary">Zapisz</button>
                                            </form>
                                    
                                     @endif
      
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
