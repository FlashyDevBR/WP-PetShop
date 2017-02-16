<?php

add_filter( 'rwmb_meta_boxes', 'customText' );
function customText( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Subtitulo', 'textdomain' ),
        'post_types' => array('post'),
        'fields'     => array(
            array(
                'id'   => 'subtitulo',
                'type' => 'text',
            )

        ),
    );
    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'customField' );
function customField( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Resumo', 'textdomain' ),
        'post_types' => array('page', 'post'),
        'fields'     => array(
            array(
                'id'   => 'resumo',
                'type' => 'textarea',
            )

        ),
    );
    return $meta_boxes;
}

?>
