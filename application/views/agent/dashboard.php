<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">


    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('agent/common/topbar'); ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="<?= base_url('agent/leads')?>">
                    <button class="btn btn-success">New Lead</button>
                </a>
            </div>

            <!-- Content Row -->

            <style>
                .table th {
                    padding: 0.75rem;
                    vertical-align: top;
                    border-top: unset !important;

                }

                .table thead th {
                    border-bottom: unset !important;
                }
            </style>
            <?php $this->common_model->showAlertMsg(); ?>
            <div class="container-fluid">
                <div class="table-responsive">
                <table id="example" class="display dataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>Debt Type</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                            <th>Phone No</th>
                            <th>Secondary Phone No</th>
                            <th>City</th>
                            <th>Debt Amount</th>
                            <th>Appointment</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($table_data as $value) {
                        ?>
                            <tr>
                                <td><?php echo $value['debt_type'] ?></td>
                                <td><?php echo $value['first_name'] ?></td>
                                <td><?php echo $value['last_name'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['phone'] ?></td>
                                <td><?php echo $value['secondary_phone'] ?></td>
                                <td><?php echo $value['city'] ?></td>
                                <td><?php echo $value['debt_amount'] ?></td>
                                <td><?php echo date('m-d-Y h:i A',strtotime($value['date_time'])) ?></td>
                                <td><?php echo $value['message'] ?></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
                </div>
            </div>


            <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->