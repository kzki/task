<?php get_header(); ?>
<div>
	<?php if(have_posts()) : ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<p><?php echo get_the_date(); ?></p>
			<p><?php the_title(); ?></p>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>