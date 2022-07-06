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

                <img src="../img/smwjhb.png" class="img-responsive">
                <h1 class="title-post">Building a Social Media Platform in an African Context</h1>

                <p class="date">Last updated on: April 19, 2015 by
                    <a href="../index.php#about">Musa Kurhula Baloyi</a>,
                    <a href="https://www.facebook.com/tsatsi.mahase">Tsatsi Slyvester Mahase</a>
                </p>
                <br/>

                <p>
                    Social media networks have been around for a while and have changed the way individuals interact
                    with their circles and beyond. However, we believe that Africa still has to create one social
                    network that is going to address its needs, unlike conforming to an existing trend. There are many
                    challenges to this, but in the same breath, many opportunities abound. We are going to go into the
                    details of what these challenges are and also how a social media company can take advantage of the
                    opportunities around the continent.
                </p>

                <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                        allowfullscreen="" width="550" height="400"
                        src="https://prezi.com/embed/ncy7eap6mzut/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;PARENT_REQUEST_ID=a2c9e3dd3d4d2bd8#">
                </iframe>
            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="amsykhrrm.php" rel="prev"><span
                                    class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="dwdt.php" rel="next">Next Post <span
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