@if ($comments->count() > 1)
    <h4 style="padding-top: 20px; display: block">Últimos {{ $comments->count() }} comentários:</h4>
    <br>
@endif

@foreach ($comments as $comment)
    <div class="comment">
        <h4 class="comment-heading">
            {{ $comment->user->name }}
            <span>às {{ $comment->created_at->format('d/m/Y H:i') }}</span>
        </h4>
        <p>
            {{ $comment->text }}
        </p>

        @if(Auth::user()->id == $ride->user_id && $comment->user_id != $ride->user_id && !$ride->passengers()->find($comment->user_id))
        <form method="post" action="{{ action('RidesController@addPassenger', $ride->id) }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ $comment->user_id }}">

            <button class="btn btn-info" name="passengers" type="submit" style="background-color:#FFA500">
                <i class="fa fa-thumbs-o-up"></i>
                Tornar passageiro
            </button>
        </form>
        @endif

        @if($ride->passengers()->find($comment->user_id))
            <span class="badge">Passageiro</span>
        @endif

    </div>
@endforeach
