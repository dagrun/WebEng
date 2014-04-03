<?php get_header(); ?>

<?php get_sidebar(); ?>
			
<section>	
	<p>Search results for <?php the_search_query() ?></p>	
	<?php if (have_posts()) : ?>
		<?php if(is_category()) { ?>
			<h2 class="title"><?php single_cat_title(); ?>
			<?php } elseif (is_month()) { ?>
			<h2 class="title"><?php the_time('F, Y'); ?></h2>
			<?php } ?>
	<?php endif; ?>
</section>			
		
<?php get_footer(); ?>