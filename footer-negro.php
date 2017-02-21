<footer class="footer-negro">
	<strong>&copy; By Platzi</strong><small>2017</small>
	<?php 
	wp_nav_menu(
		array(
			'theme_location' => 'menu-footer',
			'container' => 'nav',
			'container_class' => 'nav--footer',
			'menu_class' => 'nav--footer__list'
			)
		);
 ?>
</footer>
<?php wp_footer(); ?>
 	
</body>
</html>