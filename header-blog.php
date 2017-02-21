<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
	<?php wp_head(); ?>
</head>

<body class="blog">

<header class="blog__header">
	<h1><?php wp_title(); ?></h1>
</header>