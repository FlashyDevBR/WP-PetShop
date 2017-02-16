<?php
// Get the website Logo
require get_template_directory() . '/inc/logo.php';

// Get Meta Box
require get_template_directory() . '/inc/metabox.php';

// Enable thumbnails for posts
add_theme_support( 'post-thumbnails' );

// Custom Logo
function my_login_logo() { ?>
    <style type="text/css">

        body.login div#login h1 a {
            background-image: url("wp-content/themes/petshop/img/logoalt.png");
            background-size: 150px;
            height: 160px;
            width: 150px;
        }

    </style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Custom Logo Link
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Custom Login Screen
function my_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="wp-content/themes/petshop/css/main.css" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

//Custom Dashboard Logo
add_action('admin_head', 'my_custom_logo');
function my_custom_logo() {
    echo '<style>div#wpadminbar div#wp-toolbar #wp-admin-bar-root-default #wp-admin-bar-wp-logo .ab-icon {background-image: url('.get_bloginfo('template_directory').'/src/img/icon.png) !important; background-repeat: no-repeat !important; background-position: center top !important; font-family: "Roboto", sans-serif !important; width: 25px !important; height: 25px !important; margin-top: 7px !important; } div#wpadminbar div#wp-toolbar #wp-admin-bar-root-default #wp-admin-bar-wp-logo .ab-icon:before { content: "" !important;}</style>';
}

// Custom Footer Msg
function remove_footer_admin () {
    echo '© Desenvolvido por Flashy Dev';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Custom Hello
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Olá', 'Bem vindo', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );



?>
