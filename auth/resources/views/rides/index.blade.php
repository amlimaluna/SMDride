@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Caronas:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rides.create') }}"> Oferecer carona:</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>no.</th>
		    <th>Local:</th>
			<th>Carro:</th>
			<th>Data e hora:</th>
        </tr>
    @foreach ($rides as $key => $ride)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $rides->address}}</td>
        <td>{{ $rides->car}}</td>
		<td>{{ $rides->date}}</td>
		
        <td>
            <a class="btn btn-info" href="{{ route('rides.show',$rides->id) }}">Mostrar</a>
            <a class="btn btn-primary" href="{{ route('rides.edit',$rides->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['rides.destroy', $rides->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $rides->render() !!}

@endsection