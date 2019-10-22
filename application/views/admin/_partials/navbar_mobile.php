<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="<?= base_url('back/images/icon/logo.png');?>" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-address-card"></i>Biodata</a>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-graduation-cap"></i>Education</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-industry"></i>Experience</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="fas fa-quote-right"></i>Portofolio</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-paper-plane"></i>Skills</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-heart"></i>Social Media</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map"></i>Map</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>User Option</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->