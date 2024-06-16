<?php

if ( ! function_exists( 'tenupchallenge_setup' ) ) {

	function tenupchallenge_setup() {

		add_theme_support( 'title-tag' );

		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'tenupchallenge' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
        'search-form',
				'style',
				'script',
				'navigation-widgets',
			)
    );

		add_theme_support( 'wp-block-styles' );

		$editor_stylesheet_path = './assets/css/style-editor.css';
		add_editor_style( $editor_stylesheet_path );

		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Normal', 'tenupchallenge' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'tenupchallenge' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'tenupchallenge' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'tenupchallenge' ),
					'size'      => 28,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'tenupchallenge' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'tenupchallenge' ),
					'size'      => 64,
					'slug'      => 'extra-large',
				),
			)
		);

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'custom-line-height' );

		add_theme_support( 'link-color' );

		add_theme_support( 'custom-spacing' );

		add_filter( 'rss_widget_feed_link', '__return_empty_string' );
	}
}
add_action( 'after_setup_theme', 'tenupchallenge_setup' );