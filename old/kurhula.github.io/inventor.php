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
        <?php include "dry/inn-archive.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">Innovation</h1>

                <p class="date">Last updated on: April 29, 2015 by <a href="index.php#about">Musa Kurhula Baloyi</a></p>

                <p>
                    It is hard to say what innovation is and what it is not. The ideas that I will showcase here
                    may or may not be innovative. I've deliberately labelled this category "innovation" to avoid
                    the more genius, provocative and calling for scrutiny "invention". In my life I have found
                    that I would come up with different ways of doing things such that twice I've gone through
                    patent processes. So I do think I can innovate if I toil. Too many ideas are the reason why
                    I can never finish anything. Some of my ideas were due to a lack of knowledge and had been
                    implemented by somebody else, some even perfectly implemented. But this is really a process
                    of discovery more than anything. Knowing too much is bad for innovation, however, knowing
                    too little is worse.
                </p>

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
                                <a href="developer.php" rel="next">Next Post <span
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
