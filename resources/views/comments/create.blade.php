<form method="post" action="{{ route('rides.comments.store', $ride->id) }}">
    {{ csrf_field() }}

    <div class="input-group">
        <div class="input-group-btn">
            <button type="submit" class="btn btn-primary">Comentar</button>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="text" placeholder="Digite seu comentário"/>
            @include('partials.input-errors', ['input' => 'text'])
        </div>
    </div>

</form>