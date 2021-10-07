<?php
/*
Template Name: Все казино
*/
?>
<?php get_header(); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">

			<div class="content__main">

				<?php get_template_part( 'template-parts/page-header-small' ); ?>

				<div class="the_content"><?php the_field( 'top_text' ); ?></div>

				<div class="row casino__items">
					<?php
					$casino_top = get_field( 'casino_rating', 'options' );
					if ( $casino_top ) :
						foreach ( $casino_top as $casino ) :

							$post = get_post( $casino['casino'] );
							setup_postdata( $post );
							get_template_part( 'template-parts/loop-casino' );
						endforeach;
						wp_reset_postdata();
					else :
						get_template_part( 'template-parts/loop-none' );
					endif;
					?>
				</div>

				<div class="the_content the_content-bg"><?php the_content(); ?></div>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
	<script>
	// (function($){
		// $(document).ready(function(){
			// console.log($('.casino__inner').length);
			// for(iii = 0; iii <= $('.casino__inner').length; iii++){
				// $('.casino__inner:eq(' + iii + ') .sdfsdf').html(iii+1);

			// }
		// });
	// })(jQuery);
	</script>
	<style>
.casino__logo::after, .casino__logo::before {
    position: absolute;
    width: 35px;
	font-size: 30px;
}
	</style>
</div>

<?php get_footer(); ?>
