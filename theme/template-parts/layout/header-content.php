<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dr-isah
 */

?>

<header class="header topbar w-full top-0 z-50">
		<section class="menu flex flex-col lg:flex-row lg:justify-between justify-center items-between max-w-7xl gap-2 md:gap-6 mx-auto p-2">
			<div class="flex justify-between items-center h-20">
				<div class="h-auto w-24">
					<a href="<?php $uploads = wp_upload_dir();?>">
						<?php 
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
						?>
					</a>	
				</div>
		
				<div class="flex md:hidden hamburger-menu">
					<span class="flex justify-center items-center h-10 w-10 hamburger rounded-sm bg-white">
						<i class="fas fa-bars text-light-green text-2xl"></i>
					</span>
				</div>
			</div>
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'duromedia' ); ?></button> -->
		<?php
		wp_nav_menu(
			array(
			'theme_location' => 'menu-1',
			'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
			'menu_class'        => "main-menu hidden md:flex lg:flex-row py-5 lg:py-0 lg:items-center gap-4 lg:gap-0 md:max-w-lg lg:max-w-full", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
			'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
			'container_class'   => "flex flex-col justify-center lg:flex lg:flex-row lg:justify-end lg:items-center bg-green-light",
			'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
			'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
			)
		);
		?><!-- #site-navigation -->
		</section>

		
	</header><!-- #masthead -->
