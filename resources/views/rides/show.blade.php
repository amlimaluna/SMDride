@extends('layouts.app')
 
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Embarque nessa carona:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">

       <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Destino: {{ $ride->address }}

                    </div>
					<br><br>
                    <div class="portlet-body">
                        <p><b>Motorista:</b> {{ $ride->driver->name }}</p>
                        <p><b>Data de Partida:</b> {{ $ride->date->format('d/m/Y H:i') }}</p>
                        <p><b>Passageiros:</b> {{ $ride->passengers->pluck('name')->implode(', ') }}</p>

                        @include('comments.index', ['comments' => $ride->comments ])
                    </div>
					
				   <form method="post" action="{{ route('comments.store') }}" >

                   {{ csrf_field() }}

                <div class="form-group">
					<input type="text" class="form-control" name="text"/>
					
				
                    @include('partials.input-errors', ['input' => 'text'])
                </div>
				
				<button type="submit" class="btn btn-primary">Comentar</button>
				
				</form>
					
                </div>
            </div>

    </div>

@endsection