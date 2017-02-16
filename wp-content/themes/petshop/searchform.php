<form method="get" id="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-form navbar-right" role="search">
    <div class="form-group">	
        <input type="text" class="form-control" name="s" id="txtBusca" value="<?php echo get_search_query(); ?>" placeholder="Está procurando algo ?">
    </div>
    <button type="submit" class="btn btn-info glyphicon glyphicon-search"></button>
</form>