<?php

/*
Plugin Name: AzonBox
Plugin URI:  https://wordpress.org/plugins/azonbox/
Description: Add custom content box for amazon product to your post or page using Editor button.
Version:     1.0.1
Author:      Marketever
Author URI:  http://marketever.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*
 * Plugin Main css including.
 */
function ce_main_style_css_enque(){
	wp_enqueue_style( 'ce-content-main-css', plugins_url('/css/style.css', __FILE__));
}
add_action('wp_footer', 'ce_main_style_css_enque');

function ce_content_box_shortcodes_mce_css() {
	wp_enqueue_style('ce-content-icon-css', plugins_url('/css/icon.css', __FILE__) );	
}
add_action( 'admin_enqueue_scripts', 'ce_content_box_shortcodes_mce_css' );




/*
 * shortcode style one attribute function
 * Return ob_get_clean().
 */
function ce_content_box1_shortcode($atts) {
    

	$ce_atts = shortcode_atts( array(
			'tagt' => 'Tag Text',
			'imgurl' => 'http://placehold.it/200x200/',
			'imgdsc' => 'Demo Image disc.',
			'lnktxt' => 'Save Something.',
			'linkl' => '#',
			'headline' => 'A Great headline',
			'subhline' => 'text is awesome and gorgious',
			'text' => 'a great discreaption on a featured product. just think about it.',
	), $atts );
	
	ob_start();
	
	?>
	
	<div class="ce-content">
		<div class="ce-inner-left">
			<div class="ce-inr-tag">
				<p class="ce-tag-para"><?php echo wp_kses_post( $ce_atts[ 'tagt' ] ); ?></p>
			</div>
			<a href="<?php echo wp_kses_post( $ce_atts[ 'linkl' ] ); ?>" class="ce-img-link">
				<img src="<?php echo wp_kses_post( $ce_atts[ 'imgurl' ] ) ; ?>" alt="product" class="ce-inn-img">
			</a>
			<p class="ce-img-disc"><?php echo wp_kses_post( $ce_atts[ 'imgdsc' ] ) ; ?></p>
			<a href="<?php echo  wp_kses_post( $ce_atts[ 'linkl' ] ) ; ?>" class="ce-button"><?php echo wp_kses_post( $ce_atts[ 'lnktxt' ] )  ; ?></a>
		</div>
		<div class="ce-inner-right">
			<a href="<?php echo wp_kses_post( $ce_atts[ 'linkl' ] )  ; ?>" class="ce-heading-right">
				<h3 class="ce-right-h3"><?php echo wp_kses_post( $ce_atts[ 'headline' ] ) ; ?></h3>
				<p class="ce-right-link"><?php echo wp_kses_post( $ce_atts[ 'subhline' ] )  ; ?></p>
			</a>
			<p class="ce-text-right"><?php echo wp_kses_post( $ce_atts[ 'text' ] )  ; ?></p>
		</div>
		<div class="ce-clear-fix"></div>
	</div>
	
<?php
	return ob_get_clean();
}
 
/*
 * shortcode two attribute function
 * Return output.
 */
function ce_content_box2_shortcode($atts) {


	$ce_atts = shortcode_atts( array(
			'imgurl' => 'http://placehold.it/400x200/',
			'imgdsc' => 'Demo Image disc.',
			'lnktxt' => 'Save Something.',
			'linkl' => '#',
			'headline' => 'A Great headline',
			'subhline' => 'text is awesome and gorgious',
			'text' => 'a great discreaption on a featured product. just think about it.',
	), $atts );

	ob_start();

	?>
	
	<div class="ce-content ce-content-full">
		<div class="ce-inner-left ce-inner-left-2">
			
			<a href="<?php echo wp_kses_post( $ce_atts[ 'linkl' ] ); ?>" class="ce-img-link">
				<img src="<?php echo wp_kses_post( $ce_atts[ 'imgurl' ] ) ; ?>" alt="product" class="ce-inn-img">
			</a>
			
			
		</div>
		<div class="ce-inner-right ce-inner-right-2">
			<a href="<?php echo wp_kses_post( $ce_atts[ 'linkl' ] )  ; ?>" class="ce-heading-right">
				<h3 class="ce-right-h3"><?php echo wp_kses_post( $ce_atts[ 'headline' ] ) ; ?></h3>
				<p class="ce-right-link"><?php echo wp_kses_post( $ce_atts[ 'subhline' ] )  ; ?></p>
			</a>
			<p class="ce-text-right"><?php echo wp_kses_post( $ce_atts[ 'text' ] )  ; ?></p>
			<a href="<?php echo  wp_kses_post( $ce_atts[ 'linkl' ] ) ; ?>" class="ce-button ce-button-2"><?php echo wp_kses_post( $ce_atts[ 'lnktxt' ] )  ; ?></a>
			<p class="ce-img-disc"><?php echo wp_kses_post( $ce_atts[ 'imgdsc' ] ) ; ?></p>
		</div>
		<div class="ce-clear-fix"></div>
	</div>
	
<?php
	return ob_get_clean();
}

 
/*
 * shortcode Three attribute function
 * Return output.
 */
function ce_content_box3_shortcode($atts) {


	$ce_atts = shortcode_atts( array(
			'imgurl' => 'http://placehold.it/180x150/',
			'imgdsc' => 'Demo Image disc.',
			'lnktxt' => 'Save Something.',
			'linkl' => '#',
			'headline' => 'A Great headline',
			'subhline' => 'text is awesome and gorgious',
			
	), $atts );

	ob_start();

	?>
	
	<div class="ce-content ce-content-full ce-content-border">
		<div class="ce-inner-left ce-inner-right-2">
			
			<a href="<?php echo wp_kses_post( $ce_atts[ 'linkl' ] ); ?>" class="ce-img-link">
				<img src="<?php echo wp_kses_post( $ce_atts[ 'imgurl' ] ) ; ?>" alt="product" class="ce-inn-img">
			</a>
			
			
		</div>
		<div class="ce-inner-right ce-inner-left-2">
			<a href="<?php echo wp_kses_post( $ce_atts[ 'linkl' ] )  ; ?>" class="ce-heading-right">
				<h3 class="ce-right-h3 ce-heading-3"><?php echo wp_kses_post( $ce_atts[ 'headline' ] ) ; ?></h3>
				<p class="ce-right-link ce-right-para-3"><?php echo wp_kses_post( $ce_atts[ 'subhline' ] )  ; ?></p>
			</a>
			<p class="ce-text-right"><?php echo wp_kses_post( $ce_atts[ 'text' ] )  ; ?></p>
			<p class="ce-button-fix"> <a href="<?php echo  wp_kses_post( $ce_atts[ 'linkl' ] ) ; ?>" class="ce-button"><?php echo wp_kses_post( $ce_atts[ 'lnktxt' ] )  ; ?></a></p>
			<p class="ce-img-disc"><?php echo wp_kses_post( $ce_atts[ 'imgdsc' ] ) ; ?></p>
		</div>
		<div class="ce-clear-fix"></div>
	</div>
	
<?php
	return ob_get_clean();
}


/*
 * shortcode Registering.
 */
function ce_content_box_register_shortcode() {
    add_shortcode( 'azonbox1', 'ce_content_box1_shortcode' );
    add_shortcode( 'azonbox2', 'ce_content_box2_shortcode' );
    add_shortcode( 'azonbox3', 'ce_content_box3_shortcode' );
    
}
 
add_action( 'init', 'ce_content_box_register_shortcode' );




// Filter Functions with Hooks
function ce_content_box_mce_button() {
	// Check if user have permission
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// Check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'ce_content_box_tinymce_plugin' );
		add_filter( 'mce_buttons', 'ce_content_boxregister_mce_button' );
	}
}
add_action('admin_head', 'ce_content_box_mce_button');

// Function for new button
function ce_content_box_tinymce_plugin( $plugin_array ) {
	$plugin_array['ce_content_box_mce_button'] = plugins_url('/js/plugin.js', __FILE__);
	return $plugin_array;
}

// Register new button in the editor
function ce_content_boxregister_mce_button( $buttons ) {
	array_push( $buttons, 'ce_content_box_mce_button' );
	return $buttons;
}

