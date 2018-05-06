<header class="site-header  header-style-2">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php get_template_part('template-parts/headers/logo'); ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-8 text-right">
						<div class="header-right-style-2">
							<a href="tel:12345678">
								<i class="fa fa-phone"></i>
								Call us <br>	
								<span>12345678</span>
							</a>
							<a href="mailto:me@ikamal.me">
								<i class="fa fa-envelope"></i>
								Send and Email <br>	
								<span>me@ikamal.me</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</div>
					<div class="col-md-4">
						<div class="header-search-form">
							<?php get_search_form(  ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>