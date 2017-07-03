<?php
/**
 * Template part for displaying the header-menu navbar
 *
 * @package EmeraldJA
 */

?>

<nav class="navbar navbar-default">
				
	<div class="container">

		<div class="navbar-header">
			<a class="navbar-brand" href="<?php get_home_url(); ?>">Emerald<span class="navbar-brand--thick-text">JA</span></a>
			<button type="button" id="header-menu-btn" class="navbar-toggle btn-custom-2">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
		</div><!-- .navbar-header -->

		<div class="navbar-collapse" id="header-menu">

			<?php header_nav(); ?>

		</div><!-- .navbar-collapse -->

	</div><!-- .container -->
			
</nav><!-- .navbar -->