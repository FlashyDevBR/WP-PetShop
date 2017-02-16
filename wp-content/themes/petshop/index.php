<?php get_header(); ?>
        
        <section class="container">
            <div class="row rowSlider">
                <?php echo do_shortcode('[image-carousel]'); ?>
            </div>
            <div class="row rowSobre">
               <div class="col-sm-12">
                    <h2>Um pouco sobre nós</h2>
                    <p class="text-justify"><?php echo rwmb_meta('resumo', null, 6); ?></p><br><br>
                    <div class="row rowSobreDestaque text-center">
                        <div class="col-sm-3">
                           <span class="glyphicon glyphicon-screenshot "></span><br>
                            <h3 class="foco">Nosso Foco</h3><br>
                            <p class="text-justify">Quando pegamos um trabalho focamos em fazer com agilidade e qualidade para deixar tanto o animalzinho quanto o seu dono felizes.</p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                           <span class="glyphicon glyphicon-heart"></span><br>
                            <h3 class="amor">Feito com Amor</h3><br>
                            <p class="text-justify">Fazemos o que mais gostamos, por isso fazemos tudo com muito amor e carinho para ter o melhor resultado.</p>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                           <span class="glyphicon glyphicon-star"></span><br>
                            <h3 class="estrela">Resultado Brilhante</h3><br>
                            <p class="text-justify">E o resultado de tudo isso ? O melhor que se pode ter, seja qual for o serviço, nós fazemos com primo e entregamos com perfição.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success">Veja mais</a>                   
               </div>
            </div>
            <div class="row rowBlog">
                <div class="col-sm-12">
                    <h2>Últimos artigos</h2>
                    <div class="row">
                       <?php
                            $args = array(
                                'numberposts' => 2,
                                'offset' => 0,
                                'category' => 1,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            );

                            $posts = wp_get_recent_posts($args);

                            foreach($posts as $p) {
                                $thumbnail = new SimpleXMLElement( get_the_post_thumbnail($p['ID']));
                                $imagemPost = $thumbnail->attributes()->src;
                        ?>
                        <div class="col-sm-4 col-sm-offset-1">
                          <a href="<?php echo get_permalink($p['ID']); ?>">
                           <div class="cover">
                                <h3><?php echo $p["post_title"]; ?></h3>
                                <img src="<?php echo $imagemPost; ?>" alt="<?php echo $p['post_title']; ?>" class="img-responsive img-rounded">
                                <div class="pelicula"></div>  
                           </div>  
                           </a>                           
                            <a href="<?php echo get_permalink($p['ID']); ?>"><h4><?php echo rwmb_meta('subtitulo', null, $p['ID']); ?></h4></a><br>
                            <p><?php echo rwmb_meta('resumo', null, $p['ID']); ?></p><br>
                            <a href="<?php echo get_permalink($p["ID"]); ?>" class="leia">Leia mais</a>
                        </div>
                        <div class="col-sm-1"></div>
                        <?php } ?>
                    </div>
                    <div class="row">
                       <?php
                            $args = array(
                                'numberposts' => 2,
                                'offset' => 2,
                                'category' => 1,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            );

                            $posts = wp_get_recent_posts($args);

                            foreach($posts as $p) {
                                $thumbnail = new SimpleXMLElement( get_the_post_thumbnail($p['ID']));
                                $imagemPost = $thumbnail->attributes()->src;
                        ?>
                        <div class="col-sm-4 col-sm-offset-1">
                          <a href="<?php echo get_permalink($p['ID']); ?>">
                           <div class="cover">
                                <h3><?php echo $p["post_title"]; ?></h3>
                                <img src="<?php echo $imagemPost; ?>" alt="<?php echo $p['post_title']; ?>" class="img-responsive img-rounded"> 
                                <div class="pelicula"></div>  
                           </div>   
                           </a>                         
                            <a href="<?php echo get_permalink($p['ID']); ?>"><h4><?php echo rwmb_meta('subtitulo', null, $p['ID']); ?></h4></a><br>
                            <p><?php echo rwmb_meta('resumo', null, $p['ID']); ?></p><br>
                            <a href="<?php echo get_permalink($p["ID"]); ?>" class="leia">Leia mais</a>
                        </div>
                        <div class="col-sm-1"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row rowFotos">
               <div class="col-sm-12">
                    <h2>Nossos clientes</h2>
                    <p><?php echo rwmb_meta('resumo', null, 8); ?></p>
                    <div class="row">
                       <?php
                            $args = array(
                                'numberposts' => 6,
                                'offset' => 0,
                                'category' => 2,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            );

                            $posts = wp_get_recent_posts($args);

                            foreach($posts as $p) {
                                $thumbnail = new SimpleXMLElement( get_the_post_thumbnail($p['ID']));
                                $imagemPost = $thumbnail->attributes()->src;
                        ?>
                       
                        <div class="col-sm-2">
                            <h3 class="text-center"><?php echo $p['post_title']; ?></h3>
                            <a href="<?php echo $imagemPost; ?>" rel="lightbox"><img src="<?php echo $imagemPost; ?>" alt="<?php echo $p['post_title']; ?>" class="img-thumbnail"></a> 
                        </div>
                        <?php } ?>
                    </div><br>
                    <a href="<?php echo get_permalink(8) ?>" class="btn btn-success">Veja mais</a>
               </div>
            </div>
            <div class="row rowContato">
                <div class="col-sm-12">
                   <h2>Entre em contato</h2>
                    <?php echo do_shortcode('[contact-form-7 id="85" title="Form Home"]'); ?>
                </div>
            </div>
        </section>
        
<?php get_footer(); ?>