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
        <?php include "dry/ent-archive.php"; ?>
    </div>

    <div class="dynamic_width">
        <div class="wrap-content">
            <div id="post">
                <h1 class="title-post">Enterprise</h1>

                <p class="date">Last updated on: April 29, 2015 by <a href="index.php#about">Musa Kurhula Baloyi</a></p>

                <p>
                    I have had a couple of failed attempts at business. Some of them were childish and naive,
                    really. I sometimes wonder how I ever thought they could have worked. But I keep dreaming
                    and trying, trying and learning, staying up and daydreaming. To me entrepreneurship is more
                    about being enterprising. An enterprising person takes opportunities in front of them and
                    makes the best of them. They also create opportunities. So this is a manner of living,
                    versus a scheme to make money. Money is only one resource that we need to survive. There is
                    time and relationships that are also very important. Make all these things work for you and
                    you satisfy my definition of enterprising. Lately I've been drawn to making money without
                    lifting a finger, by investing in businesses that will take care of the operations. As a
                    beginner you want to run your own operations, until you realise that you can't.
                </p>

                <nav role="navigation" id="nav-below" class="post-navigation">
                    <h4 class="screen-reader-text">Post navigation</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-previous">
                                <a href="developer.php" rel="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span> Previous Post</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-next">
                                <a href="author.php" rel="next">Next Post <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script src="js/blog.js"></script>

</body>
</html>
