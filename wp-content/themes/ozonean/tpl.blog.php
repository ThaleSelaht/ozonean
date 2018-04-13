<?php /* Template Name: Blog Page*/?>
<?php get_header() ?>
<body>
	<!-- *****BANNER PRINCIPAL***** -->
	<div id="banner-principal" class="container-fluid inner-page">
		<div class="row">
			<div class="col-lg-12 d-flex flex-column">
				<nav class="navbar navbar-expand-md navbar-dark">
			      <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
			      	<img src="<?php echo get_home_url() . '/wp-content/uploads/logo-ozonean.png'; ?>" alt="Logo Ozonean">
			      </a>
			      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			      </button>
			      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
			        <ul class="navbar-nav ml-auto">
			          <li class="nav-item">
			            <a class="nav-link" href="#">OZONEAN <span class="sr-only">(current)</span></a>
			          </li>
			          <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="servicos-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          SERVIÇOS
				        </a>
				        <div class="dropdown-menu" aria-labelledby="servicos-dropdown">
				          <a class="dropdown-item" href="#">Consultorias</a>
				          <a class="dropdown-item" href="#">Palestras e Workshops</a>
				        </div>
				      </li>
			          <li class="nav-item">
			            <a class="nav-link" href="#">EMPRESAS</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="#">BLOG</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="#">CONTATO</a>
			          </li>
			        </ul>			        
			      </div>
			    </nav>				
			</div>
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
									<div class="col-lg-6">
										<div class="blog-box">
											<span>
												<img src="src/img/blog1.png" alt="">
												<p>CATEGORIA 1</p>
											</span>
											<span>
												<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p>Morbi congue imperdiet varius. Aenean lobortis ac velit non faucibus. Morbi convallis eget lorem a egestas. Suspendisse efficitur risus et nisl congue...</p>
											</span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="blog-box">
											<span>
												<img src="src/img/blog2.png" alt="">
												<p>CATEGORIA 2</p>
											</span>
											<span>
												<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p>Morbi congue imperdiet varius. Aenean lobortis ac velit non faucibus. Morbi convallis eget lorem a egestas. Suspendisse efficitur risus et nisl congue...</p>
											</span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="blog-box">
											<span>
												<img src="src/img/blog3.png" alt="">
												<p>CATEGORIA 3</p>
											</span>
											<span>
												<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p>Morbi congue imperdiet varius. Aenean lobortis ac velit non faucibus. Morbi convallis eget lorem a egestas. Suspendisse efficitur risus et nisl congue...</p>
											</span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="blog-box">
											<span>
												<img src="src/img/blog4.png" alt="">
												<p>CATEGORIA 4</p>
											</span>
											<span>
												<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p>Morbi congue imperdiet varius. Aenean lobortis ac velit non faucibus. Morbi convallis eget lorem a egestas. Suspendisse efficitur risus et nisl congue...</p>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- *****FIM BANNER PRINCIPAL***** -->

<?php get_footer() ?>