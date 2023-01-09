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
									<form action="<?php echo base_url($module . '/admin/add') ?>" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group bmd-form-group">
													<label class="bmd-label-floating">Question</label>
													<textarea id="trumbowyg-demo" name="question" class="form-control" rows="3"><?php echo isset($question) ? $question : ''; ?></textarea>
												</div>
											</div>

											<div class="col-sm-10 col-xs-12">
												<label class="bmd-label-floating">Option 1</label>
												<div class="form-group">
													<textarea name="answer[]" rows="8" class="form-control  " id="answer1"></textarea>
												</div>
											</div>
											<div class="col-sm-2 col-xs-12">
												<div class="form-group">

													<input type="radio" value="1" name="correct">
												</div>
											</div>
											<div class="col-sm-10 col-xs-12">
												<label class="bmd-label-floating">Option 2</label>
												<div class="form-group">
													<textarea name="answer[]" rows="8" class="form-control  " id="answer1"></textarea>
												</div>
											</div>
											<div class="col-sm-2 col-xs-12">
												<div class="form-group">

													<input type="radio" value="2" name="correct">
												</div>
											</div>
											<div class="col-sm-10 col-xs-12">
												<label class="bmd-label-floating">Option 3</label>
												<div class="form-group">
													<textarea name="answer[]" rows="8" class="form-control  " id="answer1"></textarea>
												</div>
											</div>
											<div class="col-sm-2 col-xs-12">
												<div class="form-group">

													<input type="radio" value="3" name="correct">
												</div>
											</div>
											<div class="col-sm-10 col-xs-12">
												<label class="bmd-label-floating">Option 4</label>
												<div class="form-group">
													<textarea name="answer[]" rows="8" class="form-control  " id="answer1"></textarea>
												</div>
											</div>
											<div class="col-sm-2 col-xs-12">
												<div class="form-group">

													<input type="radio" value="4" name="correct">
												</div>
											</div>
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">

													<input type="radio" value="1"  name="status" checked> Active
													<input type="radio" value="0"  name="status"> Inactive
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