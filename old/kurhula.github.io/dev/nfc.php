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

                <h1 class="title-post">Ntwanano's first car</h1>

                <p class="date">Last updated on: June 24, 2015 by <a href="https://www.facebook.com/ntwanano.mabasa">Ntwanano
                        Trevor Mabasa</a></p>
                <br/>

                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/rYHpBc4ZDdo" frameborder="0"
                            allowfullscreen></iframe>
                </center>

                <p>
                    An app-controlled robot built by Ntwanano Mabasa, a BScHons (Computer Science) student at the
                    University of Johannesburg. This is a step in the journey to building an autonomous car.
                </p>

                <br/>
                <img src="../img/ntwanano.jpg" class="img-responsive">
            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="htptspwd.php" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="pagopws.php" rel="next">Next Post <span
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