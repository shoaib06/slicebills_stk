<?php
$states = $this->common_model->SelectDropdown('tbl_locations','name','id',array($row->state),array('location_type' => 'STATE'));
$district= $this->common_model->SelectDropdown('tbl_locations','name','id',array($row->district),array('parent_id' => $row->state ));
$city = $this->common_model->SelectDropdown('tbl_locations','name','id',array($row->city),array('parent_id' => $row->district ));
$courses = $this->common_model->SelectDropdown('tbl_courses','name','id',array($row->course_assigned),array('parent_id' => 0, 'type' => 1 ));
$batches = $this->common_model->get_batches_dropdown(explode(',',$row->session)) ;
?>	

<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE TITLE-->
			<h1 class="page-title"> <?= $module_title; ?></h1>
			<?php 
				if($this->session->flashdata('flash_message'))
				{ ?>
					<div class="alert alert-<?php echo $this->session->flashdata('class'); ?>" style="display: block;">
						<button class="close" data-close="alert"></button>
						<span> <?php echo $this->session->flashdata('flash_message'); ?> </span>
					</div>
					<?php
				}
				if((validation_errors()))
				{
					?>
					<div class="alert alert-danger">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php echo validation_errors(); ?>
					</div>	
					<?php
				}
			?>
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" action="" method="post" enctype="multipart/form-data">
						<div class="portlet">
							<div class="form-body">
								<div class="" style="background-color: #efefef;padding:5px 15px;margin: 5px 0px; " >
									<div class="form-group" >
										<div class="col-sm-4">
											<label>Title:<span class="required"> * </span></label>
											<select name ="title" class="bs-select" disabled>
												<option value="1" <?php if($row->title == 1) { echo "selected"; } ?> >Mr</option>
												<option value="2" <?php if($row->title == 2) { echo "selected"; } ?> >Ms</option>
												<option value="3" <?php if($row->title == 3) { echo "selected"; } ?> >Mrs</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label>Name:<span class="required"> * </span></label>
											<input type="text" readonly value="<?= $row->name; ?>" name="name" class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Student Enroll No.<span class="required"> * </span></label>
											<input type="text" readonly value="<?= $row->enroll_no; ?>" name="enroll_no" disabled class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Email:<span class="required"> * </span></label>
											<input type="email" value="<?= $row->email; ?>" disabled name="email" class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Password:</label>
											<input type="password" name="password" class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Confirm Password:</label>
											<input type="password" name="cpassword" class="form-control"/> 
										</div>
									</div>
								</div>
								<div>Personal Detail</div>
								<div style="background-color: #efefef;padding:5px 15px;margin: 5px 0px; " >
									<div class="form-group" >
										<div class="col-sm-4">
											<label>Profile Image:</label>
											<input type="file" name="profile_pic" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Dob:<span class="required"> * </span></label>
											<input type="text"   value="<?php echo date('m/d/Y',$row->dob); ?>" readonly name="dob" class="form-control datepicker">
										</div>
										<div class="col-sm-4">
											<label>Mobile No:</label>
											<input type="number" value="<?= $row->mobile_no; ?>" name="mobile_no" class="form-control">
										</div>
										<div class="clearfix"></div>

										<div class="col-sm-4">
											<label>Father Name:<span class="required"> * </span></label>
											<input type="text" readonly value="<?= $row->father_name; ?>" name="father_name" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Mother Name:<span class="required"> * </span></label>
											<input type="text" readonly value="<?= $row->mother_name; ?>" name="mother_name" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Father Mobile:</label>
											<input type="text" readonly value="<?= $row->father_mobile; ?>" name="father_mobile" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Mother Mobile:</label>
											<input type="text" readonly  value="<?= $row->mother_mobile; ?>" name="mother_mobile" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Adhar Card Number:</label>
											<input type="text" readonly  value="<?= $row->adhar_card_number; ?>"  name="adhar_card_number" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Pincode:</label>
											<input type="text" readonly value="<?= $row->pincode; ?>"  name="pincode" class="form-control">
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-4">
											<label>State<span class="required"> * </span></label>
											<select name="state" class="bs-select form-control" onChange="get_districts(this.value)" disabled >
												<option value="0">Select a state</option>
												<?php echo $states ?>
											</select>
										</div>
										<div class="col-sm-4 districts_container" >
											<label>Districts<span class="required"> * </span></label>
											<select name="district" class="bs-select  form-control" disabled>
												<?php echo $district ?>
											</select>
										</div>
										<div class="col-sm-4 _container" >
											<label>City</label>
											<select name="city" readonly class="bs-select  form-control" disabled>
												<?php echo $city ?>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-6">
											<label>Permanent Address:</label>
											<input type="text" readonly value="<?= $row->permanent_address; ?>" name="permanent_address" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Current Address:</label>
											<input type="text" readonly value="<?= $row->curret_address; ?>" name="curret_address" class="form-control">
										</div>
										<div class="clearfix"></div>

										<div class="col-sm-4">
											<label>Session/Batch Assigned:<span class="required"> * </span></label>
											<select name="batch_assigned" class="bs-select form-control" disabled>
												<?php echo $batches; ?>
											</select>
										</div>
										<div class="col-sm-4">
											<label>Course Assigned:<span class="required"> * </span></label>
											<select name="course_assigned" class="bs-select form-control" disabled>
												<option value="">Select a course</option>
												<?php echo $courses; ?>
											</select>
										</div>
									</div>
								</div>
								<div>Fees section</div>
								<div style="background-color: #efefef;padding:5px 15px;margin: 5px 0px; " >
									<div class="form-group" >
										<div class="col-sm-4">
											<label>Fees Status:<span class="required"> * </span></label><br>
											<input readonly  value="1" <?php if($row->batch_fees_status == 1) { echo "checked"; } ?> type="checkbox" name="batch_fees_status" data-on-text="Paid" data-size="" data-off-text="Unpaid" class="make-switch"data-on-color="success" data-off-color="danger" id="">
										</div>
										
									</div>
								</div>
								
								<div class="actions btn-set text-right">
									<button type="button" onclick="window.location = '<?php echo base_url($this->path) ?>';"class="btn btn default">
										<i class="fa fa-angle-left"></i> Back
									</button>	
									<input type="hidden" name="s" value="ok">
									<button type="submit"  class="btn btn-success mt-ladda-btn ladda-button btn-outline" data-style="contract" data-spinner-color="#333">
										<i class="fa fa-check"></i> Save
									</button>
								</div>
								
							</div>
						</div>
					</form>
				</div>	
			</div>	
			
		</div>
		<!-- END CONTENT BODY -->
	</div>
	<link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        
	<!-- END CONTENT -->
	<script>
	$(document).ready(function()
	{
		if($('.bs-select').length)
		{
			$('.bs-select').select2({
				allowClear: true
			});
		}

		$('.datepicker').datepicker({
		    format: 'mm/dd/yyyy',
		    endDate: new Date(),
		    autoclose: true

		});
		
		$(document).on('change','select[name="district"]',function()
		{
			var value = $(this).val();
			var data = "id="+value;
			var path = "<?php echo $module_path; ?>/get_cities/";
			var result = CallAjax(path,data);
			if(result.html)
			{
				$('select[name="city"]').html(result.html);
			}

		});
	});
	</script>