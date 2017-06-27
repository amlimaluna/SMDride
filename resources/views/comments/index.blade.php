<h5 style="padding-top: 20px; display: block">Últimos comentários ({{ $comments->count() }})</h5>

@foreach ($comments->take(5) as $comment)
    <div class="comment">
        <h4 class="comment-heading">
            {{ $comment->user->name }}
            <span>às {{ $comment->created_at->format('d/m/Y H:i') }}</span>
        </h4>
        <p>
            {{ $comment->text }}
        </p>
    </div>
@endforeach

<small style="padding-top: 20px; display: block">Exibindo {{ $comments->take(5)->count() }} de {{ $comments->count() }}</small>