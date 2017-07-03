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
	margin-bottom: 30px;

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
			@if(Auth::user()->id==$ride->user_id)
	
<form method="post" action=" action {{ ('RidesController@addPassenger/$ride->id') }}">	
	 {{ csrf_field() }}
	 <a class="btn btn-info" name="passengers" type="submit" style="background-color:#FFA500">
				<i class="fa fa-thumbs-o-up">  </i> Tornar passageiro </a>
	  <input type="hidden" name="user_id" value="$user->id" >

		
		 </form>

		
			@endif
        </p>
		
    </div>
@endforeach
