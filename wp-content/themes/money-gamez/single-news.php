<?php get_header(); ?>
<?php the_post(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">
			<main class="content__main">
				<article>

					<?php get_template_part( 'template-parts/page-header-small' ); ?>

					<div class="the_content the_content-bg"><?php the_content(); ?></div>

				</article>
			</main>

			<?php get_sidebar( 'slots' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
