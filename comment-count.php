<?php
/*
Plugin Name: Comment Count
Plugin URI: https://wordpress.org/plugins/comment-count/
Description: Counts the total number of comments.
Version: 1.2
Author: Nick Momrik
Author URI: http://nickmomrik.com/
*/

function mdv_comment_count() {
    global $wpdb;

    echo number_format( $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'" ) );
}
