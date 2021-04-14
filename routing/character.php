<?php

get_header();

$character_slug = get_query_var( 'character' );

$api_response = json_decode(file_get_contents(get_template_directory() . '/api/' . $character_slug . '.json'));

echo '<h1>About: '.$api_response->name.' </h1>';

echo '<p>'.$api_response->description.'</p>';

get_footer();