<aside class="content__sidebar">

	<?php
	if ( is_home() ) :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );
		get_template_part( 'template-parts/widgets/links' );

	elseif ( is_page_template( 'template-casino.php' ) ) :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );
		get_template_part( 'template-parts/widgets/links' );

	elseif ( is_tax( 'developer' ) ) :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );
		get_template_part( 'template-parts/widgets/links' );

	elseif ( is_singular( 'casino' ) ) :

		//get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );
		get_template_part( 'template-parts/widgets/links' );

	else :

		get_template_part( 'template-parts/widgets/developers' );
		get_template_part( 'template-parts/widgets/top-slots' );
		get_template_part( 'template-parts/widgets/links' );
		//get_template_part( 'template-parts/widgets/related-slots' );
		//get_template_part( 'template-parts/widgets/slot-day' );
		//get_template_part( 'template-parts/widgets/top-casino' );
		//get_template_part( 'template-parts/widgets/news' );

	endif;
	?>

</aside>
