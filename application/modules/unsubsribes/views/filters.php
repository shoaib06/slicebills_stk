<form action="" method="get" class="row ">
	<div class="col-md-3">
		<div class="form-group">
			<label for="nf-from" class=" form-control-label">From</label>
			<input type="date" id="nf-email" name="from" value="<?php echo $this->input->get('from'); ?>" class="form-control">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="nf-from" class=" form-control-label">To</label>
			<input type="date" id="nf-email" name="to" value="<?php echo $this->input->get('to'); ?>" class="form-control">
		</div>
	</div>
	<div class="col-md-3">
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">
					 Filter
				</button>
				<a type="reset" href="<?php echo base_url($module.'/admin'); ?>"  class="btn btn-danger btn-sm">
					Reset
				</a>
		</div>
	</div>
</form>