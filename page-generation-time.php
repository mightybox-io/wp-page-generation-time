<?php
/*
 * Plugin Name: Page Generation Time
 * Description: Display the page generation time in the admin bar
 * Version: 1.0
 * Author: MightyBox
 */

add_action( 'admin_bar_menu', 'add_generation_time_to_admin_bar', 999 );

function add_generation_time_to_admin_bar( $wp_admin_bar ) {
  $execution_time = timer_float();
  $wp_admin_bar->add_node( array(
    'id' => 'generation-time',
    'title' => sprintf( '%.3fs', $execution_time ),
    'href' => false,
  ) );
}