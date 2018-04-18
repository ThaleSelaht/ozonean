<?php /* Template Name: Ozonean World Map*/?>
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
				<a href="<?php echo get_site_url() . '/ozonean'; ?>"><button id="bt-ozonean-lab">Ozonean Lab</button></a>
				<a href="<?php echo get_site_url() . '/ozonean-tree'; ?>"><button id="bt-ozonean-tree">Ozonean Tree</button></a>
				<a href="<?php echo get_site_url() . '/ozonean-wm'; ?>"><button id="bt-ozonean-wm" class="active">Ozonean WM</button></a>
			</div>
			<div class="col-lg-3 offset-lg-2 verticais-box">
				<img src="<?php echo get_home_url() . '/wp-content/uploads/ozonean-wm-logo.png'; ?>" alt="Ozonean Lab">
				<p> Muitos empresários e empreendedores sonham em poder levar seus negócios além das fronteiras de seus países. Com a <b>Ozonean WORLD MAP</b> isso é possível. Em parceria com a MasterInt (empresa com 19 anos de experiência em internacionalização), desenvolvemos uma oportunidade única e prática para levar seu negócio para todo o mundo.
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