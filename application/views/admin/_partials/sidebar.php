<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="<?= base_url('back/images/icon/logo.png')?>" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li >
                    <a href="<?php echo site_url('admin/biodata/')?>">
                        <i class="fas fa-address-card"></i>Biodata</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/education/')?>">
                        <i class="fas fa-graduation-cap"></i>Education</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/experience/')?>">
                        <i class="fas fa-industry"></i>Experience</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/portofolio/')?>">
                        <i class="fas fa-quote-right"></i>Portofolio</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/skills/')?>">
                        <i class="fas fa-paper-plane"></i>Skills</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/contact/')?>">
                        <i class="fas fa-heart"></i>Social Media</a>
                </li>
                <!-- <li>
                    <a href="admin/maps">
                        <i class="fas fa-map"></i>Maps</a>
                </li> -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>User Option</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a href="register.php">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.php">Forget Password</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->