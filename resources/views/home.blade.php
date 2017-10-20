@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar datos del Usuario</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal"  action="/actualizar/{{ Auth::user()->id }}" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
                        <label>Nombre del Usuario:</label>
                       <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" placeholder=""><br>
                        <label>Ocupacion:</label>
                       <input class="form-control" type="text" name="ocupacion" value="{{ Auth::user()->ocupacion }}" placeholder=""><br>
                        <label>Edad:</label>
                       <input class="form-control" type="text" name="edad" value="{{ Auth::user()->edad }}" placeholder=""><br>
                       <input class="btn btn-primary" type="submit" name="" value="Actualizar">
                        </div>

                       </div>
                   </form>
                    <form class="form-horizontal"  action="/Crear" method="post" accept-charset="utf-8">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                        <div class="col-md-6">
                            <label>Agregar Habilidad:</label>
                            <input class="form-control" type="text" name="habilidad"><br>
                             <input class="btn btn-primary" type="submit" name="" value="Agregar">
                        </div>
                        </div>
                    </form>


         <br><br><table class="table table-bordered">
        
        <thead>
            <tr>
                <th>Habilidad</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($Habilidades as $Habilidad)
            <tr>
                
                <td><center>{{ $Habilidad->habilidad }}</center></td>
                <td>
                    
                    <form action="delete/{{$Habilidad->id}}" method="POST" accept-charset="utf-8">
                         
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" class="btn btn-danger" value="Borrar" >
                        
                    </form>

                    <form action="update/{{$Habilidad->id}}" method="POST" accept-charset="utf-8">     
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" class="btn btn-warning" value="Editar" >
                    </form>
                </td>


                
            </tr>
            @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
