<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<?php 
	global $current_user;
?>

<nav class="flex flex-col items-start w-1/6 h-screen overflow-hidden text-gray-400 bg-gray-900 fixed">
		<a class="flex items-center justify-start w-full px-3 mt-3" href="#">
			<div class="w-20 h-20 rounded-full border-gray-700 border-2 border-solid">
				<?php 
					echo get_avatar( $current_user->ID , $size = '80' );
				?>
			</div>
			<p class="text-base text-gray-400 mr-2"><?php echo $current_user->display_name; ?></p>
		</a>
		<div class="w-full px-2">
			<div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
				<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
					<a class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?> flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
						<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
						</svg>
						<span class="ml-2 text-sm font-medium mr-2"><?php echo esc_html( $label ); ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
		<a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">
			<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			<span class="mr-2 text-sm font-medium">حساب کاربری</span>
		</a>	
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
