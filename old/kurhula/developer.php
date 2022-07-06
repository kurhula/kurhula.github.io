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
        <?php include "dry/dev-archive.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">Development</h1>

                <p class="date">Last updated on: April 29, 2015 by <a href="index.php#about">Musa Kurhula Baloyi</a></p>

                <p>
                    I wrote my first software program when I was 20. I am by no means a prodigy. This fact has
                    deterred me from thinking I could ever be the best software developer, and create a Facebook
                    or a Google. However, it has not deterred me from wanting to share my experiences writing
                    software. There is a lot of work that has been done out there and I aim to dig and share. I
                    was a computer science major and I am still to find that sweet spot where theory meets
                    practice. The idea is to take this journey of pragmatism with a fair dose of theory. I am
                    especially keen to investigate how software can be written in African languages. Since my
                    mother tongue is Xitsonga, I have been experimenting with it. Another area I'm interested in
                    is finance, so expect to see a few finance excursions.
                </p>

                <nav role="navigation" id="nav-below" class="post-navigation">
                    <h4 class="screen-reader-text">Post navigation</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-previous">
                                <a href="inventor.php" rel="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span> Previous Post</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-next">
                                <a href="enterpreneur.php" rel="next">Next Post <span
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
