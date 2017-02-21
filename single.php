<?php get_header(); ?>
<body>
		<?php rewind_posts(); ?>	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header class="header">
			<h1><?php the_title(); ?></h1>
		</header>
			<article class="container__item">
				<header>
				</header>
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

<?php get_footer(); ?>