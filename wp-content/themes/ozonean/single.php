<?php get_header() ?>
<body>
	<!-- *****BANNER PRINCIPAL***** -->
	<div id="banner-principal" class="container-fluid inner-page">
		<div class="row">
			<div class="col-lg-12 d-flex flex-column">
				<?php get_template_part('tpl-navigation'); ?>			
			</div>
			<div class="col-lg-12">
				<header>
					<h1>BLOG</h1>
				</header>
			</div>
			<div class="col-lg-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-lg-7 offset-lg-1">
							<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post(); ?>
								<div class="container-fluid no-padding">
									<div class="row">
										<div class="col-lg-12">
										   	<div class="blog-single-post-box">
										   		<h1><?php the_title(); ?></h1>
										   		<ul>
										   			<li>
										   				<i class="fas fa-2x fa-user" aria-hidden="true"></i> 
														<?php the_author_posts_link(); ?>
													</li>
										   			<li>
										   				<i class="fa fa-2x fa-calendar" aria-hidden="true"></i>	 
														<?php echo get_the_date(); ?>	
										   			</li>
										   			<li>
										   				<i class="fa fa-2x fa-folder-open" aria-hidden="true"></i>
														<?php the_category();?>
										   			</li>
										   		</ul>
										   		<?php if(has_post_thumbnail()) :?>
	 													<?php the_post_thumbnail() ?>
	 											<?php endif;?>
												<div class="conteudo"><?php the_content(); ?></div>
										   </div>
										   <div class="blog-single-post-bio">
										   		<h4>Por <?php the_author_posts_link(); ?></h4>
										   		<span>
										   			<?php  echo get_avatar( get_the_author_meta( 'ID' ) , 100 ); ?>	
										   			<p><?php echo get_the_author_meta( 'user_description' )?></p>
										   		</span>		
										   </div>																	
										</div>
									</div>
								</div>
								<?php endwhile; ?>
							<?php else: ?>
								<?php echo wpautop('Desculpe, não encontramos posts!'); ?>	
							<?php endif; ?>	
							</div>
							<!-- Widgets -->
							<div class="col-lg-3">
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
		</div>
	</div>
	<!-- *****FIM BANNER PRINCIPAL***** -->
<?php get_footer() ?>