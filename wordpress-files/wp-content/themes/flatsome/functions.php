<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
/*
 * Thay chữ Sale thành phần trăm (%) giảm giá
 * Author: levantoan.com
 */
add_filter('woocommerce_sale_flash', 'devvn_woocommerce_sale_flash', 10, 3);
function devvn_woocommerce_sale_flash($html, $post, $product){
    return '<span class="onsale"><span>' . devvn_presentage_bubble($product) . '</span></span>';
}
 
function devvn_presentage_bubble( $product ) {
    $post_id = $product->get_id();
 
    if ( $product->is_type( 'simple' ) || $product->is_type( 'external' ) ) {
        $regular_price  = $product->get_regular_price();
        $sale_price     = $product->get_sale_price();
        $bubble_content = round( ( ( floatval( $regular_price ) - floatval( $sale_price ) ) / floatval( $regular_price ) ) * 100 );
    } elseif ( $product->is_type( 'variable' ) ) {
        if ( $bubble_content = devvn_percentage_get_cache( $post_id ) ) {
            return devvn_percentage_format( $bubble_content );
        }
 
        $available_variations = $product->get_available_variations();
        $maximumper           = 0;
 
        for ( $i = 0; $i < count( $available_variations ); ++ $i ) {
            $variation_id     = $available_variations[ $i ]['variation_id'];
            $variable_product = new WC_Product_Variation( $variation_id );
            if ( ! $variable_product->is_on_sale() ) {
                continue;
            }
            $regular_price = $variable_product->get_regular_price();
            $sale_price    = $variable_product->get_sale_price();
            $percentage    = round( ( ( floatval( $regular_price ) - floatval( $sale_price ) ) / floatval( $regular_price ) ) * 100 );
            if ( $percentage > $maximumper ) {
                $maximumper = $percentage;
            }
        }
 
        $bubble_content = sprintf( __( '%s', 'woocommerce' ), $maximumper );
 
        devvn_percentage_set_cache( $post_id, $bubble_content );
    } else {
        $bubble_content = __( 'Sale!', 'woocommerce' );
 
        return $bubble_content;
    }
 
    return devvn_percentage_format( $bubble_content );
}
 
function devvn_percentage_get_cache( $post_id ) {
    return get_post_meta( $post_id, '_devvn_product_percentage', true );
}
 
function devvn_percentage_set_cache( $post_id, $bubble_content ) {
    update_post_meta( $post_id, '_devvn_product_percentage', $bubble_content );
}
 
//Định dạng kết quả dạng -{value}%. Ví dụ -20%
function devvn_percentage_format( $value ) {
    return str_replace( '{value}', $value, '-{value}%' );
}
 
// Xóa cache khi sản phẩm hoặc biến thể thay đổi
function devvn_percentage_clear( $object ) {
    $post_id = 'variation' === $object->get_type()
        ? $object->get_parent_id()
        : $object->get_id();
 
    delete_post_meta( $post_id, '_devvn_product_percentage' );
}
add_action( 'woocommerce_before_product_object_save', 'devvn_percentage_clear' );