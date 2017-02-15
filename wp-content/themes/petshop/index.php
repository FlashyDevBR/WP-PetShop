<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Bootstrap 3 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet">
    <!-- Font Montserrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       
        <header class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Petshop" class="img-responsive"></a>
                </div>
                <div class="col-sm-8">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menuTop">
                                <span class="sr-only">Mostrar menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse navbar-menuTop">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Inicio</a></li>
                                <li><a href="#">Sobre</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                            <form method="post" action="search.php" class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Está procurando algo ?">
                                </div>
                                <button type="submit" class="btn btn-info glyphicon glyphicon-search"></button>
                            </form>                            
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        
        <section class="container">
            <div class="row rowSlider">
                <div id="slider" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="https://placehold.it/1920x350" alt="Banner">
                          <div class="carousel-caption">
                            Algum texto aleatório
                          </div>
                        </div>
                        <div class="item">
                          <img src="https://placehold.it/1920x350" alt="Banner">
                          <div class="carousel-caption">
                            Algum texto aleatório
                          </div>
                        </div>
                        <div class="item">
                          <img src="https://placehold.it/1920x350" alt="Banner">
                          <div class="carousel-caption">
                            Algum texto aleatório
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                      </a>
                      <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                      </a>
                    </div>
            </div>
            <div class="row rowSobre">
               <div class="col-sm-12">
                    <h2>Um pouco sobre nós</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, libero laboriosam voluptatum ducimus commodi minus quisquam quis iste voluptatem ipsa minima repudiandae omnis quam! Necessitatibus aliquam delectus distinctio aspernatur et? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, libero laboriosam voluptatum ducimus commodi minus quisquam quis iste voluptatem ipsa minima repudiandae omnis quam! Necessitatibus aliquam delectus distinctio aspernatur.</p><br><br>
                    <div class="row rowSobreDestaque text-center">
                        <div class="col-sm-3">
                           <span class="glyphicon glyphicon-screenshot "></span><br>
                            <h3 class="foco">Nosso Foco</h3><br>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vel eos nemo saepe, asperiores assumenda. Praesentium cum deserunt explicabo consequuntur non esse debitis, eveniet corporis iure, sed optio temporibus dolorum.</p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                           <span class="glyphicon glyphicon-heart"></span><br>
                            <h3 class="amor">Feito com Amor</h3><br>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vel eos nemo saepe, asperiores assumenda. Praesentium cum deserunt explicabo consequuntur non esse debitis, eveniet corporis iure, sed optio temporibus dolorum.</p>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                           <span class="glyphicon glyphicon-star"></span><br>
                            <h3 class="estrela">Resultado Brilhante</h3><br>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vel eos nemo saepe, asperiores assumenda. Praesentium cum deserunt explicabo consequuntur non esse debitis, eveniet corporis iure, sed optio temporibus dolorum.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success">Veja mais</a>                   
               </div>
            </div>
            <div class="row rowBlog">
                <div class="col-sm-12">
                    <h2>Últimos artigos</h2>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                           <div class="cover">
                                <h3>Titulo Principal</h3>
                                <img src="<?php echo get_template_directory_uri() ?>/img/samplePost.jpg" alt="Post" class="img-responsive img-rounded"> 
                                <div class="pelicula"></div>  
                           </div>                            
                            <h4>Sub Titulo</h4><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, officia voluptas ipsa dignissimos impedit accusamus ipsum quae non itaque id sit vel pariatur voluptates iste fugiat incidunt quisquam ullam soluta!...</p><br>
                            <a href="#">Leia mais</a>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 col-sm-offset-1">
                           <div class="cover">
                                <h3>Titulo Principal</h3>
                                <img src="<?php echo get_template_directory_uri() ?>/img/samplePost.jpg" alt="Post" class="img-responsive img-rounded"> 
                                <div class="pelicula"></div>     
                           </div>
                            <h4>Sub Titulo</h4><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, officia voluptas ipsa dignissimos impedit accusamus ipsum quae non itaque id sit vel pariatur voluptates iste fugiat incidunt quisquam ullam soluta!...</p><br>
                            <a href="#">Leia mais</a>
                        </div>                        
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                           <div class="cover">
                                <h3>Titulo Principal</h3>
                                <img src="<?php echo get_template_directory_uri() ?>/img/samplePost.jpg" alt="Post" class="img-responsive img-rounded"> 
                                <div class="pelicula"></div>     
                           </div>
                            <h4>Sub Titulo</h4><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, officia voluptas ipsa dignissimos impedit accusamus ipsum quae non itaque id sit vel pariatur voluptates iste fugiat incidunt quisquam ullam soluta!...</p><br>
                            <a href="#">Leia mais</a>
                        </div>                        
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4 col-sm-offset-1">
                           <div class="cover">
                                <h3>Titulo Principal</h3>
                                <img src="<?php echo get_template_directory_uri() ?>/img/samplePost.jpg" alt="Post" class="img-responsive img-rounded"> 
                                <div class="pelicula"></div>     
                           </div>
                            <h4>Sub Titulo</h4><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, officia voluptas ipsa dignissimos impedit accusamus ipsum quae non itaque id sit vel pariatur voluptates iste fugiat incidunt quisquam ullam soluta!...</p><br>
                            <a href="#">Leia mais</a>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
            <div class="row rowFotos">
               <div class="col-sm-12">
                    <h2>Nossos clientes</h2>
                    <p>Nossos últimos clientes que receberam os cuidados do Pet Show</p>
                    <div class="row">
                        <div class="col-sm-2">
                            <h3 class="text-center">Toby</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/01.jpg" alt="Imagem" class="img-thumbnail"> 
                        </div>
                        <div class="col-sm-2">
                            <h3 class="text-center">Luke</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/02.jpg" alt="Imagem" class="img-thumbnail">
                        </div>
                        <div class="col-sm-2">
                            <h3 class="text-center">Lilla</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/03.jpg" alt="Imagem" class="img-thumbnail">
                        </div>
                        <div class="col-sm-2">
                            <h3 class="text-center">Billy</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/04.jpg" alt="Imagem" class="img-thumbnail">
                        </div>
                        <div class="col-sm-2">
                            <h3 class="text-center">Nina</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/05.jpg" alt="Imagem" class="img-thumbnail">
                        </div>
                        <div class="col-sm-2">
                            <h3 class="text-center">Juju</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/06.jpg" alt="Imagem" class="img-thumbnail">
                        </div>
                    </div><br>
                    <a href="#" class="btn btn-success">Veja mais</a>
               </div>
            </div>
            <div class="row rowContato">
                <div class="col-sm-12">
                   <h2>Entre em contato</h2>
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Nome</span>
                            <input type="text" id="nome" class="form-control" placeholder="Digite seu nome completo" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Telefone</span>
                            <input type="text" id="fone" class="form-control" placeholder="EX: (41) 9999-9999" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3">E-mail</span>
                            <input type="text" id="mail" class="form-control" placeholder="Digite um e-mail válido" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon4">Mensagem</span>
                            <textarea id="msg" class="form-control" placeholder="Digite seu nome completo" aria-describedby="basic-addon4"></textarea>
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-success bt-lg center-block">
                    </form>
                </div>
            </div>
        </section>
        
        <footer class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Acesso Rápido</h3><br>
                    <ul class="list-unstyled">
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Inicio</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Sobre</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Media</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Blog</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 colContato">
                    <h3>Informações de Contato</h3><br>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <span>(41) 3333 3333</span><br>
                    <span class="glyphicon glyphicon-phone"></span>
                    <span>(41) 9999 9999</span><br><br><br>
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span>contato@petshow.com.br</span><br><br>
                    <span class="glyphicon glyphicon-home" style="padding-bottom: 0"></span>
                    <span style="padding-bottom: 0">Rua São A, 150</span><br>
                    <span style="padding-left: 38px">Bairro Jardim Novo Ouro Branco</span><br>
                    <span style="padding-left: 38px">CEP 87704-475</span>
                </div>
                <div class="col-sm-4">
                    <h3>Redes Sociais</h3><br>
                    <div id="redeSocial">
                        <a href="#" class="social fb pull-left"></a>
                        <a href="#" class="social tw pull-left"></a>
                        <a href="#" class="social gp pull-left"></a>
                    </div><br>
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="300" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </footer>
        <div id="footerSub" class="container">
            <div class="row">
                <p>&copy; Site Desenvolvido por Flashy Dev</p>
            </div>
        </div>        

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 3 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  </body>
</html>