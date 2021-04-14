<?php

add_action('init', function(){
    add_rewrite_rule( 'characters/([a-z]+)[/]?$', 'index.php?character=$matches[1]', 'top' );
});

add_filter( 'query_vars', function( $query_vars ) {
    $query_vars[] = 'character';
    return $query_vars;
} );

add_action( 'template_include', function( $template ) {

    if ( get_query_var( 'character' ) == false || get_query_var( 'character' ) == '' ) {
        return $template;
    }
 
    return get_template_directory() . '/character.php';
} );