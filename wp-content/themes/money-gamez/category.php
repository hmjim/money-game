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

				<?php get_template_part( 'template-parts/slots' ); ?>

				<?php if ( ! is_paged() ) { ?>
				<div class="the_content the_content-bg"><?php echo category_description(); ?></div>
				<?php } ?>

			</main>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
