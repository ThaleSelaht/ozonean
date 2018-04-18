<?php /* Template Name: Ozonean Tree*/?>
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
				<a href="<?php echo get_site_url() . '/ozonean-tree'; ?>"><button id="bt-ozonean-tree" class="active">Ozonean Tree</button></a>
				<a href="<?php echo get_site_url() . '/ozonean-wm'; ?>"><button id="bt-ozonean-wm">Ozonean WM</button></a>
			</div>
			<div class="col-lg-3 offset-lg-2 verticais-box">
				<img src="<?php echo get_home_url() . '/wp-content/uploads/ozonean-tree-logo.png'; ?>" alt="Ozonean Lab">
				<p>Nossa vertical dedicada à gestão de processos e operações de negócios de segmentos e modelos de negócios mais tradicionais é a <b>Ozonean Tree</b>, que assim como na <b>Ozonean LAB</b> também oferta um acompanhamento gratuito. Porém, neste caso as empresas são acompanhadas durante um menor período (2 meses).
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