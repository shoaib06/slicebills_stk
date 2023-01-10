<div class="main-content" style="margin-top: 80px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="">
                <div class="col-md-12"><?php $this->load->view('filters'); ?></div>
            </div>
            <!--
			<div class="">
				<div class="col-md-12">
					<div class="overview-wrap">
						<button class="btn btn-primary pull-right">Download CSV</button>
					</div>
				</div>
			</div>
			-->
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="card">
                    <div class="row card-header card-header-primary">
                        <div class="col-md-6">
                            <h4 class="card-title"><?php echo $module_title; ?></h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo base_url('leads/admin/exportCSV?' . $this->input->server('QUERY_STRING')) ?>" class="btn btn-success pull-right">Download CSV</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Debt Amount</th>
                                        <th>Employment_status</th>
                                        <th>Financial Difficulty</th>
                                        <th>Loan type</th>
                                        <th>Have Student Loan?</th>
                                        <th>Student Loan Type</th>
                                        <th>Falling behind payment</th>
                                        <th>Property Live In</th>
                                        <th>Postal Code</th>
                                        <th>Certificate </th>
                                        <th>Ping Url</th>
                                        <th>IP Address</th>
                                        <!-- <th>Submitted by</th> -->
                                        <th>Submitted at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($results) : ?>
                                        <?php foreach ($results as $result) : ?>
                                            <tr>
                                                <td><?php echo ucfirst($result['first_name'] . ' ' . $result['last_name']) ?></td>
                                                <td><?php echo $result['email'] ?></td>
                                                <td><?php echo $result['phone'] ?></td>
                                                <td><?php echo $result['debt_amount'] ?></td>
                                                <td><?php echo $result['employment_status'] ?></td>

                                                <td><?php echo $result['contibute_factor'] ?></td>
                                                <td><?php echo $result['loan_type'] ?></td>
                                                <td><?php echo $result['have_st_loan'] ?></td>
                                                <td><?php echo $result['st_loan_type']; ?></td>
                                                <td><?php echo $result['falling_behind_payment']; ?></td>
                                                <td><?php echo $result['property_live_in']; ?></td>
                                                
                                                <td><?php echo $result['zip_code'] ?></td>


                                                <td>
                                                <?php if($result['certUrl']){?>    
                                                <a href="<?php echo $result['certUrl']?>" target="_blank">
                                                    <img src="<?= base_url();?>uploads/certificate.png" style="width:50px"></a>
                                                <?php }?>    
                                                </td>
                                                <td>
                                                <?php if($result['pingUrl']){?>    
                                                    <a href="<?php echo $result['pingUrl']?>" target="_blank">
                                                    <img src="<?= base_url();?>uploads/hyperlink.png" style="width:40px"></a>
                                                
                                                    </a>
                                                <?php }?>    
                                                </td>


                                                <td><?php echo $result['ip_address'] ?></td>

                                                <td><?php echo date('d-M-Y', $result['timestamp']) ?></td>

                                               
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td style="text-align: center;" colspan="15">Data not found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal medium -->

<!-- end modal medium -->
<style>
    .rs-select2--sm {
        width: 114px;
    }

    .select2-container {
        display: block !important;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css" rel="stylesheet" media="all" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script>
    /* All script of same page will go here */

    $(".date").datepicker({
        language: "en",
        inline: true,
        dateFormat: "dd-mm-yyyy",
        minDate: new Date(), // Now can select only dates, which goes after today
        onSelect: function(formattedDate, date, inst) {
            $(document).find('input[name="hold_date"]').val(formattedDate);
        },
    });

    $(document).on("click", ".delete", function(
        e // Delete category
    ) {
        e.preventDefault();
        var id = $(this).attr("pid");
        $.confirm({
            title: "Confirm!",
            content: "Are you sure to delete?",
            buttons: {
                confirm: function() {
                    var data = "type=delete&id=" + id;
                    var path = "<?php echo $module ?>/admin/delete";
                    var result = CallAjax(path, data);
                    modalbox(result);
                },
                cancel: function() {},
            },
        });
    });
    $('.dataTable').DataTable({order:[[12,"asc"]]});
</script>
<!-- END MAIN CONTENT-->