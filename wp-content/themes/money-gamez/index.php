<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner' ); ?>

<div class="content__wrapper">
	<div class="content container">
		<div class="content__inner">
			<div class="content__main">
				<?php $page_slots_title = get_field( 'page_slots_title', 'options' ); ?>
				<?php if ( $page_slots_title ) { ?>
				<h1><?= $page_slots_title; ?></h1>
				<?php } ?>

				<?php $page_slots_text = get_field( 'page_slots_text', 'options' ); ?>
				<?php if ( $page_slots_text ) { ?>
				<div class="page_descr the_content"><?= $page_slots_text; ?></div>
				<?php } ?>

				<?php get_template_part( 'template-parts/slots' ); ?>

				<?php $page_slots_content = get_field( 'page_slots_content', 'options' ); ?>
				<?php if ( ! is_paged() && $page_slots_content ) { ?>
				<div class="the_content the_content-bg"><?= $page_slots_content; ?></div>
				<?php } ?>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
