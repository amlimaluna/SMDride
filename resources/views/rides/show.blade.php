@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar carona:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $rides->address }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car:</strong>
                {{ $rides->car }}
            </div>
        </div>
		
		div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $rides->date }}
            </div>
        </div>

    </div>

@endsection