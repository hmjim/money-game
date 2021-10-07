<?php
$count = get_field( 'sidebar_top_slots_count', 'options' ) ? get_field( 'sidebar_top_slots_count', 'options' ) : - 1;
$title = get_field( 'sidebar_top_slots_title', 'options' );
$posts = get_posts( array(
	'posts_per_page' => $count,
	'post_type'      => 'post',
	'meta_key'       => 'views',
	'order'          => 'DESC',
	'orderby'        => 'meta_value_num'
) );
if ( $posts ) : ?>
	<div class="custom-widget custom-widget__slot">
		<p class="custom-widget__title">
			<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13 0C5.83158 0 0 5.83158 0 13C0 20.1684 5.83158 26 13 26C20.1684 26 26 20.1684 26 13C26 5.83158 20.1684 0 13 0ZM20.5714 10.881L19.3938 17.7418C19.3267 18.1318 18.9887 18.4167 18.5933 18.4167H7.40675C7.01133 18.4167 6.67333 18.1318 6.60617 17.7418L5.42858 10.881C5.37658 10.5809 5.49792 10.2765 5.74167 10.0934C5.9865 9.90925 6.31042 9.88 6.58558 10.0133L9.72075 11.5397L12.2904 6.91708C12.5764 6.40033 13.4247 6.40033 13.7107 6.91708L16.2803 11.5397L19.4155 10.0133C19.6896 9.88 20.0146 9.90925 20.2594 10.0934C20.5021 10.2765 20.6234 10.5809 20.5714 10.881Z" fill="#375A9E"/>
			</svg>
			<span><?= $title; ?></span>
		</p>

		<ul class="custom-widget__list custom-widget__slot-list">
			<?php $i = 1;
			foreach ( $posts as $post ) :
				setup_postdata( $post );
				$rate_average = get_post_meta( $post->ID, 'ratings_average', true );
				$thumb        = get_post( get_post_thumbnail_id() );
				$image_alt    = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
				?>
				<li class="custom-widget__slot-item-wrap">
					<a href="<?php the_permalink(); ?>" class="custom-widget__slot-item">
						<span class="custom-widget__slot-thumb">
							<img src="<?= kama_thumb_src( 'w=107 &h=66' ); ?>" title="<?= $thumb->post_title; ?>" alt="<?= $image_alt; ?>">
						</span>

						<span class="custom-widget__slot-info">
							<span class="custom-widget__slot-position">#<?= $i; ?></span>
							<span class="custom-widget__slot-rate">
								<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.5 0L7.11641 3.2752L10.7308 3.80041L8.11541 6.3498L8.73282 9.94959L5.5 8.25L2.26718 9.94959L2.88459 6.3498L0.269189 3.80041L3.88359 3.2752L5.5 0Z" fill="white"/>
								</svg>
								<?= $rate_average[0]; ?>
							</span>
							<span class="custom-widget__slot-title"><?php the_title(); ?></span>
						</span>
					</a>
				</li>
			<?php $i++;
			endforeach;
			wp_reset_postdata(); ?>
		</ul>
	</div>
<?php endif; ?>
