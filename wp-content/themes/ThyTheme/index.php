<?php get_header(); ?>

<?php get_sidebar(); ?>
			
<section>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?>>
			<div>
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>
				
				<?php the_content(''); ?>					
			</div>
			<details>
				<ul class="meta">
					<li><?php the_time('F jS, Y') ?></li>
					<li><?php comments_number('No comments', '1 Comment', '% Comments'); ?></li>
				</ul>
			</details>
		</article>
	<?php endwhile; ?>
	<footer>
		<ul>
			<li class="older"><?php next_posts_link('Previous reviews...') ?></li>
			<li class="newer"><?php previous_posts_link('Newer reviews ...') ?></li>						
		</ul>				
	</footer>
<?php else : ?>
	<h2> Nothing found </h2>
	<p>Sorry, but you are looking for something that isn't here</p>
	<p><a href="<?php echo get_option('home'); ?>">Return to the homepage</></p>
<?php endif; ?>
</section>	
<aside>
			<div>
				<div id="people">
					<div>
						<h3>Meet our reviewers!</h3>
					</div>					
					<div class="neo">
						<img src="images/mranderson.jpg"  alt=""/>
						<span >Mr Anderson</span>
						<div >
							CEO, Main Reviewer							
						</div>
					</div>					
					<div class="neo">
						<img src="images/trinity.jpg"  alt=""/>
						<span >Ms Trinity</span>
						<div >
							Assistant, Reviewer, Board Member
						</div>
					</div>					
					<div >
						<a href="#" >Meet them all!</a>
					</div>	
				</div>
				
				<div id="contest">
					<div>
						<h3>Weekly Location Contest</h3>
					</div>					
					<img src="images/sydney-harbour-panorama1bl-thumbnail.jpg"  alt=""/>					
					<div>
						This week's location is:<br>
						<span >Sydney, Australia</span>
					</div>					
					<div >
							<a href="#" >Have a look!</a>
					</div>
				</div>
			</div>
			
			<div id="somedia">
					<a href="http://facebook.com/"><img src='images/facebook-icon.png' /></a>
					<a href="http://twitter.com/"><img src='images/twitter-icon.png' /></a>
			</div>
		</aside>		
		
<?php get_footer(); ?>