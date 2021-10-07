<?php
$banner       = get_field( 'banner', 'options' );
$banner_title = get_field( 'banner_title', 'options' );
$banner_descr = get_field( 'banner_descr', 'options' );
?>
<?php if ( $banner ) : ?>
<div class="banner__wrapper">
	<div class="banner container">
		<div class="banner__header">
			<?php if ( $banner_title ) { ?>
				<p class="banner__title"><?= $banner_title; ?></p>
			<?php } ?>
			<?php if ( $banner_descr ) { ?>
				<p class="banner__descr"><?= $banner_descr; ?></p>
			<?php } ?>
		</div>
		<div class="banner__inner">
			<?php foreach ( $banner as $item ) : ?>
				<?php
				$item_img_id = $item['img'];
				$item_img    = get_post( $item_img_id );
				$item_link   = $item['link'];
				$item_title  = $item['title'];
				?>
				<div class="banner__item">
					<a href="<?= $item_link; ?>" class="banner__item-inner">
						<span class="banner__item-thumb">
							<img src="<?= kama_thumb_src( 'w=100 &h=100', $item_img_id ); ?>" class="banner__item-thumb-img"
							     title="<?= $item_img->post_title; ?>"
							     alt="<?= get_post_meta( $item_img->ID, '_wp_attachment_image_alt', true ); ?>">
						</span>
						<p class="banner__item-title"><?= $item_title; ?></p>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>
