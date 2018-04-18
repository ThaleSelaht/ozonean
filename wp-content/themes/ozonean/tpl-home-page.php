<?php /* Template Name: Home Page*/?>
<?php get_header() ?>
<body>
	<!-- *****BANNER PRINCIPAL***** -->
	<div id="banner-principal" class="container-fluid">
		<div class="row">
			<div class="col-lg-12 d-flex flex-column">
				<?php get_template_part('tpl-navigation'); ?>		
				<header class="my-auto d-flex justify-content-center">
					<h1><!-- ALGUMA CHAMADA PARA ALGO IMPORTANTE QUE AINDA NÃO SEI O QUE SERÁ -->
						SEU PARCEIRO NO SUCESSO DO SEU NEGÓCIO
					</h1>
					<h3>#weareozonean</h3>
				</header>
			</div>
		</div>
	</div>
	<!-- *****FIM BANNER PRINCIPAL***** -->

	<!-- *****ABOUT + BLOG***** -->
	<div id="about-blog" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2>SOBRE A OZONEAN</h2>
					<p>Fundada em 2013 (inicialmente como uma empresa comum de consultoria empresarial), a OZONEAN atuou dois anos coletando dados, avaliando comportamentos e traçando métricas para em 2015 lançar no mercado seu processo de estruturação e gestão de novos negócios.</p>
					<p>Após ver este processo ser testado e aprovado em algumas empresas, a companhia à sua jornada mais ousada, tornar-se um grupo, gerindo e transformando negócios dos mais diversos mercados e segmentos.</p>
				</div>
				<div class="col-lg-7 offset-lg-1">
					<div class="box">
						<img class="img-fluid" src="<?php echo get_home_url() . '/wp-content/uploads/ozonean-lab-logo.png'; ?>" alt="Ozonean Lab">
						<button>Saiba Mais</button>
					</div>
					<div class="box">
						<img class="img-fluid" src="<?php echo get_home_url() . '/wp-content/uploads/ozonean-tree-logo.png'; ?>" alt="Ozonean Tree">
						<button>Saiba Mais</button>
					</div>
					<div class="box">
						<img class="img-fluid" src="<?php echo get_home_url() . '/wp-content/uploads/ozonean-wm-logo.png'; ?>" alt="Ozonean WM">
						<button>Saiba Mais</button>
					</div>
				</div>
				<div class="col-lg-12">
					<h2>ÚLTIMAS DO BLOG</h2>
				</div>
			</div>			
		</div>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">		
				<section class="blog-carousel slider">
					<?php
					$args = array(
					    'numberposts' => 8,
					    'post_status' => 'publish'
					);

					$recent_posts = wp_get_recent_posts( $args );
					$contador = 1;

					if(count($recent_posts) <= 4){
						$contador = 2;
					}
					
					for($i = 0; $i < 2; $i++){
					foreach ($recent_posts as $post ) {
						$date = $post["post_date"];
						$date = explode(" ",$date);
						$date = explode("-",$date[0]);		
						//Buscar imagem relacionada ao post
						$image = wp_get_attachment_image_src(get_post_thumbnail_id( $post['ID'] ), 'full');		
					?>					
					<div>
				    	<a href="<?php echo $post["guid"]; ?>" class="blog-box">
				    		<img class="img-fluid" src="<?php echo $image[0] ?>" alt="">
				    		<div class="caption">
				    			<h4> <?php echo date("d-m-Y", strtotime($date[0])); ?></h4>
				    			<h5> <?php echo $post["post_title"]; ?></h5>
				    		</div>
				    	</a>
				    </div>
					<?php
						
					}}
					wp_reset_query();
					?> 
			    </section>
				</div>
			</div>
		</div>
	</div>
	
	<!-- *****FIM ABOUT + BLOG***** -->

	<!-- *****DEPOIMENTOS***** -->
	<div id="depoimentos" class="container-fluid">
		<div class="row mr-0">
			<!-- <div class="col-lg-12">
					<h2>DEPOIMENTOS</h2>				
				</div>	 -->	
			<div class="col-lg-8 offset-lg-2">
				<section class="depoimentos-carousel slider">
			    <div>
			    	<div class="depo-box">
			    		<span>
			    			<img src="<?php echo get_home_url() . '/wp-content/uploads/sergio-junqueira.jpg'; ?>" alt="">
							<h5>Sérgio Junqueira</h5>
							<h6>CEO do Bartô</h6>
			    		</span>
			    		<p>"...a evolução que alcançamos nesses meses tem uma grande parcela da Ozonean, que desde a assinatura do contrato, sempre estiveram disponíveis para alguma dúvida nossa.Se não fosse a Ozonean nós talvez não teríamos a estrutura que temos em desenvolvimento e tecnologia e, talvez a estrutura do negócio não fosse tão bem definida como é. Espero de coração que quem já terminou o processo também, ou os que ainda estão passando por algumas fases que a Ozonean tenha sido tão bom quanto foi pra gente." </p>			    		
			    	</div>
			    </div>
			    <div>
			    	<div class="depo-box">
			    		<span>
			    			<img src="<?php echo get_home_url() . '/wp-content/uploads/marcio-teruel.jpg'; ?>" alt="">
							<h5>Márcio Teruel</h5>
							<h6>Diretor da Contri Contabilidade e da SESCON-SP</h6>
			    		</span>
			    		<p>"Nossa experiência com a Ozonean têm sido surpreendente.  Nos identificamos com a agilidade e atuação junto às empresas."
			    		</p>			    		
			    	</div>		    	
			    </div> 
			    <div>
 	     	    	<div class="depo-box">
 	     	    		<span>
 	     	    			<img src="<?php echo get_home_url() . '/wp-content/uploads/gilberto-nash.jpg'; ?>" alt="">
							<h5>Gilbert Nash</h5>
							<h6>CEO do CinemallTec LLC</h6>
			    			</span>
				    		<p>"O trabalho executado pelo time altamente competente da Ozonean no Brasil foi impecável e sempre no controle de todos os assuntos, negócios, desenvolvimento, marketing, tecnologia. Foi essencial para que Cinemall tenha uma presença no Brasil e começar a operar nesta área completamente nova de t-commerce, entretenimento e e-commerce. Eu recomendo a Ozonean para todas as empresas nos U.S. e ao redor do mundo." </p>			    		
 	     	    	</div>	    	
 	     	    </div> 	     	   	    
			    </section>
			</div>	
		</div>	
	</div>	
	
	<!-- *****FIM DEPOIMENTOS***** -->

	<!-- *****NEWSLETTER***** -->
	<div id="newsletter" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>ASSINE NOSSA NEWS</h3>
					<h4>Cadastre seu email e mantenha-se informado com nossas atualizações.</h4>
					<form class="form-inline">
					  <div class="form-group col-lg-4 offset-lg-1">
					    <input type="text" class="form-control" id="nome" placeholder="Nome completo">
					  </div>
					  <div class="form-group col-lg-4">
					    <input type="email" class="form-control" id="" placeholder="Seu email">
					  </div>
					  <button type="submit" class="btn btn-primary col-lg-2">Assinar Newsletter</button>
					</form>
				</div>
			</div>
		</div>	
	</div>
	
	<!-- *****FIM NEWSLETTER***** -->
<?php get_footer() ?>