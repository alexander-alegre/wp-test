<?php
/*
	Template Name: Left Sidebar
*/
?>
<?php get_header(); ?>
<section class="two-column row no-max pad">
	<div class="small-12 columns">
		<div class="row">
		<!-- primary column -->
			<div class="smalll-12 medium-7 medium-offset-1 medium-push-4 columns">
				<div class="primary">
			    	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			      		<h1><?php the_title(); ?></h1>
			      		<p><?php the_content(); ?></p>  
			    	<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matcehd your criteria.'); ?></p>
					<?php endif; ?>  
				</div>
			</div>
			<!-- secondary column -->
			<div class="small-12 medium-4 medium-pull-8 columns">
				<div class="secondary">
					<h2 class="module-heading">Sidebar</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>