@extends('layouts.app')
 
@section('content')
<head>

<link href="{{ asset('/images/favicon.png') }}" rel="shortcut icon">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

<style>
body {

}

.rideslinks {
	width:90%;
	margin:0 6%;
}

.row {
	width:90%;
    margin:0 auto;
}

h1 {
	font-family: 'Courgette', cursive;
	font-size:60px;
}

h4 {
	
	font-family: 'Raleway', sans-serif;
	font-size: 20px;
	font-weight: 300;
}

.caption{
	width:80%;
}

#titulo {
	font-size:25px;
	width:100%;
	font-family: 'Raleway', sans-serif;
	color:#674ea7;
	font-weight: 600;
	padding: 10px;
}

.portlet-body{
	background-color:#F5F5DC;
	padding: 10px 20px;
	font-size: 18px;
	
}

</style>

</head>

<body>
	<div class="page-title text-center" style="margin-bottom: 30px">
        <h1>
            Mural de Caronas <br/>
</h1>        
		
		<br>
        <a href="{{ route('rides.create') }}" class="btn purple" style="background-color:#FFA500">
            <i class="fa fa-car"></i>
            Oferecer Carona
        </a>
		<br><br>
		<h4>Ou escolha aonde você vai <br><br> <i class="fa fa-arrow-down" style="color: gray"></i> </h4>
		

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
                         <div class="caption"  style="line-height: normal !important">
                             <i class="fa fa-map-marker" aria-hidden="true" style="color:#674ea7; padding: 15px"></i> <p id="titulo" >Destino: {{ $ride->address }}
                        </div>
						 </p>
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
	
	<div class="rideslinks">
    {{ $rides->links() }}
	</div>
	
</body>
@endsection