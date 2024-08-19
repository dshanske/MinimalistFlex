<?php
if ( !defined( 'WPINC' ) ) {
    die;
}
?>

<?php get_header() ?>

<div class="singular">
    <div class="singular-main">
        <h1 class="404-title"><?php _e( 'You&apos;ve reached the edge of the world.', 'minimalistflex' ) ?></h1>
        <p><?php _e( 'It looks like the page you are looking for doesn&apos;t exist.', 'minimalistflex' ) ?></p>
        <p><?php _e( 'What about a search?', 'minimalistflex' ) ?></p>
        <?php get_search_form() ?>
        <p><a href="javascript:history.go(-1)"><?php _e( 'Go back', 'minimalistflex' ) ?></a></p>
    </div>
</div>

<?php get_footer() ?>