<?php get_header(); ?>
        
        <section class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="row">
                    <?php 
                        if(get_the_post_thumbnail()) {
                    ?>
                <div class="texto col-sm-8"><?php the_content(); ?></div>
                <div class="col-sm-4">
                   <?php
                            $thumbnail = new SimpleXMLElement(get_the_post_thumbnail());
                            $imagemPost = $thumbnail->attributes()->src;
                            echo "<a href='$imagemPost' rel='lightbox'><img src='$imagemPost' class='img-responsive' alt='Imagem' /></a>";
                    ?>
                </div>
                <?php
                    }
                    else {                    
                ?>
                <div class="texto col-sm-12"><?php the_content(); ?></div>
                <?php } ?>
            </div>
            <?php endwhile; endif; ?>
        </section>
        
<?php get_footer(); ?>