<?php
    $this->load->view('admin/_partials/header');
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- NAVBAR MOBILE-->
            <!-- HEADER MOBILE-->
            <?php
                $this->load->view('admin/_partials/navbar_mobile.php');
            ?>
            <!-- END HEADER MOBILE-->
        <!-- END NAVBAR MOBILE-->

        <!-- MENU SIDEBAR-->
        <!-- MENU SIDEBAR-->
         <?php
            $this->load->view('admin/_partials/sidebar.php');
        ?>
        <!-- END MENU SIDEBAR-->
    </div>
    
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- NAVBAR DESKTOP-->
        <!-- HEADER DESKTOP-->
        <?php
            $this->load->view('admin/_partials/navbar.php');
        ?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit</strong> Biodata
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?= base_url('admin/biodata/edit'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <input type="hidden" name="id" value="<?php echo $biodata['id'] ?>"/>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Full Name" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" value="<?php echo $biodata['name'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('name') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nick_name" class=" form-control-label">Nick Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nick_name" placeholder="Nick Name" class="form-control <?php echo form_error('nick_name') ? 'is-invalid':'' ?>" value="<?php echo $biodata['nick_name'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('nick_name') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="place" class=" form-control-label">Place</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="place" placeholder="Place" class="form-control <?php echo form_error('place') ? 'is-invalid':'' ?>" value="<?php echo $biodata['place'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('place') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="date" placeholder="Date" class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>" value="<?php echo $biodata['date'] ?>" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('date') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="job" class=" form-control-label">Job</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="job" placeholder="Job" class="form-control <?php echo form_error('job') ? 'is-invalid':'' ?>" value="<?php echo $biodata['job'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('job') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class=" form-control-label">Email Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email" placeholder="Email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" value="<?php echo $biodata['email'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('email') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="phone" class=" form-control-label">Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" name="phone" placeholder="phone" class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" value="<?php echo $biodata['phone'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('phone') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="address" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input name="address" id="textarea-input" rows="9" placeholder="Address" class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>" value="<?php echo $biodata['address'] ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('address') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="gender" class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input name="gender" id="textarea-input" placeholder="Gender" class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>" value="<?php echo $biodata['gender'] ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('gender') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nationality" class=" form-control-label">Nationality</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input name="nationality" id="textarea-input" rows="9" placeholder="Nationality" class="form-control <?php echo form_error('nationality') ? 'is-invalid':'' ?>" value="<?php echo $biodata['nationality'] ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('nationality') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="photo" class=" form-control-label">Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="hidden" name="old_image" value="<?php echo $biodata['photo'] ?>" />
                                                    <input type="file" id="photo" name="photo" class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('photo') ?>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END MAIN CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
    
    <?php
        $this->load->view('admin/_partials/js.php');
    ?>
</body>
</html>