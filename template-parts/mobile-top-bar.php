<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="hide-for-medium">
	<div class="mobileMenu">
		<div class="mobileMenu_wing"></div>
		<div class="mobileMenu_title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="mobileMenu_logo" src="/wp-content/themes/q2w-wordpress-theme/assets/images/logoWOText.png" alt="<?php bloginfo( 'name' ); ?>"></a>
		</div>
		<div class="mobileMenu_wing">
			<div id="hamburger" class="hamburglar is-closed" data-toggle="mobile-menu">
			    <div class="burger-icon">
			      <div class="burger-container">
			        <span class="burger-bun-top"></span>
			        <span class="burger-filling"></span>
			        <span class="burger-bun-bot"></span>
			      </div>
			    </div>
			    
			    <!-- svg ring containter -->
			    <div class="burger-ring">
			      <svg class="svg-ring">
				      <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
			      </svg>
			    </div>
			    <!-- the masked path that animates the fill to the ring -->
			    
			 		<svg width="0" height="0">
			       <mask id="mask">
			    <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
			       </mask>
			     </svg>
			    <div class="path-burger">
			      <div class="animate-path">
			        <div class="path-rotation"></div>
			      </div>
			    </div>
			      
			  </div>
		</div>
	</div>
	<div class="menu-centered overlay" id="mobile-menu" role="navigation" data-toggler data-animate="slide-in-down slide-out-up" style="display: none;">
  	<?php foundationpress_mobile_nav(); ?> 
  	<a href="tel:01303764287" class="button expanded">Call: 01303 764287</a>
  	<a href="/contact" class="secondary button expanded">Request a call back</a>
	</div>
</div>