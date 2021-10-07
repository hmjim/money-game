<?php get_header(); ?>
<?php the_post(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">

			<main class="content__main">
				<article>

					<?php get_template_part( 'template-parts/page-header-small' ); ?>

					<div class="the_content"><?php the_field( 'seo_text' ); ?></div>

					<?php
					$home_link         = get_field( 'home_link' );
					$slot_rating_title = get_field( 'slot_rating_title', 'options' );
					$slot_btn_text     = get_field( 'slot_btn_text', 'options' );
					?>
					<div class="main-slot__wrapper">
						<div class="main-slot js-slot">
							<div class="main-slot__inner">
								<iframe src="<?php the_field( 'iframe' ) ?>" width="100%" height="477"></iframe>

								<div class="main-slot__nav">
									<div class="main-slot__nav-favorite"><?= get_favorites_button(get_the_ID()); ?></div>

									<div class="main-slot__nav-rating">
										<div class="main-slot__nav-rating-title"><?= $slot_rating_title; ?></div>
										<?php if ( function_exists( 'the_ratings' ) ) the_ratings(); ?>
									</div>

									<div class="main-slot__nav-maximize btn-maximize"></div>
								</div>
							</div>
							<div class="main-slot__btn">
								<a href="/go/slots" class="btn btn-main btn-fullwidth"><span><?= $slot_btn_text; ?></span></a>
							</div>
						</div>
					</div>

					<div class="the_content the_content-bg">
						<?php the_content(); ?>
					</div>
				</article>
			</main>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
