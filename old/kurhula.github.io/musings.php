<html>

<?php include "dry/html.php"; ?>
<?php include "dry/head.php"; ?>

<body>

<div class="wrap-nav" id="nav-bar">
    <?php include "dry/button.php" ?>
    <?php include "dry/logo.php" ?>
    <?php include "dry/sections.php" ?>
    <?php include "dry/social.php" ?>
</div>


<div class="blog">

    <div class="fixed_width" id="sidebar">
        <?php include "dry/features.php"; ?>
        <?php include "dry/documents.php"; ?>
        <?php include "dry/bookmarks.php"; ?>
        <?php include "dry/competitions.php"; ?>
<!--        --><?php //include "dry/projects.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <!-- Development -->
            <?php include "dev/ampswr-blurb.php" ?>
            <?php include "dev/amsykhrrm-blurb.php" ?>
            <?php include "dev/basmpiaac-blurb.php" ?>
            <?php include "dev/htptspwd-blurb.php" ?>
            <?php include "dev/pagopws-blurb.php" ?>
            <?php include "dev/refactoring-blurb.php" ?>

            <!-- Innovation -->
            <?php include "inn/10000-blurb.php" ?>
            <?php include "inn/imamtdalak-blurb.php" ?>
            <?php include "inn/ladiameladtrm-blurb.php" ?>

            <!-- Authorship -->
            <?php include "aut/mrsttmdbosa-blurb.php" ?>
            <?php include "aut/tmc-blurb.php" ?>

            <!-- Entrepreneurship -->


        </div>
    </div>
</div>

<?php include "dry/scripts.php"?>

</body>
</html>
