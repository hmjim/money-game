<?php get_header(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">
			<main class="content__main">

				<?php get_template_part( 'template-parts/page-header-small' ); ?>

				<?php
				$term = get_queried_object();
				$text = get_field( 'top_text', $term );
				?>
				<?php if ( $text && ! is_paged() ) { ?>
				<div class="the_content"><?php the_field( 'top_text', $term ); ?></div>
				<?php } ?>

				<div class="section">
					<div class="row">

						<?php if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/loop-slot' );
							endwhile;
						else :
							get_template_part( 'template-parts/loop-none' );
						endif; ?>

					</div>

					<?php if ( function_exists( 'pagination' ) ) {
						pagination();
					} ?>
				</div>

				<?php if ( ! is_paged() ) { ?>
					<?php $description = term_description(); ?>
					<?php if ( $description != null ) : ?>
						<div class="the_content the_content-bg"><?= $description; ?></div>
					<?php endif; ?>
				<?php } ?>
			</main>

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
