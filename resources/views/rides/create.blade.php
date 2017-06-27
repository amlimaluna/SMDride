@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agendar Carona</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rides.index') }}"> Voltar</a>
            </div>
        </div>
    </div>



    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Agendar Carona
            </div>
        </div>
        <div class="portlet-body">

            <form method="post" action="{{ route('rides.store') }}">
                {{ csrf_field() }}


                <div class="form-group">
                    <strong>Local:</strong>
                    <input type="text" class="form-control" name="address"/>
                    @include('partials.input-errors', ['input' => 'address'])
                </div>


                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <div class="form-group">
                            <strong>Placa do Carro:</strong>
                            <input type="text" class="form-control" name="car" data-mask="AAA-0000" />
                            @include('partials.input-errors', ['input' => 'car'])
                        </div>
                    </div>

                    <div class="col-md-10 col-xs-12">
                        <div class="form-group">
                            <strong>Data e hora:</strong>
                            <input type="text" class="form-control" name="date"/>
                            @include('partials.input-errors', ['input' => 'date'])
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Agendar</button>

            </form>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('input[name=date]').datetimepicker({locale: 'pt-br'});
        });
    </script>
@endsection