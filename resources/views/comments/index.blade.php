@if ($comments->count() > 1)
<h5 style="padding-top: 20px; display: block">Últimos {{ $comments->count() }} comentários</h5>
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
    </div>
@endforeach
