<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- MENU SIDEBAR-->
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="<?php echo base_url('dashboard/admin'); ?>" class="simple-text logo-normal">
            <?php echo $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title')); ?>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php if ($this->router->fetch_module() == "dashboard") {
                            echo "active";
                        } ?>">
                <a class="nav-link" href="<?php echo base_url('dashboard/admin'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="<?php if ($this->router->fetch_module() == "leads") {
                            echo "active";
                        } ?> ">
                <a class="nav-link" href="<?php echo base_url('leads/admin'); ?>">
                    <i class="material-icons">person</i>
                    <p>Leads</p>
                </a>
            </li>

            <li class="<?php if ($this->router->fetch_module() == "pages") {
                            echo "active";
                        } ?> ">
                <a class="nav-link" href="<?php echo base_url('pages/admin'); ?>">
                    <i class="material-icons">pages</i>
                    <p>Pages</p>
                </a>
            </li>
            <li class="<?php if ($this->router->fetch_module() == "blogs") {
                            echo "active";
                        } ?> ">
                <a class="nav-link" href="<?php echo base_url('blogs/admin'); ?>">
                    <i class="material-icons">pages</i>
                    <p>Blogs</p>
                </a>
            </li>

            <li class="<?php if ($this->router->fetch_module() == "contact") {
                            echo "active";
                        } ?> ">
				<a class="nav-link" href="<?php echo base_url('contact/admin'); ?>">
				  <i class="material-icons">person</i>
				  <p>Enquiry</p>
				</a>
                
			</li>

            <li class="<?php if ($this->router->fetch_module() == "users") {
                            echo "active";
                        } ?> ">
				<a class="nav-link" href="<?php echo base_url('users/admin'); ?>">
				  <i class="material-icons">person</i>
				  <p>Users</p>
				</a>

			</li>
            <li class="<?php if ($this->router->fetch_module() == "donotsell") {
                            echo "active";
                        } ?> ">
				<a class="nav-link" href="<?php echo base_url('donotsell/admin'); ?>">
				  <i class="material-icons">person</i>
				  <p>Do not Sell</p>
				</a>

			</li>
            <li class="<?php if ($this->router->fetch_module() == "unsubsribes") {
                            echo "active";
                        } ?> ">
				<a class="nav-link" href="<?php echo base_url('unsubsribes/admin'); ?>">
				  <i class="material-icons">settings</i>
				  <p>Unsubcribe</p>
				</a>

			</li>


            <li class="<?php if ($this->router->fetch_module() == "settings") {
                            echo "active";
                        } ?> ">
                <a class="nav-link" href="<?php echo base_url('settings/admin'); ?>">
                    <i class="material-icons">settings</i>
                    <p>Settings</p>
                </a>
            </li>


        </ul>
    </div>
</div>
<!-- END MENU SIDEBAR-->