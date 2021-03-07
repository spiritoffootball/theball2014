<?php /*
================================================================================
Site Banner Template
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

--------------------------------------------------------------------------------
*/

?><!-- assets/includes/site_banner.php -->

<div id="site_banner" class="clearfix">

	<div id="site_banner_inner">

		<?php $network_black = locate_template( 'assets/includes/network.php' ); ?>
		<?php if ( $network_black ) : ?>
			<?php load_template( $network_black ); ?>
		<?php endif; ?>

		<div id="splash">

			<a href="/wp-content/themes/theball/assets/images/interface/it_genoa_ball.png"><img src="/wp-content/themes/theball/assets/images/interface/it_genoa_ball.png" alt="The Ball 2014" title="The Ball 2014" width="200" height="140" class="alignnone size-medium wp-image-122" /></a>

		</div><!-- /splash -->

		<div id="banner_copy">

			<h2>Welcome to <?php bloginfo( 'title' ); if ( is_home() ) { echo ' blog'; } ?></h2>

			<p>9th January 2014 was the 150th anniversary of the first official game of football to FA rules. On that day, The Ball 2014 kicked off from Battersea Park in London, where that game was played, and travelled across Europe and the Americas to the World Cup in Brazil.</p>

			<?php /* if ( !is_home() ) { ?>
			<p id="gotoblog"><a href="/2014/blog/">Read the blog &rarr;</a></p>
			<?php } */ ?>

		</div><!-- /banner_copy -->

	</div><!-- /site_banner_inner -->

</div><!-- /site_banner -->



<div id="cols" class="clearfix">
<div class="cols_inner">

	<?php $page_list = locate_template( 'assets/includes/page_list.php' ); ?>
	<?php if ( $page_list ) : ?>
		<?php load_template( $page_list ); ?>
	<?php endif; ?>



