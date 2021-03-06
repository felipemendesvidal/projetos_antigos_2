<Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Colégio Cordeiro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <link rel='stylesheet' href='http://daneden.github.io/animate.css/animate.min.css'>
      
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    </head>
    <body><section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="https://www.facebook.com/colegiocordeiro.sp/" target="blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/colegiocordeiro/" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/c/institutocordeirinho" target="blank"><i class="fab fa-youtube"></i></a>
                        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>(11) 2232-2569 | (11)2389-2568</a>
                                <a href="mailto:contato@colegiocordeiro.com.br;"><i class="fa fa-envelope"></i>contato@colegiocordeiro.com.br</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section><nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Logo" style="margin-top: -8%;" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>

                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O Colégio<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="menu"><a href="historia.html">História</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu"><a href="proposta.html">Proposta</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu"><a href="filosofia.html">Filosofia</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu"><a href="estrutura.html">Nosso Espaço</a></li>
                        </ul>
                        </li>

                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Segmentos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="menu"><a href="bercario.html">Berçário</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu"><a href="infantil.html">Educação Infantil</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu"><a href="fundamental.html">Ensino Fundamental</a></li>
                        </ul>
                        </li>


                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fale Conosco<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="menu"><a href="contato.html">Contato</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu"><a href="trabalhe-conosco.html">Trabalhe Conosco</a></li>
                        </ul>
                        </li>

                        <li><a href="http://www.colegiocordeiro.com.br/publicacoes/" target="blank">Publicações</a></li>
                        <li><a href="https://colegiocordeiro.educacionalcloud.com.br/login.asp?codescola=" target="blank"><i class="fas fa-user-lock"></i> Portal</a></li> <li class="login"><a href="http://pages.rabbitmkt.com.br/hsRbgQH6lBJvo/colegio-cordeiro-matriculas.html" target="_blank">Matrículas</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


 
<?php
 
/* Valores recebidos do formulário  */
$arquivo = $_FILES['arquivo'];
$nome = $_POST['nome'];
$telefone = $_POST['fone'];
$replyto = $_POST['email']; // Email que será respondido
$mensagem_form = $_POST['mensagem'];
$assunto = $_POST['assunto'];
 
/* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
$to = "contato@cordeiro.com.br";
$remetente = "contato@cordeiro.com.br"; // Deve ser um email válido do domínio
 
/* Cabeçalho da mensagem  */
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$headers = "MIME-Version: 1.0\n";
$headers.= "From: $remetente\n";
$headers.= "Reply-To: $replyto\n";
$headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
$headers.= "$boundary\n"; 
 
/* Layout da mensagem  */
$corpo_mensagem = " 
<br>Formulário Contato site Cordeiro
<br>--------------------------------------------<br>
<br><strong>Nome:</strong> $nome
<br><strong>Telefone:</strong> $telefone
<br><strong>Email:</strong> $replyto
<br><strong>Assunto:</strong> $assunto
<br><strong>Mensagem:</strong> $mensagem_form
<br><br>--------------------------------------------
";
 
/* Função que codifica o anexo para poder ser enviado na mensagem  */
if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
 
    $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); // Abri o arquivo enviado.
 $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"])); // Le o arquivo aberto na linha anterior
 $anexo = base64_encode($anexo); // Codifica os dados com MIME para o e-mail 
 fclose($fp); // Fecha o arquivo aberto anteriormente
    $anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços para poder enviar
    $mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
    $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
    $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    $mensagem.= "$corpo_mensagem\n"; 
    $mensagem.= "--$boundary\n"; 
    $mensagem.= "Content-Type: ".$arquivo["type"]."\n";  
    $mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
    $mensagem.= "Content-Transfer-Encoding: base64\n\n";  
    $mensagem.= "$anexo\n";  
    $mensagem.= "--$boundary--\r\n"; 
}
 else // Caso não tenha anexo
 {
 $mensagem = "--$boundary\n"; 
 $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
 $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
 $mensagem.= "$corpo_mensagem\n";
}
 
/* Função que envia a mensagem  */
if(mail($to, $assunto, $mensagem, $headers))
{
 echo "<br><br><center><b><font color='green'>Mensagem enviada com sucesso!";
} 
 else
 {
 echo "<br><br><center><b><font color='red'>Ocorreu um erro ao enviar a mensagem!";
}
?>



        
<footer id="pre-footer" class="pre-footer sociais">
            <div class="container">
                <div class="row">
                <div class="col-md-12"><br>
                    <h5 align="center" style="color: #000;">Colégio Cordeiro</h5>
                    <hr style="margin-left:7%; margin-right: 5%;">
                
                    <!-- Single Footer -->
                    <div class="col-sm-4">
                    <center>
                      <div class="single-footer" style="margin:30px 0">
                      <p><span style=""><i class="fas fa-map-marked-alt"></i></span> &nbsp;
                      Av. Direitos Humanos, 2611 Cep: 02475-002 <br> São Paulo – SP</p>
                      </div>
                    </center>
                    </div>
                    <!-- Single Footer -->
                    
                    
                    <!-- Single Footer -->
                    <div class="col-sm-4">
                    <center>
                        <div class="single-footer" style="margin:30px 0">
                        <i class="fas fa-envelope"></i>&nbsp;
                        Email:<a href="mailto:contato@cordeiro.com.br" style="color: #fff; "> contato@cordeiro.com.br</a>
                        <p><i class="fas fa-phone"></i>&nbsp; Ligue: (11) 2232-2569 | (11)2389-2568</p> <br>
                        </div>
                    </center>
                    </div>
                    <!-- Single Footer -->
                    
                    
                    <!-- Single Footer -->
                    <div class="col-sm-4">
                    <center>
                        <div class="single-footer" style="margin:30px 0">
                        <p>Acompanhe-nos nas redes sociais!</p>
                        <div class="sociais">
                            <a href="https://www.facebook.com/colegiocordeiro.sp/" target="blank"><i class="fab fa-facebook-f fa-2x"></i></a> &nbsp;&nbsp;
                            <a href="https://www.instagram.com/colegiocordeiro/" target="blank"><i class="fab fa-instagram fa-2x"></i></a> &nbsp;&nbsp;
                            <a href="https://www.youtube.com/c/institutocordeirinho" target="blank"><i class="fab fa-youtube fa-2x"></i></a>
                        </div>
                        </div>
                    </center>
                    </div>
                    <!-- Single Footer -->
                </div>
            </div>
            </div>
        </footer>

        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-12">
                            <div class="copyright" align="center">
                                <p>Copyright © 2019. Desenvolvido por <a target="_blank" href="http://rabbitdigital.com.br/"><b>Rabbit Digital</b></a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/wow.min.js"></script>
        

    </body>
</html>
