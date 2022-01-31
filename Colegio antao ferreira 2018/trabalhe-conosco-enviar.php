<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Colégio Americana</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico" />
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
		
    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Start -->
                        	
                        
               

		<header id="home">
			<!-- Main Menu Start -->
			<div class="main-menu">
            
            
                            
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                     
                    <div class="none" align="right" style="margin-bottom:1%; background-color:#ed3237;">
                    <span style="font-size:15px;"> <strong>contato@colegioamericana.com.br - (19) 3406-3713</strong>&nbsp;<a href="https://www.facebook.com/colegioamericana" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
<a href="https://www.youtube.com/user/ColegioAmericana1" target="_blank"><i class="fa fa-youtube"></i></a>&nbsp;&nbsp;									<a href="https://www.instagram.com/colegioamericana/" target="_blank"><i class="fa fa-instagram"></i></a>
									
								
							</div>
                            
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="Logo" /></a>							
							</div>
							
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.html">Home</a></li>
									<li><a href="index.html">Proposta</a></li>
									<li><a href="index.html">Sobre Nós</a></li>
									<li><a href="index.html">Guaianews</a></li>
									<li><a href="index.html">Eventos</a></li>
									<li><a href="index.html">Acadêmico</a></li>
									<li><a href="index.html">Time</a></li>
									<li><a href="index.html">Depoimentos</a></li>
<!--									<li><a href="index.html">Clube</a></li>-->
									<li><a href="index.html">Fale Conosco</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->
			
			
		</header>
		<!-- Header End -->
		
		
		
		<section class="blog-single">
			<div class="container">
				<div class="row">
                <div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="title">
                        
							<h3>Trabalhe <span>conosco</span></h3>
                            <p>Através deste formulário você pode enviar seu currículo para fazer parte da nossa equipe.</p>
                            </div>
							<h3><?php
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
$civil = $_POST["civil"];
$nascimento = $_POST["nascimento"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$formacao = $_POST["formacao"];
$complementares = $_POST["complementares"];
$objetivo = $_POST["objetivo"];
$empresa = $_POST["empresa"];
$tempo = $_POST["tempo"];
$segmento = $_POST["segmento"];
$remuneracao = $_POST["remuneracao"];
$beneficios = $_POST["beneficios"];
$rotina = $_POST["rotina"];
$observacao = $_POST["observacao"];
// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Trabalhe conosco - Colégio Americana\n\n

FICHA CADASTRAL\n
-------------------------------------\n
Dados pessoais\n
-------------------------------------\n\n
Nome: $nome\n

Sexo: $sexo\n

Idade: $idade\n

Estado civil: $civil\n

Data de nascimento: $nascimento\n

E-mail: $email\n

Telefone: $telefone\n

Endereço: $endereco\n

Bairro: $bairro\n

Cidade: $cidade\n

Estado: $estado\n

CEP: $cep\n\n

-------------------------------------\n
Dados profissionais\n
-------------------------------------\n\n
Formação: $formacao\n

Cursos complementares: $complementares\n\n

Objetivo:\n
----------\n
 $objetivo\n\n

-------------------------------------\n
Experiências profissionais\n
-------------------------------------\n\n
Nome da empresa: $empresa\n

Tempo : $tempo\n

Segmento: $segmento\n

Remuneração: $remuneracao\n

Benefícios: $beneficios\n\n

Breve resumo da rotina:\n
------------------------\n
 $rotina\n\n
 
Observação:\n
------------\n
 $observacao\n\n";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'gabriela.colegioamericana@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'gabriela2019');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Seu currículo foi enviada com sucesso!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER),o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer('adrielly@colegioamericana.com.br', 'adrielly@colegioamericana.com.br', 'Trabalhe conosco', 'Site - Trabalhe conosco', $Vai)) {

	
}
if (!empty($error)) echo $error;
?></h3>
                            </div>
						<div class="single-blog"></div>
						

						
						
						<!-- Pagination 
						<div id="pagination">
							<span class="all">Page 1 of 3</span>
							<span class="current">1</span>
							<a href="#" class="inactive">2</a>
							<a href="#" class="inactive">3</a>
						</div>
						<!-- Pagination -->
						
		  
                   
                   <div class="col-md-2"></div>
					
					<!-- Right Sidebar -->
					<!--<div class="col-md-4">
						<aside class="right-sidebar">
							<div class="widget">
								<form class="form-search">
									<input class="form-control" type="text" placeholder="Search..">
								</form>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Categories</h5>
								<ul class="cat">
									<li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Latest posts</h5>
								<ul class="recent">
									<li>
									<img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" />
									<h6><a href="#">Lorem ipsum dolor sit</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
									<li>
									<a href="#"><img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" /></a>
									<h6><a href="#">Maiorum ponderum eum</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
									<li>
									<a href="#"><img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" /></a>
									<h6><a href="#">Et mei iusto dolorum</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Popular tags</h5>
								<ul class="tags">
									<li><a href="#">Web design</a></li>
									<li><a href="#">Trends</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Internet</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Development</a></li>
								</ul>
							</div>
							</aside>
					</div>-->
				</div>
			</div>
		  <hr><center><a class="btn btn-theme margintop10" href="javascript:history.back()">voltar</a></center></section>
		
		
		
		<!-- footer -->
<div class="clearfix"></div>
		
		<footer>
			<div class="container">
				<div class="row">
				
					<!-- Single Footer 
					<div class="col-sm-4">
						<center><div class="single-footer" style="margin:30px 0">
                     <h4>UNIDADE VILA FORMOSA</h4>
                     
                     <h5>Berçário e Educação Infantil</h5>
                     <hr style="margin:0 10%">
                     <p>Rua Cristóvão Girão, 255 - Vila Formosa<br>
                       CEP.: 03362-030</p>
                     <p>Tel.: 2674-3296</p>
						</div></center>
					</div>
					<!-- Single Footer -->
					
					
					<!-- Single Footer -->
                    <div class="col-sm-4">
						<center><div class="single-footer" style="margin:30px 0">
                     <img src="img/logo.png" alt="Colégio Americana">
                     <br><br>
                     <p align="justify">Com quase 20 anos de história, o Colégio Americana oferece educação séria e de qualidade, buscando o desenvolvimento social, cognitivo, físico e afetivo dos alunos.</p>
                     
						</div></center>
					</div>
                    <!-- Single Footer -->
					<div class="col-sm-4">
						<center><div class="single-footer" style="margin:30px 0">
                     <h4>Informações & Contato</h4>
                     
                     <hr style="margin:0 39%">
                     <p>Rua Cabo Oswaldo de Moraes, 152<br>Americana - São Paulo</p>
                     <p>Tel.: (19) 3406-3713 | (19) 3604-3713</p>
                     <p>contato@colegioamericana.com.br</p>
						</div></center>
					</div>
                    <!-- Single Footer -->
                    <div class="col-sm-4">
						<center><div class="single-footer" style="margin:30px 0">
                     <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/colegioamericana" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegioamericana" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegioamericana">Colegio Americana</a></blockquote></div>
						</div></center>
					</div>
					<!-- Single Footer -->
					
					
					<!-- Single Footer 
					<div class="col-sm-4">
						<center><div class="single-footer" style="margin:30px 0">
                     <h4>UNIDADE METRÔ PENHA</h4>
                     <h5>Berçário e Educação Infantil</h5>
                     <hr style="margin:0 10%">
                     <p>R. Júlio Colaço, 310 - Vila Matilde<br>CEP.: 03503-030</p>
                     <p>Tel.: 2091-2501</p>
						</div></center>
					</div>
					<!-- Single Footer -->
					
					
				</div>
			</div>
			
		</footer>
		
		<!-- Copyright -->
		<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
								<div class="col-sm-12">
								<center><a href="politica-privacidade.html" style="color:#fff;">Política de Privacidade</a></center>

								<div class="copy-text">
								<center><p>  <span style="font-size:12px;">© Copyright 2017  | Desenvolvido por <a href="http://www.rabbitdigital.com.br/" target="_blank">Rabbit Digital</a></span></p></center>
							</div>
						</div>
</div>
					</div>
				</div>
			</div>
		
		<!-- footer -->
		
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="js/paralax.js"></script>
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>

		
		<script type="text/javascript">
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						 'scrollTop': $target.offset().top
					}, 900, 'swing');
					});
			});
		</script>
		
		<script src="js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
