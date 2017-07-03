@extends('layouts.app')

@section('content')

<head>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

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
	margin-bottom: 30px;
	text-align: center;

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

   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h1> Embarque nessa carona </h1>
				<!-- informação com mouse em cima --- classes date-tooltip -->
			
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
				<p> <span data-tooltip="Comunique-se com o motorista da carona através de comentários e ele decidirá quem dará carona! Matenha o bom senso ☺" style="font-size: 16px !important; font-family: 'Raleway', cursive"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i></span></p>
                    <div class="caption" style="line-height: normal !important">
                        <i class="fa fa-map-marker" aria-hidden="true" style="color:#674ea7; padding: 15px;"></i> <p id="titulo" >Destino: {{ $ride->address }}

                    </div>
                    <br><br>
				</div>
               
                    <div class="portlet-body">
                        <p><b>Motorista:</b> {{ $ride->driver->name }}</p>
                        <p><b>Data de Partida:</b> {{ $ride->date->format('d/m/Y H:i') }}</p>
                        <p><b>Passageiros:</b> {{ $ride->passengers->pluck('name')->implode(', ') }}</p>
					</div>
					<div class="socomments">
						      <br> @include('comments.create', $ride) 
						<br>
					
                        @include('comments.index', [ 'comments' => $ride->comments()->orderBy('created_at', 'desc')->get() ]) 			
							
                    </div>
					</div>

                 </div>
            </div>

        </div>

@endsection