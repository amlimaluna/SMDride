@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Oferecer Carona</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('rides.store') }}"> 
    {!! csrf_field() !!}
	
	
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local:</strong>
     
				<input type="text" class="form-control" name="address"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carro:</strong>
                <input type="text" class="form-control" name="car"/>
            </div>
        </div>

		
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data e hora:</strong>
                <input type="text" class="form-control" name="date"/>
            </div>
        </div>
		
		
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
    </div>

@endsection