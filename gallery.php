<?php include_once "header.php"; ?>

<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Best Tutorials</span>
			<h1>Awesome <i>Gallery</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	

<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="controls">	
						<h3>Gallery</h3>
					</div>
					<div class="row">
					<ul id="Grid">
						
						
						<?php 
							$getblog_detail = $homeObj->getblog();
							foreach($getblog_detail as $getblog_detail_arr){
						?>
						
						<li class="mix category_3 col-md-4" data-cat="3">
							<div class="portfolio">
								<img src="<?php echo $getblog_detail_arr['blog_image'];?>" alt="" />
								<div class="overlay"><span></span></div>
								<div class="hover">
									<h4><?php echo $getblog_detail_arr['blog_title'];?></h4>
									<span><a data-rel="prettyPhoto" href="<?php echo $getblog_detail_arr['blog_image_details'];?>" title=""><i class="fa fa-eye"></i></a></span>
									<!--<ul>
										<li><a href="#" title="">Placees</a></li><li><a href="#" title="">Portfolio</a></li>
									</ul>-->
								</div>
							</div>
						</li>
						<?php	
							}
						?>
						
					</ul>
					</div>		
				</div>
			</div>
		</div>
	</div>
</section>

<?php include_once "footer.php"; ?>
