<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package overdrive
 */
?>

<div id="post-<?php the_ID(); ?>" class="media" <?php post_class(); ?>>

    <p class="pull-left">

        <?php
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail(array(80, 80), array('class' => 'media-object'));
        }
        ?>

    </p>

    <div class="media-body">

        <?php the_title('<h1 class="media-heading mar-bot-20">', '</h1>'); ?>
        <?php edit_post_link(__('Edit', 'overdrive'), '<span class="label label-success pull-right">', '</span>'); ?>


        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'overdrive'),
            'after' => '</div>',
        ));
        ?>

    </div>

</div>
