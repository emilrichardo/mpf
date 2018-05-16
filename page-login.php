<?php get_header(); ?>

<?php
if ( is_user_logged_in() ) {
    echo 'Welcome, registered user!';
} else {
    echo 'Welcome, visitor!';
}
?>

<?php 

/**
 * Give a personalized message for logged in users and a generic one for anonymous visitors
 */
function wpdocs_personal_message_when_logged_in() {
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        printf( 'Personal Message For %s!', esc_html( $current_user->user_firstname ) );
    } else {
        echo( 'Non-Personalized Message!' );
    }
}
add_action( 'loop_start', 'wpdocs_personal_message_when_logged_in' );

 ?>

 <?php get_footer(); ?>