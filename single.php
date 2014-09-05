<?php
/**
 * The template for displaying all single posts.
 *
 * @package overdrive
 */
get_header();
?>

<div class="row">

    <div class="col-md-9">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'single'); ?>

            <?php overdrive_post_nav(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // end of the loop. ?>

    </div>

    <div class="col-md-3">

        <button type="button" class="btn btn-default btn-sm btn-block login-button" data-home="<?php echo esc_url(home_url('/')); ?>">
            login <span class="glyphicon glyphicon-log-in"></span>        
        </button>

        <?php get_sidebar(); ?>

    </div>

</div>
    
<?php get_footer(); ?>