<?php

/*
 Plugin Name: WordPress Auto Updates
 Description: Automatically updates WordPress core, plugins, themes and languages.
 */

add_filter( 'auto_update_core', '__return_true' );  
add_filter( 'auto_update_plugin', '__return_true' ); 
add_filter( 'auto_update_theme', '__return_true' ); 
add_filter( 'auto_update_translation', '__return_true' ); 
