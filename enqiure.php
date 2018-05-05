<?php include_once "header.php"; ?>


<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Best Tutorials</span>
			<h1>Any<i>Query</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	


<section>
	<div class="block remove-bottom" style="padding-bottom:10px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="about">
						<div class="row">
							<div class="col-md-7 column" style="background:#000;">
							<div id="message" style="text-align:center;"><h3>Enqiure Details</h3></div>
								<?php
									if(isset($_REQUEST['msg'])){
										if($_REQUEST['msg']="success"){
											$message="Thank you for applying at Questerra. We will get back to you in 7 working days.";
											$color="green";
										}elseif($_REQUEST['msg']="error"){
											$message="Oh Oh! Something went wrong! Please try again.";
											$color="red";
										}
									}
								?>
								<h5 style="color:<?php echo $color;?>; text-align:center;"><?php echo $message; ?></h5><br>
								<form action="mail.php" id="contactForm" method="post" class="contact">
									<input name="name" type="text" id="name" placeholder="Name" />
									<input  name="email" type="text" id="email"  placeholder="Email" />
									<input type="text" name="subject" id="subject" placeholder="Subject" />
									<textarea name="comments" id="comments"  placeholder="Details"></textarea>
									<input type="submit" id="submit" value="Contact Now" />
									<br>
								</form>
							</div>
							<br><br>
							<div class="col-md-4 col-md-offset-1" style="background:#e8e8e8;">
								<div class="logos">
									<div class="col-md-10">
										<div class="contact-info">
								<h3> <span>CONTACT US NOW</span></h3>
								
								<ul>
									<li><i class="fa fa-phone"></i>+91-9036684101 / +91-9844280765</li>
									<li><i class="fa fa-envelope-o"></i>gmail@gmail.com</li>
									<li><i class="fa fa-map-marker"></i>#11/1,13th 'B' Main Vijayanagar,Attiguppe near syndicate bank, bengaluru - 560040</li>
								</ul>
							</div></div>
									</div>
									
								</div><!-- Logos -->
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>

			
	</div>
</section>




<?php include_once "footer.php"; ?>
