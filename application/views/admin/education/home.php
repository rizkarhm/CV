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
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">overview</h2>
                                <button class="au-btn au-btn-icon au-btn--blue">
                                    <a href="<?php echo site_url('admin/education/add/') ?>" style="color: white"><i class="zmdi zmdi-plus" style="color: white"></i>add item</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Type</th>
                                            <th>About</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $no=1; foreach ($education as $edu): ?>
                                        <tr>
                                            <td><?php echo $no; ?>.</td>
                                            <td><?php echo $edu->name; ?></td>
                                            <td><?php echo $edu->year; ?></td>
                                            <td><?php echo $edu->type; ?></td>
                                            <td><?php echo $edu->about; ?></td>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo site_url('admin/education/edit/'.$edu->id) ?>">
                                                <i class="fa fa-edit"></i> Edit</a> &nbsp
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/education/delete/'.$edu->id) ?>">
                                                <i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $no++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                                href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
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