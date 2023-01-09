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
                                    <form action="<?php echo base_url($module . '/admin/edit/' . $id) ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-floating">Website Title</label>
                                                    <input type="text" class="form-control" value="<?php echo $heading; ?>" name="title" />
                                                    <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-floating">Slug</label>
                                                    <input type="text" class="form-control" value="<?php echo $url; ?>" name="url" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?php 
                                            $dt = new DateTime($blog_date);
                                            
                                            ?>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-floating">Date</label>
                                                    <input type="date" class="form-control" id="date"  name="blog_date" value="<?php echo $dt->format('Y-m-d'); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <?php
                                                    $hide_logo = "hide";
                                                    if (!is_file(FCPATH . '/uploads/' . $image)) {
                                                        $hide_logo = "";
                                                    }
                                                    ?>
                                                    <div class="col-md-6 webiste_logo_file_container <?php echo $hide_logo; ?>">
                                                        <div class="form-file-upload form-file-simple">
                                                            <label class="bmd-label-floating">Upload Image </label><br />
                                                            <input type="file" class="" name="website_logo" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 uploaded_logo_cont">
                                                        <div class="form-file-upload form-file-simple">
                                                            <label class="bmd-label-floating">Uploaded Image </label><br />
                                                            <input type="hidden" name="uploaded_logo" value="<?php echo $image ?>" />
                                                            <div class="col-md-12 single_image">
                                                                <img style="width: 100%;" src="<?php echo base_url('uploads/' . $image) ?>" />
                                                                <span class="close_image"><i className="material-icons">clear</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-floating"></label>
                                                    <select name="category" id="" class="form-control">
                                                        <option value="">Select category</option>
                                                        <option value="1" <?= $category == 1 ? 'selected' : ''; ?> >Home Top</option>
                                                        <option value="2" <?= $category == 2 ? 'selected' : ''; ?> >Top Reads</option>
                                                        <option value="3" <?= $category == 3 ? 'selected' : ''; ?> >Trending</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-floating">Description</label>
                                                    <textarea id="trumbowyg-demo" name="description" class="form-control" rows="5"><?php echo $description; ?></textarea>
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