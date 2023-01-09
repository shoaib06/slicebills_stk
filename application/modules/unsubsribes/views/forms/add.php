<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap">
						<h2 class="title-1"><?php echo $module_title; ?></h2>
					</div>
				</div>
			</div>
			<div class="row row m-t-25">

				
					<div class="col-lg-12">
					
						<?php 
							if($this->session->flashdata('flash_message'))
							{ ?>
								<div class="sufee-alert alert with-close alert-<?php echo $this->session->flashdata('class'); ?> alert-dismissible fade show">
									 <?php echo $this->session->flashdata('flash_message'); ?> 
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<?php
							}
							if((validation_errors()))
							{
								?>
								<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
									<?php echo validation_errors(); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>	
								<?php
							}
						?>
						
						
						
						<div class="card">
							<form action="<?php echo base_url($module.'/admin/add') ?>" method="POST" enctype="multipart/form-data">
								<div class="card-header">
									<strong><?php echo $module; ?></strong>
									<small> Form</small>
								</div>
								<div class="card-body card-block">
									
									<div class="row form-group">
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="product_name" class=" form-control-label">Product name</label>
												<input type="text" id="product_name" name="product_name" value="<?=set_value('product_name')?>" placeholder="" class="form-control">
											</div>
										</div>

										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="phone" class=" form-control-label">Phone</label>
												<input type="text" id="phone" name="phone" value="<?=set_value('phone')?>" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="purpose" class=" form-control-label">Purpose</label>
												<select name="purpose" class="form-control">
													<option value="">Select a Purpose</option>
													<?php echo $purposes; ?>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="price" class=" form-control-label">Price</label>
												<input type="text" id="price" name="price" value="<?=set_value('price')?>" class="form-control">
											</div>
										</div>
										<div class="col-sm-12 col-xs-12">
											<div class="form-group">
												<label for="remark" class=" form-control-label">Remark</label>
												<textarea class="form-control" name="remark"><?=set_value('remark')?></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="user_id" class=" form-control-label">Assigned to user</label>
												<select name="user_id" class="form-control">
													<option value="">Select a user</option>
													<?php echo $users; ?>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="activated_for" class=" form-control-label">No of days</label>
												<input type="number" id="activated_for" name="activated_for" value="<?=set_value('activated_for')?>" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="images" class=" form-control-label">Images</label>
												<input type="file" id="images" multiple name="images[]" value="<?=set_value('images')?>" class="form-control">
											</div>
										</div>
	
									</div>
								</div>
								<div class="card-footer" align="right">
									<input type="hidden" name="s" value="OK">
									<button type="submit" class="btn btn-primary btn-sm">
										<i class="fa fa-dot-circle-o"></i> Submit
									</button>
									
								</div>
							</form>	
						</div>
					</div>
				
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
    $('select').select2();
});
</script>
<style>
.select2-container
{
	display: block !important;
}
.select2-container--default .select2-selection--single {
   min-height: 38px;
}
</style>