<?php
/**
 * Site Banner Template.
 *
 * @since 1.0.0
 * @package The_Ball_2014
 */

?><!-- assets/includes/site_banner.php -->

<div id="site_banner" class="clearfix">

	<div id="site_banner_inner">

		<?php $network_black = locate_template( 'assets/includes/network.php' ); ?>
		<?php if ( $network_black ) : ?>
			<?php load_template( $network_black ); ?>
		<?php endif; ?>

		<div id="splash">

			<a href="/wp-content/themes/theball/assets/images/interface/it_genoa_ball.png"><img src="/wp-content/themes/theball/assets/images/interface/it_genoa_ball.png" alt="<?php esc_attr_e( 'The Ball 2014', 'theball2014' ); ?>'" title="<?php esc_attr_e( 'The Ball 2014', 'theball2014' ); ?>" width="200" height="140" class="alignnone size-medium wp-image-122" /></a>

		</div><!-- /splash -->

		<div id="banner_copy">

			<h2><?php echo sprintf( __( 'Welcome to %s', 'theball2014' ), get_bloginfo( 'title' ) ); ?></h2>

			<p><?php esc_html_e( '9th January 2014 was the 150th anniversary of the first official game of football to FA rules. On that day, The Ball 2014 kicked off from Battersea Park in London, where that game was played, and travelled across Europe and the Americas to the World Cup in Brazil.', 'theball2014' ); ?></p>

		</div><!-- /banner_copy -->

	</div><!-- /site_banner_inner -->

</div><!-- /site_banner -->

<div id="cols" class="clearfix">
<div class="cols_inner">

	<?php $page_list = locate_template( 'assets/includes/page_list.php' ); ?>
	<?php if ( $page_list ) : ?>
		<?php load_template( $page_list ); ?>
	<?php endif; ?>
