<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
	<h1>俺のテーマ!!!!!!!!!!</h1>
	<?php if (have_posts()) : ?>
		<?php while(have_posts()) : ?>
			<?php the_post(); ?>
			<p><?php echo get_the_date(); ?></p>
			<p><?php the_category(); ?></p>
			<p><?php the_tags(); ?></p>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_post_thumbnail(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
</body>
</html>