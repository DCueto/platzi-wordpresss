<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
	<header class="header">
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</header>

	<section class="content">

		<?php rewind_posts(); ?>
		<?php query_posts( 'order=Asc&cat=2'); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<header>
					<h3><?php the_title(); ?></h3>
				</header>
				<div class="datos">
					<strong><?php the_author(); ?></strong> -
					<small><?php the_date(); ?></small>
				</div>
				<?php the_excerpt(); ?>
				<?php the_category(); ?>
			</article>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>


		<!-- <article>
			<header>
				<h3>titulo</h3>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque esse eius maxime, dolore! Eius esse asperiores natus dignissimos aliquid voluptates, iure, incidunt quasi est obcaecati non reprehenderit, necessitatibus similique minus!</p>
		</article>
		<article>
			<header>
				<h3>titulo</h3>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores atque facere repellat. Maxime quod dolor perferendis commodi, perspiciatis laborum, sunt, magni illo ipsam molestiae a ullam amet adipisci et omnis!</p>
		</article>
		<article>
			<header>
				<h3>titulo</h3>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, pariatur! Quasi sed eaque praesentium ea odio voluptatibus repudiandae commodi, ut cupiditate perferendis voluptate provident, nobis ullam doloribus accusantium omnis perspiciatis.</p>
		</article> -->
	</section>
</body>
</html>