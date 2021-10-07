<?php
/*
Template Name: Избранное
*/
?>
<?php get_header(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">

			<div class="content__main">

				<?php get_template_part( 'template-parts/page-header-small' ); ?>

				<div class="row">
					<?php
					$post_ids = get_user_favorites( get_current_user_id() );
					if ( $post_ids ) :
						foreach ( $post_ids as $post_id ) :
							global $post;
							$post = $post_id;
							setup_postdata( $post );
							get_template_part( 'template-parts/loop-slot' );
						endforeach;
					else :
						get_template_part( 'template-parts/loop-none' );
					endif;
					?>
				</div>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
