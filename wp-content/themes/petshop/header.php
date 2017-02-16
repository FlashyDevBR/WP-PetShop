<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo() . " | " . get_the_title(); ?></title>

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
  </head>
  <body>
    <?php wp_head(); ?>
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
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('m1_logo'); ?>" alt="Petshop" class="img-responsive"></a>
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
                           <?php global $wp; $urlAtual = home_url(add_query_arg(array(),$wp->request)); ?>
                           
                           <?php if($urlAtual == home_url()) { ?>
                            <li class="active"><a href="<?php echo home_url(); ?>">Inicio</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
                            <?php } ?>
                            
                           <?php if($urlAtual."/" == get_permalink(6)) { ?>
                            <li class="active"><a href="<?php echo get_permalink(6); ?>">Sobre</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo get_permalink(6); ?>">Sobre</a></li>
                            <?php } ?>                            
                            
                           <?php if($urlAtual."/" == get_permalink(8)) { ?>
                            <li class="active"><a href="<?php echo get_permalink(8); ?>">Media</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo get_permalink(8); ?>">Media</a></li>
                            <?php } ?>                            
                            
                            
                           <?php if($urlAtual."/" == get_category_link(1)) { ?>
                            <li class="active"><a href="<?php echo get_category_link(1); ?>">Blog</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo get_category_link(1); ?>">Blog</a></li>
                            <?php } ?>    
                            
                           <?php if($urlAtual."/" == get_permalink(10)) { ?>
                            <li class="active"><a href="<?php echo get_permalink(10); ?>">Contato</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo get_permalink(10); ?>">Contato</a></li>
                            <?php } ?>                                
                        </ul>
                        <?php get_search_form(); ?>                            
                    </div>
                </nav>
            </div>
        </div>
    </header>       