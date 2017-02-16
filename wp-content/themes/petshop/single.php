<?php get_header(); ?>
        
        <section class="container">
          <div class="row rowSingle">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="artigo col-sm-8">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php echo rwmb_meta('subtitulo'); ?></h4>
                    <?php
                        $thumbnail = new SimpleXMLElement( get_the_post_thumbnail());
                        $imagemPost = $thumbnail->attributes()->src;                    
                    ?>
                    <img src="<?php echo $imagemPost; ?>" alt="<?php echo the_title(); ?>" class="img-responsive img-rounded">
                    <p><?php the_content(); ?></p><br>
                    <a href="<?php echo get_category_link(1); ?>">&lt;&lt; Voltar</a>
                </article>            
            <?php endwhile;?>           
            <?php endif; ?>
                <aside id="sidebar" class="col-sm-3 col-sm-offset-1">
                   <h3>Últimos artigos:</h3><br>
                   <?php
                        $args =  array ( 'cat' => 1, 'posts_per_page'=> 5 );
                        $catPosts = new WP_Query( $args );

                        if( $catPosts->have_posts() ){                    
                    ?>
                   <ol>
                    <?php
                        while ($catPosts->have_posts()) : $catPosts->the_post();
                    ?>
                    <li><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                    <?php endwhile; ?>
                    </ol>
                    <?php } wp_reset_postdata(); ?>
                </aside>
            </div>
        </section>
        
<?php get_footer(); ?>