<?php get_header(); ?>

<?php get_sidebar(); ?>
			
<section>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article>
			<div>
				<h3><?php the_title(); ?></h3>
				
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>
				
				<?php the_content(''); ?>
				<?php comments_template(); ?>
			</div>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
</section>	
<aside>
				<div>
					<div id="hotel">
							<h3>Our last reviews!</h3>
							
							<div>
								<img src="images/mec-paestum-1.jpg" alt=""><br>
								<span>Mec Paestum Hotel</span>
							</div>
							<div>
								<img src="images/hotelbern.jpg" alt=""><br>
								<span>Bellevue Palace Bern</span>
							</div>
					</div>	

					<div id="contest">
						<div>
							<h3>Weekly Location Contest</h3>
						</div>
						<img src="images/sydney-harbour-panorama1bl-thumbnail.jpg" alt="">
						<div>
							This week's location is:<br>
							<span>Sydney, Australia</span>
						</div>
						<div>
								<a href="#">Have a look!</a>
						</div>
					</div>
				</div>
				
				<div id="somedia">
						<a href="http://facebook.com/"><img src="images/facebook-icon.png"></a>
						<a href="http://twitter.com/"><img src="images/twitter-icon.png"></a>
				</div>
			</aside>		
		
<?php get_footer(); ?>