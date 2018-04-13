<?php /* Template Name: Blog Page*/?>
<?php get_header() ?>
<body>
	<!-- *****BANNER PRINCIPAL***** -->
	<div id="banner-principal" class="container-fluid inner-page">
		<div class="row">
			<div class="col-lg-12 d-flex flex-column">
				<?php get_template_part('tpl-navigation'); ?>			
			</div>
			<?php if(is_home()) : ?>
			<div class="col-lg-12">
				<header>
					<h1>BLOG</h1>
				</header>
			</div>
			<div class="col-lg-12">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="container">
								<div class="row no-gutters">
									<?php if(have_posts()) : ?>
									<?php while(have_posts()) : the_post(); ?>
										<div class="col-lg-6">
											<a href="<?php the_permalink(); ?>" class="blog-box">
												<span>
													<?php if(has_post_thumbnail()) :?>
														<?php the_post_thumbnail(); ?>
													<?php endif;?>
													<p><?php 
														$categories = get_the_category();
														echo $categories[0]->cat_name;
														?>
													</p>
												</span>
												<span>
													<h3><?php the_title(); ?></h3>
													<p><?php the_excerpt(); ?></p>
												</span>
											</a>
										</div>
									<?php endwhile; ?>
									<?php endif; ?>											
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-12">
										<div class="widget-lateral">
										<?php if(is_active_sidebar('sidebar')) : ?>
											<?php dynamic_sidebar('sidebar'); ?>
										<?php endif; ?> 
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
	<!-- *****FIM BANNER PRINCIPAL***** -->

<?php get_footer() ?>