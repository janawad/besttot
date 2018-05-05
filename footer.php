<!--- Newslitter Subscribe --->
	<?php
	require_once "admin/clasess/newsletter.class.php";
	$newsletterObj = new newsletter();
	if($_REQUEST['submit'] == "Subscribe"){
		$newsletterObj->addnewsletter($_REQUEST);
		?>
		<script type="text/javascript">
         <!--
            alert ("Thank you, We will get back to you soon!");
         //-->
		</script>
	
	<?php
	}
	?>
<!--- Newslitter Subscribe --->
<footer>
	<div class="block" style="padding:0px 0px">
		<div class="container">
		<h2 style="text-align:center;">CONTACT US</h2><br>
			<div class="row">
			
				<div class="col-md-4 column">
					<h4>Newsletter</h4><br>
					<form  class="contact" method="post" action="#" enctype="multipart/form-data">
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Name" required/>
						</div>
						<div class="form-group">
							<input name="email" type="text" class="form-control" placeholder="Email" required/>
						</div>
						<input type="submit" name="submit" id="submit" value="Subscribe" />
					</form>
				</div>
				<div class="col-md-4 column">
					<div class="contact-info">
						<h4>Find Us</h4></br>
						<ul>
							<li><i class="fa fa-map-marker"></i>#11/1,13th 'B' Main, Vijayanagar,Attiguppe<br>near syndicate bank, bengaluru - 560040</li>
							<li><i class="fa fa-phone"></i>+91-9036684101 / +91-9844280765</li>
							<li><i class="fa fa-envelope-o"></i>gmail@gmail.com</li>
						</ul>
					</div><!-- Contact Info -->
				</div>
				<div class="col-md-4 column">
					<h4>Get directions</h4><br>
					<form id="get_direction" target="_blank" action="https://www.google.co.in/maps/place/" method="get">
						<div class="form-group">
						<input id="saddr" class="form-control-1" placeholder=" Enter your location" value="" name="saddr" style="width:205px;height:30px;margin-bottom:10px;">
						<input value="Hampinagar bustop, Bengaluru, Karnataka" name="daddr" type="hidden">
						</div>
						<input type="submit" id="submit" value="Show on Map" />
					</form>				
				</div>
			</div>
		</div>
	</div>
</footer><!-- Footer -->

<div class="bottom-footer">
	<div class="container">
		<p>Best Tutorials - Copyright <Script>document.write(new Date().getFullYear())</script>.</p>
	</div>
</div>


		<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>

		<script type="text/javascript" src="js/jquery2.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery-plugin.min.js"></script>
		<script type="text/javascript" src="js/jquery.datepick.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		<!-- SLIDER REVOLUTION -->
		<script type="text/javascript" src="js/revolution/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>


		  <script>
		$(function() {
			$('.popupDatepicker').datepick();
			$('#inlineDatepicker').datepick({onSelect: showDate});
		});

		function showDate(date) {
			alert('The date chosen is ' + date);
		}

		$(document).ready(function() {

		/* =============== Revolution Slider ===================== */
		var revapi;
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:750,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"off"
		});


		$(function(){
			$('#Grid').mixitup({
			effects: ['fade','scale'],
			transitionSpeed: 600,
			layoutMode: 'list',
			});
		});


		/* =============== Services Carousel ===================== */
		$('.services-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed : 1000,
		singleItem: true,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: true,
		center: true,
		margin: 0,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		});


		/* =============== Services Carousel ===================== */
		$('.testimonials-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed : 1000,
		singleItem: true,
		autoplay: false,
		dots: false,
		center: true,
		margin: 0,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		URLhashListener:true,
		startPosition: 'URLHash'});


		/* =============== Team Carousel ===================== */
		$('.team-carousel').owlCarousel({
		items: 3,
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: false,
		margin: 30,
		autoplayHoverPause: true,
		responsive : {
			1000:{items:3},
			767:{items:2},
			468:{items:2},
			0:{items:1},
		}
		});


		/* =============== Tips Carousel ===================== */
		$('.tips').owlCarousel({
		items: 2,
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: false,
		margin: 30,
		autoplayHoverPause: true,
		responsive : {
			1000:{items:2},
			767:{items:2},
			468:{items:2},
			0:{items:1},
		}
		});

		/* =============== Fun Facts Counter ===================== */
		$(".counter").counterUp({
			time: 5000
		});

		});
		</script>

	</body>
</html>