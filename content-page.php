<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package paddingtoncentral
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- Removed home page self-reference link. ~John -->
	<!--<header class="entry-header">
		<h1 class="entry-title"><?php //the_title(); ?></h1>
	</header>-->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'paddingtoncentral' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
        <!-- Removed edit page link. ~John -->
	<?php //edit_post_link( __( 'Edit', 'paddingtoncentral' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

        <div class="enter" id="enter-homepage">Enter</div>
        
</article><!-- #post-## -->
