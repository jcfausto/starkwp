<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package Stark
* @subpackage WP
* @since StarkWP 1.0
*/
get_header(); ?>

<div id="primary" class="content-area">

	<section id="intro" class="intro">
		<div class="wrapper">
			<h1 class="intro">I help people to develop software, <span class="highlight">grow & work better.</span> Well, that's the goal at least.</span></h1>
		</div>
	</section>
		<section id="hero" class="hero ss-style-triangles">
			<div class="wrapper">
				<img src="http://jcfausto.com/wp-content/themes/jcfwptheme/images/img-bg.jpg">
			<div class="wrapper spotlight">
				<p class="bio">I am Julio. I develop software and help people to get into a more modern approach to sofware development. I'm passionate about software development and everything that surrounds it.
	Topics that I am interested in: Agile Software Development, Product Development, Customer centric approaches (UX/CX), Lean IT, Leadership, Peopleware.</p>
				<center>
					<a href="#" class="blue-button">Check my linkedin</a>
					<a href="#" class="blue-button">Check my Github</a>
				</center>
			</div>				
			</div>			
		</section>
		<section id="resume" class="resume">
			<div class="wrapper">

				<div class="box">
					<h2 class="title">Current and Previous Experiences</h2>
					<div class="experiences">
						<div class="experience">
							<div class="experience-circle"><div class="circle"></div></div>
							<div class="experience-name">Agile Coach
								<div class="experience-info">@Affinitas. 2016 - Current</div>
							</div>
							<div class="experience-status in-progress">Current</div>
						</div>
						<div class="experience">
							<div class="experience-circle"><div class="circle completed"></div></div>
							<div class="experience-name">Software Developer Coordinator
								<div class="experience-info">@Softplan. 2013 - 2016</div>
							</div>
							<div class="experience-status current">Completed</div>
						</div>					
						<div class="experience">
							<div class="experience-circle"><div class="circle"></div></div>
							<div class="experience-name">Agile Coach
								<div class="experience-info">@Affinitas. 2016 - Current</div>
							</div>
							<div class="experience-status in-progress">Current</div>
						</div>
						<div class="experience">
							<div class="experience-circle"><div class="circle completed"></div></div>
							<div class="experience-name">Software Developer Coordinator
								<div class="experience-info">@Softplan. 2013 - 2016</div>
							</div>
							<div class="experience-status current">Completed</div>
						</div>						
					</div>
				</div>
			</div>
		</section>

		<section id="articles" class="articles">
			
			<div class="wrapper">
				<h2 class="title">Latest Articles</h2>
				<div class="col-container">
					<?php 
					   // the query: Will bring the 2 most recent articles
					   $the_query = new WP_Query( array(
					      'posts_per_page' => 2,
					   )); 
					?>

					<?php if ( $the_query->have_posts() ) : ?>
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  	<div class="col">
							<div class="article">
								<div class="image">
									<img src="http://images.outbrain.com/Imaginarium/api/uuid/237d81232a8bf7bc6e1f9226696440f8f9ace971fe2ffb673df8d14c95a89074/380/250/1.0">
								</div>
								<div class="title">
									<?php the_title(); ?>
								</div>
								<div class="description">
									<?php the_excerpt(); ?>
								</div>
							</div> <!-- article -->
						</div> <!-- col -->	
					  <?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>

					<?php else : ?>
					  <p><?php __('No articles yet :-('); ?></p>
					<?php endif; ?>
				</div> <!-- col-container -->
			
			</div>

		</section>		
</div>

<?php get_footer(); ?>