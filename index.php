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
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="container__item">
				<header>
					<h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</header>
				<figure>
					<picture>
						<?php the_post_thumbnail('my-size'); ?>	
					</picture>
					
				</figure>
				<?php the_excerpt(); ?>
				<footer>
					<strong><?php the_author(); ?></strong> - <small><?php the_date(); ?></small>
				</footer>
			</article>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<h4>No hemos encontrado resultados</h4>
		<?php endif; ?>
	</section>

<?php dynamic_sidebar('sidebar-footer' ); ?>

<?php get_footer('negro'); ?>