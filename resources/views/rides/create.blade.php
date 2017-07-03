@extends('layouts.app')

@section('content')
<head>
<style>
body{
	width:80%;
	
}




.caption{
	width:100%;
	
}

#titulo {
	width:100%;
	font-family: 'Raleway', sans-serif;
}
.col-lg-12{
	margin: 0px auto;
}

</style>
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="{{ asset('/images/favicon.png') }}" rel="shortcut icon">
</head>

<body style="width: 86%;  margin: 0px auto !important;">
<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2 style="font-family: 'Courgette', cursive; font-size: 60px; text-align: center !important;">Ofereça sua Carona</h2>
            </div> <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}" style="margin-bottom: 10px;"> Voltar</a>
<br>
            </div>
        </div>
    </div>



<div class="portlet box grey">
        <div class="portlet-title">
		<p> <span data-tooltip="Preencha os dados de maneira precisa, informando se está de chegada ou de saída do bloco." style="font-size: 16px !important; font-family: 'Raleway', cursive"><i class="fa fa-info-circle fa-lg" aria-hidden="true" style="color: #000"></i></span></p>
            <div class="caption" style="font-family: 'Courgette', cursive; font-size:25px; color: #674ea7; font-weight: 600">
                <i class="fa fa-id-card" aria-hidden="true" style="color: #674ea7"></i><p id="titulo">Forneça mais detalhes da sua viagem: </p>
            </div>
        </div>
		
        <div class="portlet-body">

            <form method="post" action="{{ route('rides.store') }}">
                {{ csrf_field() }}


                <div class="form-group">
                    <strong>Qual seu destino?</strong>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Insira seu destino (chegada ou saída do bloco)"/>
                    @include('partials.input-errors', ['input' => 'address'])
                </div>
				

                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <div class="form-group">
                            <strong>Placa do Carro:</strong>
                            <input type="text" class="form-control" name="car" value="{{old('car')}}" style="text-transform: uppercase" placeholder="Ex:AAA-0000" />
                            @include('partials.input-errors', ['input' => 'car'])
                        </div>
                    </div>

                    <div class="col-md-10 col-xs-12">
                        <div class="form-group">
                            <strong>Data e hora:</strong>
                            <input type="text" class="form-control" name="date" value="{{old('date')}}" placeholder="Atenção no horário para facilitar seu encontro"/>
                            @include('partials.input-errors', ['input' => 'date'])
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary purple" style="background: #FFA500">Oferecer</button>

            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('input[name=date]').datetimepicker({locale: 'pt-br'});
        });
    </script>

	</body>
@endsection