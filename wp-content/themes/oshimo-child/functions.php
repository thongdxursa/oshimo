<?php
/**
 * Oshimo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Oshimo
 * @since Oshimo 1.0
 */
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;700&family=Overpass:wght@400;600;700&display=swap', false );    

if ( ! function_exists( 'oshimo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Oshimo 1.0
	 *
	 * @return void
	 */
	function oshimo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'oshimo_support' );

if ( ! function_exists( 'oshimo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Oshimo 1.0
	 *
	 * @return void
	 */
	function oshimo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'oshimo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'oshimo-style' );
		wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;700&family=Overpass:wght@400;600;700&display=swap', false ); 
	}

endif;

add_action( 'wp_enqueue_scripts', 'oshimo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

function my_recent_post()
 {
      global $post;

      $html = "";

      $my_query = new WP_Query( array(
           'post_type' => 'post',
		   'order'            => 'DESC'
      ));
	  $html .= '<style>
	  	.news_panel{
		  background-image: url("'.esc_url( get_template_directory_uri() ) . '/assets/images/news.png'.'"); 
		  background-size: 100% 100%; 
		  background-repeat: no-repeat; 
		  background-position: center center; 
		  max-height: 871px;
		  min-height: 100%;
	  	}
	  	.sub_title{
		  font-size: 16px; 
		  color: #5BCAF8;
		  font-weight: bold;
		  text-align: center;
		  font-family: "Noto Sans JP", sans-serif;
		}
		.header_title{
		  font-family: "Overpass", sans-serif;
		  font-size: 100px; 
		  font-weight: 500;
		  margin: 15px auto 60px;
		  text-align: center;
		  color: #222222;
		}
		.panel_display_list_news{
		  width: 1205px; 
		  margin: 0px auto;
		}
		.list_news{
		  list-style: none;
		  display: grid;
		  font-size: 14px;
		  max-height: 420px;
		  overflow-y: auto;
		  padding: 0px;
		}
		.list_news li{
		  background: #fff;
		  padding: 15px 10px 15px 30px;
		  margin-bottom: 15px;
		  height: 57px;
    	  display: flex;
		}
		.news_date{
		  width: 20%; 
		  float: left;
		  color: #5BCAF8; 
		  padding: 5px 0px;
		  font-weight: bold;
		  font-size: 16px;
		  font-family: "Overpass", sans-serif;
		}
		.news_title{
		  width: 80%;
		  float: left;
		  color: #222222;
		  font-size: 16px;
		  padding: 5px 0px;
		  font-family: "Noto Sans JP", sans-serif;
	  	}
		.item_link{
			width: 100%;
			margin: auto 0px;
		}
		@media only screen and (max-width: 600px) {
			.list_news{
				padding: 10px !important;
			}
			.panel_display_list_news {
				width: auto;
			}
			.list_news li {
				width: auto;
				padding: 10px;
				margin-bottom: 15px;
				height: auto !important;
			}
			.news_date {
				width: 30%;
			}
			.news_title {
				width: 70%;
			}
			.header_title{
				font-size: 50px !important; 
			}
		}
	</style>
	<div class= "news_panel">
	  <div style="padding: 5% 0px;">
		  <p class="sub_title">????????????</p>
		  <h1 class="header_title">NEWS</h1>
		  <div class="panel_display_list_news">
			  <ul class="list_news">';
      if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

           $html .= "<li>";
           $html .= "<a class=\"item_link\" href=\"" . get_permalink() . "\">";
           $html .= "<div class=\"news_date\">" . get_the_date( 'Y.m.d' ) . "</div>";
           $html .= "<div class=\"news_title\">" . get_the_title() . "</div>";
           $html .= "</a>";
           $html .= "</li>";

      endwhile; endif;
	  $html .= '</ul>
			</div>
		</div>
		</div>';
      return $html;
 }
 add_shortcode( 'recent_post_test', 'my_recent_post' );