<?php
/**
 * @package Duster
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<?php
				printf( __( '<span class="sep">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'duster' ),
					get_permalink(),
					get_the_date( 'c' ),
					get_the_date(),
					get_author_posts_url( get_the_author_meta( 'ID' ) ),
					esc_attr( sprintf( __( 'View all posts by %s', 'duster' ), get_the_author() ) ),
					get_the_author()
				);
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'duster' ) ); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php if ( post_password_required() ) : ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'duster' ) ); ?>

			<?php else :
				$pattern = get_shortcode_regex();
				preg_match( "/$pattern/s", get_the_content(), $match );
				$atts    = isset( $match[3] ) ? shortcode_parse_atts( $match[3] ) : array();
				$images  = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : false;

				if ( ! $images ) :
					$images = get_posts( array(
						'post_parent'      => get_the_ID(),
						'fields'           => 'ids',
						'post_type'        => 'attachment',
						'post_mime_type'   => 'image',
						'orderby'          => 'menu_order',
						'order'            => 'ASC',
						'numberposts'      => 999,
						'suppress_filters' => false
					) );
				endif;

				if ( $images ) :
					$total_images = count( $images );
					$image        = array_shift( $images );
				?>
				<figure class="gallery-thumb">
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image, 'thumbnail' ); ?></a>
				</figure><!-- .gallery-thumb -->
	
				<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'duster' ),
						'href="' . get_permalink() . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'duster' ), the_title_attribute( 'echo=0' ) ) ) . '" rel="bookmark"',
						number_format_i18n( $total_images )
					); ?></em></p>
			<?php endif; ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'duster' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in', 'duster' ); ?></span> <?php the_category( ', ' ); ?></span>
		<?php the_tags( '<span class="sep"> | </span> <span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __( 'Tagged', 'duster' ) . '</span> ', ', ', '</span>' ); ?>

		<?php if ( comments_open() ) : ?>
		<span class="sep"> | </span>
		<span class="comments-link"><?php comments_popup_link( __( '<span class="leave-reply">Leave a reply</span>', 'duster' ), __( '<b>1</b> Reply', 'duster' ), __( '<b>%</b> Replies', 'duster' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'duster' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- #entry-meta -->
</article><!-- #post-## -->
