<div class="main-content" style="margin-top: 80px;">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap"></div>
				</div>
			</div>
			<div class="row row m-t-25">
				<div class="col-md-12">
					<div class="col-lg-12">
						<div class="col-md-12">
							<?php if ($this->session->flashdata('flash_message')) { ?>
								<div class="sufee-alert alert with-close alert-<?php echo $this->session->flashdata('class'); ?> alert-dismissible fade show">
									<?php echo $this->session->flashdata('flash_message'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
							<?php
							}
							if ((validation_errors())) {
							?>
								<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
									<?php echo validation_errors(); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
							<?php
							} ?>
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">
										<h2 class="title-1"><?php echo ucfirst($module_title); ?></h2>
									</h4>
								</div>
								<div class="card-body">
									<form action="<?php echo base_url($module . '/admin/edit/'.$id) ?>" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="name" class=" form-control-label">Name</label>
												<input type="text" id="name" name="name" value="<?= $name ?>" placeholder="Enter your name" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="email" class=" form-control-label">E-mail</label>
												<input type="text" id="email" name="email" value="<?= $email ?>" placeholder="Email" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
												<label for="phone" class=" form-control-label">Phone</label>
												<input type="text" id="phone" name="phone" value="<?= $phone ?>" placeholder="Enter Phone" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">
											<input type="checkbox" class="flat" value = "1" name="change_password">
											Resend reset password
												
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="form-group">

												<input type="radio" value="1" <?= $status==1?'checked':'';?>  name="status"> Active
												<input type="radio" value="0" <?= $status==0?'checked':'';?> name="status"> Inactive
											</div>
										</div>
								</div>

								<input type="hidden" class="" value="s" name="s" />
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
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
<link rel="stylesheet" href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.12.0/dist/ui/trumbowyg.min.css" />
<link rel="stylesheet" href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.12.0/dist/plugins/colors/ui/trumbowyg.colors.min.css" />
<script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.12.0/dist/trumbowyg.min.js"></script>

<script>
	$(document).ready(function() {
		$("#trumbowyg-demo").trumbowyg();

		$(document).on("click", ".close_image", function(e) {
			e.preventDefault();
			$(this).parents(".uploaded_logo_cont").remove();
			$(".webiste_logo_file_container").removeClass("hide");
		});
	});
</script>
<style>
	.select2-container {
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

	.hide {
		display: none;
	}
</style>

<style>
	.select2-container {
		display: block !important;
	}

	.select2-container--default .select2-selection--single {
		min-height: 38px;
	}
</style>
