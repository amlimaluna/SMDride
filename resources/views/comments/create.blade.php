<form method="post" action="{{ route('rides.comments.store', $ride->id) }}">
    {{ csrf_field() }}

    <div class="input-group">
    
        <div class="form-group">
            <input type="text" class="form-control" name="text" placeholder="Demonstre seu interesse nessa carona"/>
            @include('partials.input-errors', ['input' => 'text'])
        </div>
		
		
		    <div class="input-group-btn">
            <button type="submit" class="btn btn-info" style="background: #FFA500">Comentar</button>
        </div>
    </div>

</form>