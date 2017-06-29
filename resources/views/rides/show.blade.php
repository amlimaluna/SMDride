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

                        @include('comments.index', [ 'comments' => $ride->comments()->orderBy('created_at', 'desc')->get() ])
                    </div>

                    @include('comments.create', $ride)

                </div>
            </div>

        </div>

@endsection