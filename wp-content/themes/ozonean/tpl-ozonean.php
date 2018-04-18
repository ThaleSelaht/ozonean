<?php /* Template Name: Ozonean Page*/?>
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
					<h1>SOBRE A OZONEAN</h1>
				</header>
			</div>
			<div class="col-lg-12 ozonean-bts">
				<a href="<?php echo get_site_url() . '/ozonean'; ?>"><button id="bt-ozonean-lab" class="active">Ozonean Lab</button></a>
				<a href="<?php echo get_site_url() . '/ozonean-tree'; ?>"><button id="bt-ozonean-tree">Ozonean Tree</button></a>
				<a href="<?php echo get_site_url() . '/ozonean-wm'; ?>"><button id="bt-ozonean-wm">Ozonean WM</button></a>
			</div>
			<div class="col-lg-3 offset-lg-2 verticais-box">
				<img src="<?php echo get_home_url() . '/wp-content/uploads/ozonean-lab-logo.png'; ?>" alt="Ozonean Lab">
				<p>Inicialmente chamada de LAB Empreendedor, a Ozonean LAB é a vertical de nossa empresa destinada à gestão de projetos, produtos e processos de inovação. <br/><br/>						
				Um programa de acompanhamento de 3 meses (presenciais ou à distância), com SPRINTS semanais e dividido em 6 fases.
				</p>					
			</div>
			<div class="col-lg-5">
				<div class="form-ozonean">
					<h2>Quer receber este acompanhamento gratuitamente? <br>
						Responda ao FORMULÁRIO e conte-nos sua história!</h2>
					<?php
					$page = get_page_by_title( 'ozonean' );
					$content = apply_filters('the_content', $page->post_content); 
					echo $content;
					?>	
				</div>
			</div>
		</div>
	</div>
	<!-- *****FIM BANNER PRINCIPAL***** -->

<?php get_footer() ?>