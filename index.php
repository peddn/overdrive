<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
