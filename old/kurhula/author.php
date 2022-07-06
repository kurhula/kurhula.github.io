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
        <?php include "dry/aut-archive.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">Authorship</h1>

                <p class="date">Last updated on: April 29, 2015 by <a href="index.php#about">Musa Kurhula Baloyi</a></p>

                <p>
                    Writing is the oldest of my professions. It started way back in grade 8 (the then standard
                    6). I wrote to practice my English. The first novel to read was called "A Bushveld Story".
                    The English there was hectic. But the better I became in English the more I seemed to lose
                    my Xitsonga. So I started writing in Xitsonga too. Soon enough I was writing about girls. My
                    proudest works borrow from reality, and indeed they are not my works. It is life speaking. I
                    have over 500 works of art and I will be sharing the less embarrassing ones on this
                    platform.
                </p>

                <nav role="navigation" id="nav-below" class="post-navigation">
                    <h4 class="screen-reader-text">Post navigation</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-previous">
                                <a href="enterpreneur.php" rel="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span> Previous Post</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-next">
                                <a href="musings.php" rel="next">Next Post <span
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
