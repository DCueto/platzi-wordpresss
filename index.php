<?php get_header(); ?>

<body>
	<?php include TEMPLATEPATH . '/templates/nav.php' ?>
	<header class="header">
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</header>

	<!-- Esto añade el sidebar con el id indicado en functions.php-->
	<div class="sidebar">
		<?php 
			dynamic_sidebar('sidebar-header' );
		 ?>
	</div>

	<section class="container" role="main">
		<header class="container__header">
			<h2>Últimas entradas</h2>
		</header>

		<?php rewind_posts(); ?>
		<?php query_posts( 'order=Asc&cat=2'); ?>
		
		<?php include TEMPLATEPATH . '/templates/loop.php' ?>
	</section>

<?php dynamic_sidebar('sidebar-footer' ); ?>

<?php get_footer('negro'); ?>