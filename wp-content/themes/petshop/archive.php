<?php get_header(); ?>
        
        <section class="container">
          <div class="row rowArchive">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="artigo col-sm-6">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php echo get_permalink(); ?>"><h4><?php echo rwmb_meta('subtitulo'); ?></h4></a>
                    <?php
                        $thumbnail = new SimpleXMLElement( get_the_post_thumbnail());
                        $imagemPost = $thumbnail->attributes()->src;                    
                    ?>
                    <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $imagemPost; ?>" alt="<?php echo the_title(); ?>" class="img-responsive img-rounded"></a>
                    <p><?php the_excerpt(); ?></p>
                </article>            
            <?php endwhile?>
                <div class="navegacao">
                    <div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
                    <div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
                </div>
            <?php else: ?>
                <article class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </article>            
            <?php endif; ?>
            </div>
        </section>
        
<?php get_footer(); ?>