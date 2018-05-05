<?php include_once "header.php"; ?>


<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Best Tutorials</span>
			<h1> <i>Announcements</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	


<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="title">
							<span>WE SERVE YOU OUR BEST AT ANY COST</span>
							<h2>Recent <span>Announcements</span></h2>
							<p>A peek into the highlights of Best Tutorials</p>
						</div>
						<div class="col-md-8 column">
							<div class="remove-ext">
							<?php 
								$getannouncement_detail = $homeObj->getannouncement();
								foreach($getannouncement_detail as $getannouncement_detail_arr){
							?>
								<div class="flight-deal">
									<div class="deal-desc">
										<h3><span><?php echo $getannouncement_detail_arr['announcement_title'];?></span></h3>
										<p><?php echo $getannouncement_detail_arr['announcement_desc'];?></p>
									</div>
									
									<div class="packages">
										<div class="package">
											<div class="package-inner" style="width:147px">
												<h4>Start</h4><span>On</span><h6><?php echo $getannouncement_detail_arr['announcement_date'];?></h6>
											</div>
										</div>	
											
									</div>
								</div>
								<?php	
									}
								?>
								
							</div>
						</div>

						<div class="col-md-4 column">
							<div class="tips">
								<div class="tip">
									<img src="images/resource/team3.jpg" alt="" />
									<div class="tip-detail">
										<h4>Head trainer</h4>
										<span>03 nov 2014</span>
									</div>
								</div>
								<div class="tip">
									<img src="images/resource/team4.jpg" alt="" />
									<div class="tip-detail">
										<h4>Head trainer</h4 >
										<span>03 nov 2014</span>
									</div>
								</div>
								<div class="tip">
									<img src="images/resource/team3.jpg" alt="" />
									<div class="tip-detail">
										<h4>Head trainer</h4>
										<span>03 nov 2014</span>
									</div>
								</div>
								<div class="tip">
									<img src="images/resource/team4.jpg" alt="" />
									<div class="tip-detail">
										<h4>Head trainer</h4 >
										<span>03 nov 2014</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




<?php include_once "footer.php"; ?>
