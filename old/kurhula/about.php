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
        <!--        --><?php //include "dry/inn-archive.php"; ?>
        <!--        --><?php //include "dry/dev-archive.php"; ?>
        <!--        --><?php //include "dry/ent-archive.php"; ?>
        <!--        --><?php //include "dry/aut-archive.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">About Me</h1>

                <p class="date">Last updated on: March 28, 2020 by Musa Kurhula Baloyi</p>

                <?php include "aboutme.php"; ?>

                <!-- <p>
                    I was also profiled on these sites as well:
                <ul>
                    <li>
                        <a href="https://www.aims.ac.za/en/about/aims-students/aims-alumni/musa-baloyi">African Institute for Mathematical Sciences</a>
                    </li>
                    <li>
                        <a href="https://www.wits.ac.za/news/news-migration/home/faculties-and-schools/science/csam/archive/news/news-and-events/news-from-alumni/">University of the Witwatersrand, Johannesburg</a>
                    </li>
                </ul>
                </p> -->

                <nav role="navigation" id="nav-below" class="post-navigation">
                    <h4 class="screen-reader-text">Post navigation</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-previous">
                                <a href="index.php" rel="prev"><span
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
