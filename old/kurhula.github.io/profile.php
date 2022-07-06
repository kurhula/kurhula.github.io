<html>

<?php include "dry/html.php"; ?>
<?php include "dry/head.php"; ?>

<body>

<div class="wrap-nav" id="nav-bar">
    <?php include "dry/button.php"; ?>
    <?php include "dry/logo.php"; ?>
    <?php include "dry/sections.php"; ?>
    <?php include "dry/social.php"; ?>
</div>

<div class="blog">

    <div class="fixed_width" id="sidebar">
        <?php include "dry/profile-archive.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">Profile</h1>

                <p class="date">Last updated on: March 29, 2020 by <a href="index.php#about">Musa Kurhula Baloyi</a></p>

                <?php include "myprofile.php"; ?>

                <nav role="navigation" id="nav-below" class="post-navigation">
                    <h4 class="screen-reader-text">Post navigation</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-previous">
                                <a href="about.php" rel="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span> Previous Post</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-next">
                                <a href="inventor.php" rel="next">Next Post <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include "dry/scripts.php"; ?>

</body>
</html>
