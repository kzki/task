<?php get_header(); ?>
<div>
	<?php if(have_posts()) : ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<p><?php echo get_the_date(); ?></p>
			<p><?php the_category(); ?></p>
			<p><?php the_tags(); ?></p>
			<p><?php the_title(); ?></p>
			<?php the_post_thumbnail(); ?>
			<p><?php the_content("続きを見る"); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
