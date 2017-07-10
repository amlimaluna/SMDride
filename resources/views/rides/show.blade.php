@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h1 style="font-family: 'Courgette', cursive; font-size:60px; letter-spacing: -3px;"> Embarque nessa carona </h1>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}" style="margin-bottom: 10px;"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <p>
                <span data-tooltip="Comunique-se com o motorista da carona através de comentários e ele decidirá quem dará carona! Matenha o bom senso ☺"
                      style="font-size: 16px !important; font-family: 'Raleway', cursive"><i
                            class="fa fa-info-circle fa-lg" aria-hidden="true"></i></span></p>
                    <div class="caption" style="line-height: normal !important; color:#674ea7; font-size: 20px; width:80%; font-family: 'Raleway', sans-serif;">
                        <i class="fa fa-map-marker" aria-hidden="true" style=" padding: 15px;"></i>
                        <p id="titulo"><h3>Destino: {{ $ride->address }}</h3>

                    </div>
                    <br><br>
                </div>

                <div class="portlet-body" style="background-color:#F5F5DC">
                    <p><b>Motorista:</b> {{ $ride->driver->name }}</p>
                    <p><b>Data de Partida:</b> {{ $ride->date->format('d/m/Y H:i') }}</p>
                    <p><b>Passageiros:</b> {{ $ride->passengers->pluck('name')->implode(', ') }}</p>
                </div>
                <div class="comments">
                    <br> @include('comments.create', $ride)
                    <br>

                    @include('comments.index', [ 'comments' => $ride->comments()->orderBy('created_at', 'desc')->get() ])

                </div>
            </div>

        </div>
    </div>

@endsection