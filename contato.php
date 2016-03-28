<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Theotonio&Dutra</title>
    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $("#modalSucess").modal();
    </script>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
       (function(){
          emailjs.init("user_yqVLq6jbegIQ68fBIml7A");
       })();
    </script>
    <script type="text/javascript" src="js/tdutra.js"></script>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/tdutra.css">
</head>

<body>
    <div class = "overlay"></div>
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">
                    <img class="nav-img" src="images/icon-small.svg" alt="logo theotonio e dutra">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a  href="./">Home</a>
                    </li>
                    <li>
                        <a  href="halitose.php">Halitose</a>
                    </li>
                    <li>
                        <a  href="equipe.php">Nossa equipe</a>
                    </li>
                    <li>
                        <a href="servicos.php">Outros serviços</a>
                    </li>
                    <li>
                        <a class="active" href="contato.php">Contato</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class = "main-contact">
        <div class = "row">
            <div class = "contact-bg">
                <div class = "col-xs-12 contact-title">
                    <img class = "img-responsive wow bounceIn" data-wow-duration="1.5s" src="./images/contato/toothicon.svg" />
                    <h1><span class = "wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1s">sofre de halitose ou conhece alguém que sofre?</span>
                        <br>
                        <b>
                        <span class = "wow fadeIn" data-wow-duration="1.5s" data-wow-delay="2s">fale conosco</span>
                        </b>
                    </h1>
                </div>
                <div class = "wow fadeIn contact-form col-xs-12 col-md-8 col-md-offset-2 text-left" data-wow-duration="1.5s" data-wow-offset = "250">
                    <form id = "cont-form">
                        <fieldset>
                            <div class = "row">
                                <div class="form-group col-xs-12 col-md-6">
                                  <label for="name" class="control-label">Nome*</label>
                                    <input type="text" class="form-control" id="name" required="" placeholder="Insira aqui seu nome">  
                                </div>
                                <div class="form-group col-xs-12 col-md-6">
                                  <label for="mail" class="control-label">Email*</label>
                                    <input type="email" required class="form-control" id="mail" placeholder="Insira aqui seu email">
                                </div>
                            </div>
                            <div class = "row">
                                <div class="form-group col-xs-12 col-md-6">
                                  <label for="phone" class="control-label">Telefone*</label>
                                    <input type="tel" class="form-control" required="" id="phone" placeholder="Insira seu telefone">
                                </div>
                                <div class="form-group col-xs-12 col-md-6">
                                  <label for="address" class="control-label">Endereço</label>
                                    <input type="text" class="form-control" id="address" placeholder="Insira seu endereço">  
                                </div>
                            </div>
                            <div class = "row">
                                <div class="form-group col-xs-12">
                                  <label for="prospection" class="control-label">Como conheceu a clínica? *</label>
                                    <input type="text" class="form-control" id="prospection" placeholder="Digite como conheceu a clínica" required="">
                                </div>
                            </div>
                            <div class = "row">
                                <div class="form-group col-xs-12">
                                  <label class="control-label" for="message">Mensagem*</label>
                                    <textarea class="form-control" id="message" name="message" required="" rows="4">Insira sua mensagem</textarea>
                                </div>
                            </div>
                            <div class = "row">
                                <div class="form-group">
                                  <div class="text-right col-sm-10 col-sm-offset-2">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary" aria-label="">Enviar</button>
                                    
                                  </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>             
                </div>
            </div>
        </div>
    </section>

    <section class = "footer"> 
        <div class = "ft-main">
                <div class = "row">
                    <div class = "col-xs-12 col-md-3 col-md-offset-1 text-left">
                        <h1 class = "wow fadeIn" data-wow-duration="2s">entre em<br><b>contato</b></h1>
                        <p class = "wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">Av. Nove de Julho, 394<br>
                            Sala 63/64<br>
                            Vila Adyanna<br>
                            São José dos Campos - SP</p>
                    </div>
                    <div class="col-xs-12 col-md-3 text-left contact wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <p><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contato@halitobom.com.br</p>
                        <p><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(12)3922-5363</p>
                     </div>
                    <div class ="hidden-sm hidden-xs col-md-3 col-md-offset-1 map wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.284025927068!2d-45.89626968534655!3d-23.19631755409706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a6d5dffc8bf%3A0xc1f1f65cc7e9a2f9!2sAv.+Nove+de+Julho%2C+394+-+Jardim+Apolo%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP%2C+12243-001!5e0!3m2!1spt-BR!2sbr!4v1457287577096" width="350" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
        </div>
        <div class = "ft-cpr">
            <div class = "row">
                <div class = "col-xs-12 text-center">THEOTONIO & DUTRA © 2015 | TODOS OS DIREITOS RESERVADOS</div>
            </div>
        </div>
    </section>

    <div id="modalSucess" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Seu email foi enviado com sucesso!</h4>
          </div>
          <div class="modal-body">
            <p>Aguarde que em breve entraremos em contato.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

</body>


</html>