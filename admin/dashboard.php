<?php 
	require_once "clasess/get.total.class.php";
	$total = new get_total_records();

	$testimonials="testimonials";
	$blog="blog";
	$newsletter ="newsletter";
	$announcement ="announcement";
	$staff_details ="staff_details";
	
	
	
?>
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=testimonials/list-testimonials">
					<span class="info-box-icon bg-aqua"><i class="fa fa-comments-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">testimonials</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($testimonials) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=blog/list-blog">
					<span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">blog</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($blog) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	

	<!-- =========================================================== -->
	
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=newsletter/list-newsletter">
					<span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">newsletter</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($newsletter) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=announcement/list-announcement">
					<span class="info-box-icon bg-red"><i class="info-box-icon bg-yellow"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">announcement</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($announcement) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=staff_details/list-staff_details">
					<span class="info-box-icon bg-red"><i class="info-box-icon bg-red"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">staff_details</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($staff_details) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
	
		
	</div>

	<!-- =========================================================== -->
