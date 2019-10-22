<?php
    include "_partials/header.php";
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- NAVBAR MOBILE-->
            <!-- HEADER MOBILE-->
            <?php
                include "_partials/navbar_mobile.php";
            ?>
            <!-- END HEADER MOBILE-->
        <!-- END NAVBAR MOBILE-->

        <!-- MENU SIDEBAR-->
        <!-- MENU SIDEBAR-->
         <?php
            include "_partials/sidebar.php"
        ?>
        <!-- END MENU SIDEBAR-->
    </div>
    
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- NAVBAR DESKTOP-->
        <!-- HEADER DESKTOP-->
        <?php
            include "_partials/navbar.php"
        ?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">overview</h2>
                                <button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            </div>
                        </div>
                    </div> -->

                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <!-- <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fullname</th>
                                            <th>Nickname</th>
                                            <th>Birth</th>
                                            <th>Gender</th>
                                            <th>Job</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Nationality</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Rizka Nur Rahma</td>
                                            <td>Rizka</td>
                                            <td>Malang, 10 Januari 2002</td>
                                            <td>Female</td>
                                            <td>Student</td>
                                            <td>(+62)8785 9159 058</td>
                                            <td>rizkarahma67@gmail.com</td>
                                            <td>Perum. Bumi Mondoroko Raya AL-34, Singosari</td>
                                            <td>Indonesia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->

                        <?php
                            include "_partials/footer.php";
                        ?>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
        
    <?php
        include "_partials/js.php";
    ?>
</body>
</html>