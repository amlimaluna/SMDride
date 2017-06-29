@extends('layouts.app')
 
@section('content')
<head>
	<link href="{{ asset('/images/favicon.png') }}" rel="shortcut icon">
    </head>
	<div class="page-title text-center" style="margin-bottom: 30px">
        <h1>
            Mural de Caronas <br/>
            <small>Escolha pra onde você vai</small>
        </h1>

        <a href="{{ route('rides.create') }}" class="btn blue">
            <i class="icon-pencil"></i>
            Agendar Carona
        </a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissable" style="margin-left:0">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @lang(session()->get('success'))
        </div>
    @endif

    <div class="row">

        @foreach ($rides as $ride)
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Destino: {{ $ride->address }}
                        </div>
                        <div class="actions">
                          
						<a class="btn btn-info" href="{{ route('rides.show',$ride->id) }}">
						      <i class="fa fa-share icon-black"></i> Quero ir!
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <p><b>Motorista:</b> {{ $ride->driver->name }}</p>
                        <p><b>Data de Partida:</b> {{ $ride->date->format('d/m/Y H:i') }}</p>
                        <p><b>Passageiros:</b> {{ $ride->passengers->pluck('name')->implode(', ') }}</p>

                        @include('comments.index', ['comments' => $ride->comments()->orderBy('created_at', 'desc')->take(3)->get()])
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    {{ $rides->links() }}

@endsection