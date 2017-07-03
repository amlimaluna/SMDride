<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
		<link href="{{ asset('/css/estilodwaylaravel.css') }}" rel="stylesheet">
		<link href="{{ asset('/images/favicon.png') }}" rel="shortcut icon">
		<script src="{{ asset('/js/js.js') }}"></script>

        <title>SMDRide</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

        <!-- Styles -->
		
		
		
    </head>
    <body>
	<div class="blur">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
				<a href="{{ url('/') }}"> <img src = "{{ asset('/images/logorealoficial.png') }}" style= "height: 30px; position: fixed; left: 2%; top: 1%; z-index: 100000;"/> </a>
                <div class="top-right links" id="topis">
					
					<a href="#inicio">Conhecer</a>
                    <a href="#sobre">D'way</a>
                    <a href="#dicas">Dicas</a>
                    <a href="#contato" id="final">Fale conosco</a>
					
                    @if (Auth::check())
                        <a href="{{ url('/rides') }}">Minha Conta</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registrar</a>
                    @endif
					<a href="{{ url('/rides/create') }}" class="hidden" id="login" >Caronar</a>
					
					
                </div>
            @endif
			
            <div class="content">
                <div class="title m-b-md">
                    <img src = "{{ asset('/images/logorealoficial.png') }}" class="logo">
                </div>
				<div class="caronabottom">
					<a href="{{ url('/rides/create')}}"> CARONAR </a>
				</div>
				
					
            </div>
			</div>
	</div>

			
<div class="gradiente">		
<header  id="inicio" style="text-align:center;"><br><br><br>
<img src="{{ asset('/images/favicon.png') }}" height="200px">
<h1> Bem-vindo(a) ao SMDride!</header>
<article class="conteudo" style="text-align:center;">Aqui você se conecta e se transporta!
<br> <br> </article>
<article class="conteudo"> O SMDride nasceu na disciplina de Projeto Integrado I do curso de Sistemas e Mídias Digitais da Universidade Federal do Ceará (UFC). Observando as necessidades e os problemas que os alunos e funcionários do SMD enfrentavam para se locomover, o SMDride traz a solução para você que, diariamente, tem que desbravar a mata, a lama e o sol escaldante da falta de via para o bloco do SMD!
O SMDride conta com um sistema que possibilita o usuário pedir e oferecer caronas, oferecendo a flexibilidade e a comodidade para melhor atender suas necessidades, facilitando a locomoção e conectando toda a comunidade do SMD!
</article>
<header  id="sobre" style="text-align:center;"><br><br><br><br><h1> D'way</header>
<article class="conteudo">
Digital way, ou D'way, é a equipe de alunos em frente à criação do SMDride! A equipe é composta de Amanda Lima, como programadora, e Gustavo Moura, como designer, que, apesar de todos percalços enfrentados, trabalharam duro para conseguir resultados satisfatórios, contando, felizmente, com o apoio dos professores e amigos dispostos, por isso D'way é muito mais que apenas dois integrantes.
</article> <br><br>
<img src="{{ asset('/images/sobre.png') }}" class="nos"> <br>
<header  id="dicas" style="text-align:center;"><br><br><br><h1> Dicas de bom uso</header>
<article class="conteudo"> <b> • Evite situações desconfortáveis.</b><br><br>

Para que as caronas ocorram de forma confortável para ambas as partes a comunicação é fundamental. O SMDride possibilita que os usuários combinem, mas organização nunca é demais. Sempre que houver a possibilidade de cancelamentos e atrasos, avise o parceiro de carona. Afinal, ninguém gosta de esperar ou ficar na mão!
<br><br>
<b> • Bom senso é sempre bom!</b> <br><br>
Procure ser gentil e educado. Evite sujar o carro do colega. Em casos de mudanças de plano durante o trajeto, lembre-se de avisá-lo com antecedência. Nada de comer, beber ou fumar no carro!
<br><br>
<b> • Segurança acima de tudo<br><br>
</b>
Sempre dirija dentro das leis de trânsito. Faça o uso do cinto de segurança e jamais dirija se não tiver condições. Lembre-se, o SMDride procura solucionar problemas dos usuários e não multiplicá-los! </article> <br><br><br><br>

<header  id="contato" style="text-align:center;"><h1><br><br> Fale conosco</header>

<article class="conteudo" style="margin:0 38%"><!-- Do not change the code! -->
<a id="foxyform_embed_link_177797" href="http://br.foxyform.com/">foxyform</a>
<script type="text/javascript" style="position:center">
(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://br.foxyform.com/js.php?id=177797&sec_hash=cf4bbce99b8&width=350px";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
<!-- Do not change the code! -->
</article>
</div>			
<footer> <a href="#topis"><i class="fa fa-arrow-up" style="color: #FFF"></i></a> SMDride <a href="#topis"><i class="fa fa-arrow-up" style="color: #FFF"></i> </a></footer>
</body>
</html>