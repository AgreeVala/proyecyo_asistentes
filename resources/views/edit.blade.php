@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Habilidad</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal"  action="/actualizando/{{$Habilidad->id}}" method="post" accept-charset="utf-8">	 <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                        <div class="col-md-6">
                            <label>Editar Habilidad:</label>
                            <input class="form-control" type="text" value="{{$Habilidad->habilidad}}" name="habilidad"><br>
                             <input class="btn btn-primary" type="submit" name="" value="Editar">
                        </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
