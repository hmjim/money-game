<?php get_header(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">

			<div class="content__main">

				<?php get_template_part( 'template-parts/page-header-small' ); ?>

				<div class="row">
					<?php
					$cpts = [ 'post', 'casino' ];
					if ( have_posts() ) :
						foreach ( $cpts as $cpt ) :
							while ( have_posts() ) : the_post();
								if ( $cpt == get_post_type() ) : ?>
									<?php get_template_part( 'template-parts/loop', $cpt ); ?>
								<?php endif;
							endwhile;
							rewind_posts();
						endforeach;
					else :
						get_template_part( 'template-parts/loop', 'none' );
					endif;
					?>
				</div>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>


