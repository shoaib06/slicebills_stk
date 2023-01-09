<?php
$state_id= $this->common_model->GetSingleValue('tbl_master_franchise','state_id',array('id'=>$row->mf_id));
$district= $this->common_model->SelectDropdown('tbl_locations','name','id',explode(',',$row->assign_districts),array('parent_id' => $state_id ));
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
                                <div class="form-group" style="background-color: #efefef;padding:5px 0px;margin: 5px 0px; ">
									<div class="col-sm-4">
										<label>Center Name:<span class="required"> * </span></label>
										<input type="text" readonly value="<?= $row->name ?>"  name="name" class="form-control"/> 
									</div>
									<div class="col-sm-4" >
										<label>Assign Districts<span class="required"> * </span></label>
										<select name="districts[]" multiple disabled class="bs-district  form-control">
											<?php echo $district ?>
										</select>
									</div>
									<div class="col-sm-4">
										<label>Center Category<span class="required"> * </span></label>
										<select name="category" class="bs-select form-control" disabled >
											<option value="1.5" <?php if($row->category == "1.5") { echo "selected";} ?> >A</option>
											<option value="2" <?php if($row->category == "2") { echo "selected";} ?> >B</option>
											<option value="2.5" <?php if($row->category == "2.5") { echo "selected";} ?>>C</option>
										</select>
									</div>
								</div>
								<div class="">Personal/Business Detail</div>
								<div class="business_container" style="background-color: #efefef;padding:4px 15px;margin: 5px 0px; ">
									<div class="form-group">
										<div class="col-sm-4">
											<label>Contact Concern Person:<span class="required"> * </span></label>
											<input type="text" readonly value="<?= $row->contact_person; ?>" name="contact_person" class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Primary Email Address:<span class="required"> * </span></label>
											<input type="text" value="<?= $row->email; ?>" name="email" disabled class="form-control"/> 
										</div>
										<div class="col-sm-4">
											<label>Secondary Email Address:</label>
											<input type="text"  value="<?= $row->second_email; ?>" name="second_email" class="form-control"/> 
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-6">
											<label>Contact Person Address:</label>
											<input type="text" readonly  value="<?= $row->address; ?>" name="address" class="form-control"/> 
										</div>
										<div class="col-sm-3">
											<label>Office Contact No.:</label>
											<input type="text"  value="<?= $row->ofc_contact_no; ?>" name="ofc_contact_no" class="form-control"/> 
										</div>
										<div class="col-sm-3">
											<label>Mobile Number:<span class="required"> * </span></label>
											<input type="number"   value="<?= $row->mobile_no; ?>"  name="mobile_no" class="form-control"/> 
										</div>
									</div>
									<div class="form-group">
										<?php 
											if(!empty($row->profile_pic))
											{
												$profile_pic = $row->profile_pic;
												?>
												<div class="col-sm-6 profile_image_container">
													<div class="col-md-4">
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
										<div class="col-sm-6  profile_pic_file_upload <?php if(!empty($row->profile_pic)) { echo "hide"; }  ?>" >
											<label>Profile Image:</label>
											<input type="file" name="profile_pic" class="form-control">
										</div>
										<div class="col-sm-3">
											<label>Password:</label>
											<input type="password" name="password" class="form-control">
										</div>
										<div class="col-sm-3">
											<label>Confirm Password:</label>
											<input type="text" name="cpassword" class="form-control"/> 
										</div>
									</div>
								</div>
								<div class="">Document Uploads </div>
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
														<option value="gst">GST</option>
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
				placeholder: "Select a state",
				allowClear: true
			});
		}
		
		if($('.bs-district').length)
		{
			$('.bs-district').select2({
				multiple: true,
				maximumSelectionLength: 5
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
				/* $('.documents:eq('+(containers-1)+')').find('option').each(function()
				{
					var newval = $(this).val();
					if(jQuery.inArray(newval, array) !== -1)
					{
						$(this).attr('disabled',true);
					}
					else
					{
						$(this).attr('selected',true);
					}
				}); */
				
				if(containers == 3)
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
		
		$(document).on('change','input[name="have_multiple_mf"]',function()
		{
			$('.districts_container').addClass('hide');
			var value = $(this).prop('checked');
			if(value == true)
			{
				$('.districts_container').removeClass('hide');
				$('.districts_container').find('select').change();
			}
		});
		$(document).on('click','.cross_profile_pic',function(e)
		{
			e.preventDefault();
			$(this).parents('.profile_image_container').remove();
			$('.profile_pic_file_upload').removeClass('hide');
			
		});
	 });
	</script>