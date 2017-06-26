<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="script.js"></script>

        <title>SMDride</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
			
			html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
				       }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Minha Conta</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registrar</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SMDride
                </div>

					<div class="links">

					
                    <a href="#inicio">Início</a>
                    <a href="#sobre">Sobre</a>
                    <a href="#dicas">Dicas</a>
                    <a href="#contato">Contato</a>
               </div> 
            </div>
			</div>

			
			
<header  id="inicio" style="text-align:center;"><br><br><br><h1> Bem-vindo(a) ao SMDride!</header>
<article class="conteudo" style="text-align:center;">Aqui você se conecta e se transporta!
<br> <br> </article>
<header  id="sobre" style="text-align:center;"><br><br><h1> Sobre:</header>

<article class="conteudo"> O SMDride nasceu na disciplina de Projeto Integrado I do curso de Sistemas e Mídias Digitais da Universidade Federal do Ceará (UFC). Observando as necessidades e os problemas que os alunos e funcionários do SMD enfrentavam para se locomover, o SMDride traz a solução para você que, diariamente, tem que desbravar a mata, a lama e o sol escaldante da falta de via para o bloco do SMD!

O SMDride conta com um sistema que possibilita o usuário pedir e oferecer caronas, oferecendo a flexibilidade e a comodidade para melhor atender suas necessidades, facilitando a locomoção e conectando toda a comunidade do SMD! </article> <br><br>

<header  id="dicas" style="text-align:center;"><br><br><br><h1> Dicas de bom uso:</header>
<article class="conteudo"> <b>- Evite imprevistos.</b><br><br>

Para que as caronas ocorram de forma confortável para ambas as partes a comunicação é fundamental. O SMDride possibilita que os usuários se combinem, mas organização nunca é demais. Sempre que houver a possibilidade de cancelamentos e atrasos, avise o parceiro de carona. Afinal, ninguém gosta de esperar!
<br><br>
<b>- Bom senso é sempre bom!</b> <br><br>

Procure ser gentil e educado. Evite sujar o carro do colega. Em casos de mudanças de plano durante o trajeto, lembre-se de avisá-lo com antecedência. Nada de comer, beber ou fumar no carro!
<br><br>
<b>- Segurança acima de tudo<br><br>
</b>
Sempre dirija dentro das leis de trânsito. Faça o uso do cinto de segurança e jamais dirija se não tiver condições. Lembre-se, o SMDride procura solucionar problemas dos usuários ao invés de multiplicá-los! </article> <br><br><br><br>

<header  id="contato" style="text-align:center;"><h1> <br><br><br> Contato:</header>

<article class="conteudo">BLA BLA BLA
Formulário aqui. </article> <br><br><br><br>
			

</body>
</html>
