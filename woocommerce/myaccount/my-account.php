<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

?>

<?php 
	global $current_user;
?>

<div class="w-full h-20 fixed text-gray-400 bg-gray-900 z-10 flex items-center justify-between">
	<div class="w-1/2 h-20 flex items-center justify-start mr-9">
		<div class="w-14 h-14 flex items-center justify-center flex-col gap-2 pointer">
			<div class="w-10 h-1 bg-white"></div>
			<div class="w-10 h-1 bg-white"></div>
			<div class="w-10 h-1 bg-white"></div>
		</div>
		<?php get_template_part("/inc/template/header/header_top/search"); ?>
	</div>
	<div class="w-1/2 h-20 flex items-center justify-end ml-9 gap-2">
		<div class="w-10 h-14 flex items-center justify-center">
			<i class="fa-solid fa-envelope icon"></i>
		</div>
		<div class="w-10 h-14 flex items-center justify-center">
			<i class="fa-solid fa-bell icon"></i>
		</div>
		<div class="w-14 h-14 flex items-center justify-center border-2 border-solid border-white rounded-full">
				<?php 
					echo get_avatar( $current_user->ID , $size = '80' );
				?>
		</div>
	</div>
</div>
<div class="w-full flex items-start justify-start relative top-20">
	<?php
	/**
	 * My Account navigation.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_navigation' ); 
	?>
	<div class="woocommerce-MyAccount-content">
		<?php
			/**
			 * My Account content.
			 *
			 * @since 2.6.0
			 */
			do_action( 'woocommerce_account_content' );
		?>
	</div>
</div>
