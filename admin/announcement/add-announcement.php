<?php
	require_once "clasess/announcement.class.php";
	$announcementObj = new announcement();
	if($_REQUEST['submit'] == "Submit"){
  
		$announcementObj->addannouncement($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=announcement/list-announcement'; </script>";
	}
	 
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-10">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Announcement</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group col-md-5">
							<label for="announcement Name"> Announcement Name </label>
							<input name="announcement_title" id="announcement_title" type="text" class="form-control" placeholder="Enter Announcement Name" required>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Announcement Date">Announcement Date</label>
							<input name="announcement_date" id="announcement_date" type="text" class="form-control" placeholder="Enter Announcement Date..." required>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Announcement Description">Announcement Description</label>
							<textarea name="announcement_desc" id="announcement_desc" class="form-control" placeholder="Enter Description..." style="height: 60px;" required></textarea>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Image">Announcement Image</label>
							<input type="file" name="announcement_image" id="announcement_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
						</div>
						
						
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>