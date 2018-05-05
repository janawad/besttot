<?php include_once "header.php"; ?>
<style>
    .deal-detail{
        text-align:center;
    }
</style>

<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Best Tutorials</span>
			<h1>About <i>Us</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	


<section>
	<div class="block remove-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="about">
						<div class="row">
							<div class="col-md-6">
								<h3>Creativity Based on Knowledge</h3>
								<p>Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus. Duis convallis turpis in tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius nullam feugiat ultrices. Sed condimentum est libero, aliquet iaculis diam bibendum ullamcorper. Phasellus condimentum lacus nec justo lacinia sodales. Pellentesque pellentesque ultricies urna, at pretium est aliquet et. Sed nec porta lectus voluptas site.</p>
								<a href="#" title="">Read More</a>
							</div>
							<div class="col-md-6">
								<div class="logos">
									<div class="col-md-6">
										<div class="logo"><img src="images/resource/logo1.png" alt="" /></div>
									</div>
									<div class="col-md-6">
										<div class="logo"><img src="images/resource/logo2.png" alt="" /></div>
									</div>
									<div class="col-md-6">
										<div class="logo"><img src="images/resource/logo3.png" alt="" /></div>
									</div>
									<div class="col-md-6">
										<div class="logo"><img src="images/resource/logo4.png" alt="" /></div>
									</div>
								</div><!-- Logos -->
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>

		<div class="counters-bar coloured-layer">
			<div style="background:url(images/parallax4.jpg);" class="parallax"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="count">
							<h3 class="counter">2834</h3>
							<span>STAFF</span>
						</div><!-- Counter -->
						<div class="count">
							<h3 class="counter">134</h3>
							<span>STUDENT</span>
						</div><!-- Counter -->
						<div class="count">
							<h3 class="counter">1512</h3>
							<span>COURSES</span>
						</div><!-- Counter -->
					</div>
				</div>
			</div>
		</div><!-- Counters Bar -->		
	</div>
</section>


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="team-carousel">
					<?php 
						$getstaff_details_detail = $homeObj->getstaff_details();
						foreach($getstaff_details_detail as $getstaff_details_detail_arr){
					?>	
					<div class="col-md-12">
						<div class="deal">
							<div class="deal-img">
								<img src="<?php echo $getstaff_details_detail_arr['staff_details_image'];?>" alt="" />
								<!--<div class="deal-price"><span><i>Limited Offer</i><strong>$201</strong></span></div>-->
								<div class="deal-hover">
									<div class="deal-hover-wrap">
										<!--<span>Offer Available<strong>$305</strong></span>-->
										<p>Name: <?php echo $getstaff_details_detail_arr['staff_details_title'];?></p><br>
										<p>Qualification: <?php echo $getstaff_details_detail_arr['staff_details_desc1'];?></p><br>
										<p><?php echo $getstaff_details_detail_arr['staff_details_desc'];?></p>
										
									</div>
								</div>
							</div><!-- Deal Image -->
							<div class="deal-detail">
								<!--<i>21 Dec 2014 - 14 Feb 2015</i>-->
								<h4><?php echo $getstaff_details_detail_arr['staff_details_title'];?></h4>
								<p><?php echo $getstaff_details_detail_arr['staff_details_desc1'];?></p>
							</div>
						</div><!-- Deal -->
					</div>
					<?php	
					}
					?>
					
					<!-- Member -->
					
					
					
				</div><!-- Team Carousel -->
			</div>
		</div>
	</div>
</section>

<?php include_once "footer.php"; ?>
