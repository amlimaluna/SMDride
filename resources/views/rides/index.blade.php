@extends('layouts.app')
 
@section('content')

	<div class="page-title text-center" style="margin-bottom: 30px">

        <h1 style="font-family: 'Courgette', cursive; font-size:60px; letter-spacing: -3px;">Mural de Caronas</h1>
		<br>
        <a href="{{ route('rides.create') }}" class="btn purple" style="background-color:#FFA500; ">
            <i class="fa fa-car"></i>
            Oferecer Carona
        </a>
		<br><br>
		<h4 style="font-family: 'Raleway', sans-serif;">Ou escolha aonde você vai <br><br> <i class="fa fa-arrow-down" style="color: gray"></i> </h4>

    </div>

    @include('partials.success-message')

    <div class="row">

        @foreach ($rides as $ride)
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption"  style="line-height: normal !important; color:#674ea7 !important; font-family: 'Raleway', sans-serif; width:80%">
                            <i class="fa fa-map-marker" aria-hidden="true" style="color:#674ea7; padding: 15px"></i>
                            <p id="#titulo"><h3>Destino: {{ $ride->address }}</h3></p>
                        </div>
                        <div class="actions">
                            <a class="btn btn-info" style="background: #FFA500" href="{{ route('rides.show',$ride->id) }}">
                                <i class="fa fa-comment"></i> Quero ir!

                            </a>
                        </div>
                    </div> 
                    <div class="portlet-body" style="background-color:#F5F5DC">
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