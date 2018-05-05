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
<form action="email.php" id="contactForm" method="post" class="contact">
						<p>The form below contains three inline radio buttons:</p>
						<label class="radio-inline">
						  <input type="radio" name="optradio5" id="optradio5" value="1">Option 1
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio5" id="optradio5" value="2">Option 2
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio5" id="optradio5" value="3">Option 3
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio5" id="optradio5" value="4">Option 4
						</label>
						
						<p>The form below contains three inline radio buttons:</p>
						<label class="radio-inline">
						  <input type="radio" name="optradio4" id="optradio4" value="1">Option 1
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio4" id="optradio4" value="2">Option 2
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio4" id="optradio4" value="3">Option 3
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio4" id="optradio4" value="4">Option 4
						</label>
						
						<p>The form below contains three inline radio buttons:</p>
						<label class="radio-inline">
						  <input type="radio" name="optradio3" id="optradio3" value="1">Option 1
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio3" id="optradio3" value="2">Option 2
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio3" id="optradio3" value="3">Option 3
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio3" id="optradio3" value="4">Option 4
						</label>
						
						<p>The form below contains three inline radio buttons:</p>
						<label class="radio-inline">
						  <input type="radio" name="optradio1" id="optradio1">Option 1
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio1" id="optradio1">Option 2
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio1" id="optradio1">Option 3
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio1" id="optradio1">Option 4
						</label>
						
						<p>The form below contains three inline radio buttons:</p>
						<label class="radio-inline">
						  <input type="radio" name="optradio2" id="optradio2">Option 1
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio2" id="optradio2">Option 2
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio2" id="optradio2">Option 3
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio2" id="optradio2">Option 4
						</label>
						
						
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="gmail">Gmail</label>
							<input type="gmail" class="form-control" id="mail" name="mail">
						</div>
						<div class="form-group">
							<label for="number">Phone Number</label>
							<input type="gmail" class="form-control" id="number" name="number">
						</div>
						<input type="submit" value="Register" class="btn btn-info btn-block">
					</form>