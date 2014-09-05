<?php
/**
 * The template for displaying search results pages.
 *
 * @package overdrive
 */

get_header(); ?>

<div class="row">

    <div class="col-md-9">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'overdrive' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php overdrive_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

    </div>

    <div class="col-md-3">

        <button type="button" class="btn btn-default btn-sm btn-block login-button" data-home="<?php echo esc_url(home_url('/')); ?>">
            login <span class="glyphicon glyphicon-log-in"></span>        
        </button>

        <?php get_sidebar(); ?>

    </div>

</div>

<?php get_footer(); ?>
