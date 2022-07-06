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
        <?php include "../dry/ent-archive.php"; ?>
    </div>

    <div class="dynamic_width" id="">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">Madyondza Consulting (Pty) Ltd.</h1>

                <p class="date">Last updated on: 16 June, 2014 by <a href="../index.php#about">Musa Kurhula Baloyi</a>
                </p>
                <br/>

                <center><img src="../img/ent/workstation.jpg" class="img-responsive"></center>
                <br/>
                <center><img src="../img/ent/server_rack.jpg" class="img-responsive"></center>
                <br/>
                <center><img src="../img/ent/Lenovo%20T520.jpg" class="img-responsive"></center>
                <br/>
                <center><img src="../img/ent/Ntwanano's%20laptop.jpg" class="img-responsive"></center>
                <br/>
                <center><img src="../img/ent/Castle%20Lite%20to%20lubricate%20the%20code.jpg" class="img-responsive"></center>
                <br/>
            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="tmc.php" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="mrsttmdbosa.php" rel="next">Next Post <span
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