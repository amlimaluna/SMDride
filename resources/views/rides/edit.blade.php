@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editando Carona</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}"> Back</a>
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

    {!! Form::model($rides, ['method' => 'PATCH','route' => ['rides.update', $rides->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car:</strong>
                {!! Form::textarea('car', null, array('placeholder' => 'Car','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

		
		 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {!! Form::textarea('date', null, array('placeholder' => 'Date','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
		
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection