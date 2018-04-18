	<!-- *****FOOTER***** -->
	<div id="footer" class="container-fluid">
		<div  class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="<?php echo get_site_url() . '/'; ?>">
					<img class="img-fluid" src="<?php echo get_home_url() . '/wp-content/uploads/logo-ozonean.png?'?>" alt="Logo Ozonean">
					</a>
				</div>
				<div class="col-lg-6">
					<header><h3>SIGA-NOS!</h3></header>
					<div class="social-box">
						<a href="https://www.facebook.com/weareozonean/"><i class="fab fa-facebook-square"></i></a>
						<a href=""><i class="fab fa-linkedin"></i></a>
						<a href="https://www.instagram.com/weareozonean/"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<!-- *****FIM FOOTER***** -->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script>
		(function($) {
    	$(document).ready(function() {
        "use strict";
		$(".blog-carousel").slick({
	        dots: false,
	        infinite: true,
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        arrows: true,
	        responsive: [
	        	{
	        		breakpoint: 768,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1,
				        infinite: true,
				        dots: false
				      }
	        	}
	        ]
	    });
	    $(".depoimentos-carousel").slick({
	        dots: true,
	        infinite: true,
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        arrows: true,
	        responsive: [
	        	{
	        		breakpoint: 768,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1,
				        infinite: true,
				        dots: false
				      }
	        	}
	        ]
	    });
		$("section.blog-carousel a").hover(
			function(){ 
				$(".caption", this).toggleClass('active-caption');
				$(".caption h4", this).toggleClass('active-h4'); 
			}
		);
		$("#banner-principal.inner-page a.blog-box").hover(
			function () {
				$("span:nth-of-type(2)", this).toggleClass('active-caption');
		});
		
		});		
		})(jQuery);
	</script>
	<?php wp_footer() ?>
</body>
</html>