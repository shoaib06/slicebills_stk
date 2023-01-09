<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <?php $website_title =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title')); ?>
            <span style="color: #ffff !important;">Copyright &copy; <?= $website_title . ' ' . date('Y') ?> </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<style>
    .error {
        color: hsl(11deg 80% 45%);
    font-size: 7rem;;
        font-size: 1rem;
        position: relative;
        line-height: 1;
        width: 100%;
    }
</style>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/agent/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/agent/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/agent/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/agent/js/sb-admin-2.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dataTable').DataTable();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>
    $(document).ready(function() {
        jQuery.validator.addMethod("passwordCheck",
        function(value, element, param) {
            if (this.optional(element)) {
                return true;
            } else if (!/[A-Z]/.test(value)) {
                return false;
            } else if (!/[a-z]/.test(value)) {
                return false;
            } else if (!/[0-9]/.test(value)) {
                return false;
            }

            return true;
        },
        "error msg here");
        $("#register").validate({
            rules: {
                new_password: {
                    required: true,
                    minlength: 12,
                    passwordCheck:"passwordCheck"
                },
                confirm_password: {
                    required: true,
                    minlength: 12,
                    equalTo: "#new_password"
                },

            },
            messages: {

                new_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 12 characters long",
                    passwordCheck:"Password must contain uppercase,lowercase and symbol"
                },
                confirm_password: {
                    required: "Please provide a confirm password",
                    minlength: "Your password must be at least 12 characters long",
                    equalTo: "Please enter the same password"
                },

            },
            // errorPlacement: function(error, element) {
            //     // $("#errorTxt").append('<div class="alert alert-danger" role="alert">' + $(error).text() + '</div>');

            // },
        });
    })
</script>




</body>

</html>