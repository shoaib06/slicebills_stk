<!-- MAIN CONTENT-->
<div class="main-content" style="margin-top:80px">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap">
						
					</div>
				</div>
			</div>
			<div class="row row m-t-25">

				<div class="col-md-12">
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
						<div class="col-md-12">
						  <div class="card">
							<div class="card-header card-header-primary">
							  <h4 class="card-title"><h2 class="title-1"><?php echo ucfirst($module_title); ?></h2></h4>
							 
							</div>
							<div class="card-body">
								<form action="<?php echo base_url($module.'/admin/edit/'.$id) ?>"  method="POST" enctype="multipart/form-data" >
									
									<div class="row">
										<div class="col-md-6">
											<div class="form-group bmd-form-group">
												<label class="bmd-label-floating">Question</label>
												<input type="text" class="form-control" name="title" value="<?=$question?>" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group bmd-form-group">
												<label class="bmd-label-floating">Order</label>
												<input type="number" class="form-control" name="number"  value="<?=$orders?>" >
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group bmd-form-group">
												<label class="bmd-label-floating">Answer</label>
												<textarea  id="trumbowyg-demo" name="description"  class="form-control" rows="5"  placeholder="Answer"><?php echo $answer; ?></textarea>
											</div>
										</div>
									</div>
									<input type="hidden" class="" value="s" name="s">
									<button type="submit" class="btn btn-primary pull-right">Submit</button>
									<div class="clearfix"></div>
									
								</form>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.12.0/dist/ui/trumbowyg.min.css">
<link rel="stylesheet" href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.12.0/dist/plugins/colors/ui/trumbowyg.colors.min.css">
<script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.12.0/dist/trumbowyg.min.js"></script>


<script>
	$(document).ready(function() {
	
		$('#trumbowyg-demo').trumbowyg();
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
.close_image {
    display: inline-block;
    position: absolute;
    top: 0;
    right: 15px;
	cursor: pointer;
}
</style>