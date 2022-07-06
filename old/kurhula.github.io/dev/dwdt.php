<html>

<?php include "../dry/html.php"; ?>
<?php include "../dry/head.php"; ?>

<body data-spy="scroll" data-target=".nav-collapse" data-offset="0">

<div class="wrap-nav" id="nav-bar">
    <?php include "../dry/button.php"; ?>
    <?php include "../dry/logo.php"; ?>
    <?php include "../dry/sections.php"; ?>
    <?php include "../dry/social.php"; ?>
</div>

<div class="blog">

    <div class="fixed_width" id="sidebar">
        <?php include "../dry/dev-archive.php" ?>
    </div>

    <div class="dynamic_width" id="">
        <div class="wrap-content">
            <div id="post">

                <h1 class="title-post">DataWinners Developer Tools</h1>

                <p class="date">Last updated on: June 9, 2015 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>
                <br/>

                <p>
                    Short introductions to Memcached, RabbitMQ and Celery, and their use in the DataWinners project.
                </p>

                <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                        allowfullscreen="" width="550" height="400"
                        src="https://prezi.com/embed/vfqlud8oqx9c/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;PARENT_REQUEST_ID=6fde776dbf44d904#">
                </iframe>
            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="basmpiaac.php" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="htptspwd.php" rel="next">Next Post <span
                                    class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<?php include "../dry/scripts.php"; ?>

</body>
</html>