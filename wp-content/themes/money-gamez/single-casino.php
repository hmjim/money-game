<?php get_header(); ?>
<?php the_post(); ?>

<?php
$casino_thumb        = get_post( get_post_thumbnail_id( get_the_ID() ) );
$casino_bonus        = get_field( 'bonus' );
$casino_pays         = get_the_terms( get_the_ID(), 'currency' );
$casino_soft         = get_field( 'devs' );
$casino_features     = get_field( 'features' );
$casino_site         = get_field( 'link' );
$casino_bgcolor      = get_field( 'bgcolor' );
?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">
			<div class="content__main no-sidebar">

				<?php get_template_part( 'template-parts/page-header-small' ); ?>

				<div class="casino-box">
					<div class="casino-box__main">
						<div class="casino-box__logo" style="background: <?= $casino_bgcolor; ?>">
							<img src="<?= kama_thumb_src( 'w=151 &nocrop=true', $casino_thumb->guid ); ?>" class="thumb"
							     title="<?= $casino_thumb->post_title; ?>"
							     alt="<?= get_post_meta( $casino_thumb->ID, '_wp_attachment_image_alt', true ); ?>">
						</div>

						<?php $rate_average = get_post_meta( $post->ID, 'ratings_average', true ) ? get_post_meta( $post->ID, 'ratings_average', true ) : 0; ?>
						<div class="casino-box__rate">
							<div class="casino-box__rate-average"><?= number_format( $rate_average, 1, '.', ' ' ); ?></div>
							<?php if ( function_exists( 'the_ratings' ) ) {
								the_ratings();
							} ?>
						</div>

						<div class="casino-box__btn"><a href="<?php echo $casino_site; ?>" class="btn btn-site">Играть в казино</a></div>
					</div>

					<div class="casino-box__options">
						<?php if ( $casino_bonus ) : ?>
							<div class="casino-box__options-item casino-box__options-bonus">
								<p class="casino-box__options-title">Приветственный бонус:</p>
								<ul class="casino-box__options-list">
									<li><?= $casino_bonus; ?></li>
								</ul>
							</div>
						<?php endif; ?>

						<?php if ( $casino_pays ) : ?>
							<div class="casino-box__options-item casino-box__options-pays">
								<p class="casino-box__options-title">Способы выплаты:</p>
								<ul class="casino-box__options-list">
									<?php foreach ( $casino_pays as $term ): ?>
										<?php $term_logo = get_field( 'logo', $term ); ?>
										<li>
											<img src="<?= kama_thumb_src( 'h=30 &nocrop=true', $term_logo['ID'] ); ?>" title="<?= $term_logo['title']; ?>"
											     alt="<?= $term_logo['alt']; ?>">
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>

						<?php if ( $casino_soft ) : ?>
							<div class="casino-box__options-item casino-box__options-devs">
								<p class="casino-box__options-title">Софт:</p>
								<ul class="casino-box__options-list">
									<?php foreach ( $casino_soft as $term_id ): ?>
										<?php
										$term      = get_term( $term_id, 'developer' );
										$term_logo = get_field( 'logo', $term );
										$term_link = get_term_link( $term_id, 'developer' );
										?>
										<li>
											<a href="<?= $term_link; ?>">
												<img src="<?= kama_thumb_src( 'h=30 &nocrop=true', $term_logo['ID'] ); ?>" title="<?= $term_logo['title']; ?>"
												     alt="<?= $term_logo['alt']; ?>">
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>

						<?php if ( $casino_features ) : ?>
							<div class="casino-box__options-item casino-box__options-features">
								<p class="casino-box__options-title">Особенности:</p>
								<ul class="casino-box__options-list">
									<?php foreach ( $casino_features as $feature ): ?>
										<li><?= $feature['text']; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="content__wrapper no-padding">
	<div class="content container">
		<div class="content__inner">

			<div class="content__main">
				<div class="the_content the_content-bg"><?php the_content(); ?></div>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>

