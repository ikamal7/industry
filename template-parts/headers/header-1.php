<header class="site-header">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php get_template_part('template-parts/headers/logo'); ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-8">
						<?php 
							$header_1_links = cs_get_option('header_1_links');
							if(!empty($header_1_links)) :
						 ?>
						<div class="header-right-btn">
							<?php foreach ($header_1_links as $link) : ?>
							<?php if(!empty($link['link'])) : ?><a <?php else : ?><span <?php endif; ?> style="background-color:<?php echo esc_attr($link['bg_color']) ?>;color:<?php echo esc_attr($link['text_color']) ?>;" target="<?php echo esc_attr($link['target']); ?>" href="<?php echo esc_url($link['link']); ?>"><?php echo esc_html( $link['link_text'] ) ?><?php if(!empty($link['link'])) : ?></a> <?php else : ?></span> <?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
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