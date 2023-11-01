<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<section class="w-full p-8 flex flex-col items-start justify-start">
	<?php get_template_part("/inc/template/account/map"); ?>
	<div class="w-full h-64 flex items-center justify-center mt-4 gap-3">
		<div class="w-1/4 h-60 bg-white rounded-2xl flex flex-col justify-start items-start">
			<p class="w-11/12 h-14 flex justify-end items-center mt-2 font-bold text-lg">
				مدت عضویت شما		
			</p>
			<div class="w-11/12 h-24 flex justify-start items-center mt-2">
				<div class="w-1/4 h-full rounded-2xl flex justify-center items-center bg-red-500 mr-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:white;"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
				</div>	
				<div class="w-3/4 h-full flex justify-end items-center">
					<p class="text-box">
						<?php echo human_time_diff( strtotime(get_userdata(get_current_user_id( ))->user_registered) ); ?>
					</p>
				</div>		
			</div>
			<div class="w-11/12 h-12 flex justify-start items-center mt-2">
				<i class="fa-solid fa-thumbs-up icon-box"></i>
				<p class="mr-3 mt-1 text-green-700 font-bold">ثبت نام موفقیت آمیز</p>
			</div>
		</div>
		<div class="w-1/4 h-60 bg-white rounded-2xl flex flex-col justify-start items-start">
			<p class="w-11/12 h-14 flex justify-end items-center mt-2 font-bold text-lg">
				محصولات خریداری شده	
			</p>
			<div class="w-11/12 h-24 flex justify-start items-center mt-2">
				<div class="w-1/4 h-full rounded-2xl flex justify-center items-center bg-orange-500 mr-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
				</div>	
				<div class="w-3/4 h-full flex justify-end items-center">
					<p class="text-box">
						<?php
							$wwh_user_id = get_current_user_id();
							$wwh_upat = wc_get_customer_total_spent($wwh_user_id);
							$wwh_upat = substr($wwh_upat, 0, strpos($wwh_upat, "."));
							if ($wwh_upat != 0) {?>
							<?php echo $wwh_upat; echo get_woocommerce_currency_symbol(); ?>
								<?php
							} else {
								echo 'شما هیچ سفارشی نداشته اید';
							}
						?>
					</p>
				</div>		
			</div>
			<div class="w-11/12 h-12 flex justify-start items-center mt-2">
				<i class="fa-solid fa-cart-shopping icon-box"></i>
				<p class="mr-3 mt-1 text-green-700 font-bold">محصولاتی که خریداری کرده اید</p>
			</div>
		</div>
		<div class="w-1/4 h-60 bg-white rounded-2xl flex flex-col justify-start items-start">
			<p class="w-11/12 h-14 flex justify-end items-center mt-2 font-bold text-lg">
				نظرات شما		
			</p>
			<div class="w-11/12 h-24 flex justify-start items-center mt-2">
				<div class="w-1/4 h-full rounded-2xl flex justify-center items-center bg-green-500 mr-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
				</div>	
				<div class="w-3/4 h-full flex justify-end items-center">
					<p class="text-box">
						<?php
							global $wpdb, $post, $current_user;
							wp_get_current_user();
							$userId = $current_user->ID;
							$where = 'WHERE comment_approved = 1 AND user_id = ' . $userId;
							$comment_count = $wpdb->get_var("SELECT COUNT( * ) AS total FROM {$wpdb->comments}
															{$where}");
							echo $comment_count;
						?>
					</p>
				</div>		
			</div>
			<div class="w-11/12 h-12 flex justify-start items-center mt-2">
				<i class="fa-solid fa-message icon-box"></i>
				<p class="mr-3 mt-1 text-green-700 font-bold">تعداد نظرات ارسال شده توسط شما</p>
			</div>
		</div>
		<div class="w-1/4 h-60 bg-white rounded-2xl flex flex-col justify-start items-start">
			<p class="w-11/12 h-14 flex justify-end items-center mt-2 font-bold text-lg">
				کیف پول	
			</p>
			<div class="w-11/12 h-24 flex justify-start items-center mt-2">
				<div class="w-1/4 h-full rounded-2xl flex justify-center items-center bg-blue-500 mr-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>
				</div>	
				<div class="w-3/4 h-full flex justify-end items-center">
					<p class="text-box">
						4 سال
					</p>
				</div>		
			</div>	
			<div class="w-11/12 h-12 flex justify-start items-center mt-2 mr-1">
				<i class="fa-solid fa-wallet icon-box"></i>
				<p class="mr-3 mt-1 text-green-700 font-bold">مبلغ پول داخل کیف پول شما</p>
			</div>
		</div>
	</div>
	<div class="w-full h-auto flex items-start justify-start mt-4 gap-3">
		<?php get_template_part("/inc/template/account/post_last"); ?>
		<?php get_template_part("/inc/template/account/product_last"); ?>
	</div>
</section>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
