<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package overdrive
 */
?>

	</div><!-- #content -->

        <footer role="contentinfo">
		<div class="center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=30">Impressum</a>
		</div>
	</footer>

</div><!-- #page -->


    <?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
