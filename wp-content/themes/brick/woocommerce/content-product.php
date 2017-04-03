<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
//if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 8 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
	

	
?>

<li <?php post_class( $classes ); ?>>

<a href="<?php the_permalink(); ?>" alt="product link will go here">
                 <?php
      /**
       * woocommerce_before_shop_loop_item_title hook
       *
       * @hooked woocommerce_show_product_loop_sale_flash - 10
       * @hooked woocommerce_template_loop_product_thumbnail - 10
       */
      do_action( 'woocommerce_before_shop_loop_item_title' );
    ?><?php //do_action('woocommerce_after_shop_loop_item')?>
    
        
                  <h3><?php the_title(); ?></h3>
                  
                  <?php //do_action( 'woocommerce_after_shop_loop_item_title' ); ?>

			<div class="rating clearfix">
	            <?php
	            	if($rating_html = $product->get_rating_html()){
	            		echo trim( $product->get_rating_html() );

	            	}else{
	            		echo '<div class="star-rating"></div>';
	            	}
	             ?>
	        </div>
		<span class="price">
		<?php echo ($product->get_price_html()); ?>
		</span>
                  
                </a>
                <div class="short-text hidden"><?php echo the_excerpt();?></div>
                <div class="product-button">
                <a rel="nofollow" href="/bricks/shop/?add-to-cart=<?php echo  esc_attr($product->id);?>" data-quantity="1" data-product_id="<?php echo  esc_attr($product->id);?>" data-product_sku="" class="product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart"><i class="fa fa-shopping-basket"></i>Add to cart</a>   
                  <!--<a href="#" class="add-to-cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>-->
                  <a href="<?php the_permalink(); ?>" class="product-detail"><i class="fa fa-file-text-o"></i> View detail</a>
                </div>
                
                <a href="#" class="ajax button quick-btn quick-view" pro_id="<?php echo  esc_attr($product->id);?>" action="ph_quick_ajax_submit" title="Quick View">Quick View</a>
<?php //woocommerce_template_loop_add_to_cart(); ?>
</li>
