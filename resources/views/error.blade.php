@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">El Usuario no esta Activo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <label>No estas Activo como usuario por lo tanto no puedes realizar ninguna modificacion</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection