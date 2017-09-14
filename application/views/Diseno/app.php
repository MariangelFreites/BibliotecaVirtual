<!DOCTYPE html>
<html>

<?php if ($HTMLheader) { echo $HTMLheader; } ?>

<body>

<!-- MAIN WRAPPER -->
<div class="body-wrap">
    <div id="st-container" class="st-container">

        <nav class="st-menu st-effect-1" id="menu-1">
    <div class="st-profile">
        <div class="st-profile-user-wrapper">
            <div class="profile-user-image">
                <img src="<?php echo base_url('assets/images/prv/people/person-1.jpg') ?>" class="img-circle" />
            </div>
            <div class="profile-user-info">
                <span class="profile-user-name">Bertram Ozzie</span>
                <span class="profile-user-email">username@example.com</span>
            </div>
        </div>
    </div>

    <div class="st-menu-list mt-2">
        <ul>
            <li>
                <a href="#">
                    <i class="ion-ios-bookmarks-outline"></i> Theme documentation
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-cart-outline"></i> Purchase Tribus
                </a>
            </li>
        </ul>
    </div>

    <h3 class="st-menu-title">Account</h3>
    <div class="st-menu-list">
        <ul>
            <li>
                <a href="#">
                    <i class="ion-ios-person-outline"></i> User profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-location-outline"></i> My addresses
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-card"></i> My cards
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-unlocked-outline"></i> Password update
                </a>
            </li>
        </ul>
    </div>

    <h3 class="st-menu-title">Support center</h3>
    <div class="st-menu-list">
        <ul>
            <li>
                <a href="#">
                    <i class="ion-ios-information-outline"></i> About Tribus
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-email-outline"></i> Contact &amp; support
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-camera"></i> Getting started
                </a>
            </li>
        </ul>
    </div>
</nav>

        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <!-- Header -->
                    <!-- Global search -->

<!-- Navbar -->
<?php if ($Navegacion) { echo $Navegacion; } ?>
                    <!-- Content -->
                    <?php if ($page) { echo $page; } ?>
                    
                    <!-- End Content -->
                    <!-- Carrusel -->
                    <?php if ($Carrusel) { echo $Carrusel; } ?>
                    <!-- Seccion 1 -->
                    <?php if ($Seccion1) { echo $Seccion1; } ?>
                    <!-- Seccion 2 -->
                    <?php if ($Seccion2) { echo $Seccion2; } ?>
                    <!-- Seccion 3 -->
                    <?php if ($Seccion3) { echo $Seccion3; } ?>
                    <!-- Seccion 4 -->
                    <?php if ($Seccion4) { echo $Seccion4; } ?>

                    <!-- Seccion 5 -->
                    <?php if ($Seccion5) { echo $Seccion5; } ?>

                    <!-- Seccion 6 -->
                    <?php if ($Seccion6) { echo $Seccion6; } ?>

                    <!-- Seccion 7 -->
                    <?php if ($Seccion7) { echo $Seccion7; } ?>

                    <?php if ($Footer) { echo $Footer; } ?>
                </div>
            </div>
        </div><!-- END: st-pusher -->
    </div><!-- END: st-container -->
</div><!-- END: body-wrap -->

<?php if ($scripts) { echo $scripts; } ?>

</body>

</html>
