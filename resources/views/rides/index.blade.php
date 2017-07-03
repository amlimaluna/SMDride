@extends('layouts.app')
 
@section('content')

	<div class="page-title text-center" style="margin-bottom: 30px">

        <h1>Mural de Caronas</h1>
		<br>
        <a href="{{ route('rides.create') }}" class="btn purple" style="background-color:#FFA500">
            <i class="fa fa-car"></i>
            Oferecer Carona
        </a>
		<br><br>
		<h4>Ou escolha aonde você vai <br><br> <i class="fa fa-arrow-down" style="color: gray"></i> </h4>

    </div>

    @include('partials.success-message')

    <div class="row">

        @foreach ($rides as $ride)
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption"  style="line-height: normal !important">
                            <i class="fa fa-map-marker" aria-hidden="true" style="color:#674ea7; padding: 15px"></i>
                            <h3>Destino: {{ $ride->address }}</h3>
                        </div>
                        <div class="actions">
                            <a class="btn btn-info" style="background: #FFA500" href="{{ route('rides.show',$ride->id) }}">
                                <i class="fa fa-comment"></i> Quero ir!

                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <p><b>Motorista:</b> {{ $ride->driver->name }}</p>
                        <p><b>Data de Partida:</b> {{ $ride->date->format('d/m/Y H:i') }}</p>
                        <p><b>Passageiros:</b> {{ $ride->passengers->pluck('name')->implode(', ') }}</p>
                    </div>
                    <div class="socomments">
                        @include('comments.index', ['comments' => $ride->comments()->orderBy('created_at', 'desc')->take(3)->get()])
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="row">
        <div class="col-md-12">
            {{ $rides->links() }}
        </div>
    </div>

@endsection