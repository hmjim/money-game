<div class="casino">
	<div class="casino__inner">
		<?php
		$casino_link  = get_post_permalink();
		$casino_thumb = get_post( get_post_thumbnail_id() );
		$percent      = get_field( 'rating' );
		?>
		<a href="<?= $casino_link; ?>" class="casino__logo">
			<div class="sdfsdf"></div>
			<img src="<?= kama_thumb_src( 'w=121 &nocrop=true', $casino_thumb->guid ); ?>" class="thumb"
			     title="<?= $casino_thumb->post_title; ?>"
			     alt="<?= get_post_meta( $casino_thumb->ID, '_wp_attachment_image_alt', true ); ?>">
		</a>

		<?php $rate_average = get_post_meta( $post->ID, 'ratings_average', true ) ?  get_post_meta( $post->ID, 'ratings_average', true ) : 0; ?>
		<div class="casino__rating">
			<div class="casino__rating-average"><?= number_format($rate_average, 1, '.',' '); ?></div>
			<?php if ( function_exists( 'the_ratings' ) ) the_ratings(); ?>
		</div>

		<div class="casino__bonus"><?php the_field( 'bonus' ); ?></div>

		<?php $features = get_field('features'); ?>
		<ul class="casino__features">
			<?php foreach ($features as $feature) { ?>
				<li><?= $feature['text']; ?></li>
			<?php } ?>
		</ul>

		<div class="casino__nav">
			<a href="<?php the_field( 'link' ); ?>" class="btn btn-site" title="Играть в казино" target="_blank">Играть</a>
			<a href="<?php the_permalink(); ?>" class="btn btn-review"  title="Обзор и отзывы" >Обзор</a>
		</div>

	</div>
</div>
