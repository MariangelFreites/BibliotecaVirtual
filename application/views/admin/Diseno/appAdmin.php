<!DOCTYPE html>
<html>

  <?php if ($HTMLheaderAdmin) { echo $HTMLheaderAdmin; } ?>


<body>
    <div id="wrapper">
        <?php if ($BarraLateralAdmin) { echo $BarraLateralAdmin; } ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php if ($HeaderAdmin) { echo $HeaderAdmin; } ?>
        <!-- Content -->
        <?php if ($page) { echo $page; } ?>
        <!--<?php if ($WidgetsAdmin) { echo $WidgetsAdmin; } ?>-->
        <!-- End Content -->

        </div>
        <?php if ($SmallChatBox) { echo $SmallChatBox; } ?>

        <?php if ($SmallChat) { echo $SmallChat; } ?>

        <?php if ($RightSidebar) { echo $RightSidebar; } ?>
    </div>

    <?php if ($scriptsAdmin) { echo $scriptsAdmin; } ?>

</body>

</html>
