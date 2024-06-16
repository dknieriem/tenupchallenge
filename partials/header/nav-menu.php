<?php
// Partial: Header/Nav Menu
?>
<nav id="nav">
  <button class="nav-toggle"><span class="icon icon-menu nav-open:icon-close"></span></button>
  <?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'nav-primary',
				'container_class' => 'nav-primary--container',
				'items_wrap'      => '<ul id="nav-primary--list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
</nav>