<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package overdrive
 */
get_header();
?>

<div class="row">

    <div class="col-md-9">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'page'); ?>

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
