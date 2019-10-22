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
                                        <strong>Edit</strong> skills
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?= base_url('admin/skills/edit'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <input type="hidden" name="id" value="<?php echo $skills['id'] ?>"/>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Full Name" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" value="<?php echo $skills['name'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('name') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="percentage" class=" form-control-label">Percentage</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="percentage" placeholder="Percentage" class="form-control <?php echo form_error('percentage') ? 'is-invalid':'' ?>" value="<?php echo $skills['percentage']."%" ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('percentage') ?>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="about" class=" form-control-label">About</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="about" id="text-input" name="about" placeholder="About" class="form-control <?php echo form_error('about') ? 'is-invalid':'' ?>" value="<?php echo $skills['about'] ?>" >
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('about') ?>
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