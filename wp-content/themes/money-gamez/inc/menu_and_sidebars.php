<?php

/* Register menus */
register_nav_menus(
	array(
		'main'     => 'Главное',
		'footer_1' => 'Нижнее 1',
		'footer_2' => 'Нижнее 2',
		'footer_3' => 'Нижнее 3',
		'footer_4' => 'Нижнее 4'
	)
);

/* Register sidebars */
register_sidebar(
	array(
		'name'          => 'Колонка слева',
		'id'            => "left-sidebar",
		'description'   => 'Обычная колонка в сайдбаре',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<span class="widgettitle">',
		'after_title'   => "</span>\n",
	)
);
