<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="container__item">
		<header>
			<h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<?php echo rwmb_meta('rw_fname'); ?>
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