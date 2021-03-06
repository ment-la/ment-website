<?php
/**
 * name             - Wireframe title
 * cat_name         - Comma separated list for multiple categories (cat display name)
 * custom_class     - Space separated list for multiple categories (cat ID)
 * dependency       - Array of dependencies
 * is_content_block - (optional) Best in a content block
 *
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wireframe_categories = UNCDWF_Dynamic::get_wireframe_categories();
$data                 = array();

// Wireframe properties

$data[ 'name' ]             = esc_html__( 'Shop Metro', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'shop' ];
$data[ 'custom_class' ]     = 'shop';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'shop/Shop-Metro.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="1" top_padding="1" bottom_padding="1" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_percent="100" align_horizontal="align_center" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][uncode_index el_id="index-1" loop="size:12|order_by:date|post_type:product" gutter_size="1" product_items="media|featured|onpost|original|hide-sale|enhanced-atc,title,price|inline" screen_lg="1000" screen_md="600" screen_sm="480" single_text="overlay" single_width="3" images_size="one-one" single_back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" single_style="dark" single_overlay_opacity="50" single_text_visible="yes" single_overlay_anim="no" single_image_anim="no" single_h_align="center" single_v_position="bottom" single_reduced="three_quarter" single_reduced_mobile="yes" single_h_position="center" single_padding="1" single_text_reduced="yes" single_title_dimension="h6" single_border="yes" single_css_animation="zoom-in" single_animation_delay="200" post_matrix="matrix" matrix_amount="3" order_ids="19261,19235,18935,18936,19263,19262,18966,18965,18964,18963,18962,18937" matrix_items="eyIwX2kiOnsic2luZ2xlX3dpZHRoIjoiNiJ9fQ=="][/vc_column][/vc_row]
';

// Check if this wireframe is for a content block
if ( $data[ 'is_content_block' ] && ! $is_content_block ) {
	$data[ 'custom_class' ] .= ' for-content-blocks';
}

// Check if this wireframe requires a plugin
foreach ( $data[ 'dependency' ]  as $dependency ) {
	if ( ! UNCDWF_Dynamic::has_dependency( $dependency ) ) {
		$data[ 'custom_class' ] .= ' has-dependency needs-' . $dependency;
	}
}

vc_add_default_templates( $data );
