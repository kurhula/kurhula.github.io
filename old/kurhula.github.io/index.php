<html>

<?php include "dry/html.php"; ?>
<?php include "dry/head.php"; ?>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="0">

<div class="wrap-nav" id="nav-bar">
    <?php include "dry/button.php"; ?>
    <?php include "dry/logo.php"; ?>
    <?php include "dry/sections.php"; ?>
    <?php include "dry/social.php"; ?>
</div>

<div id="fullpage">
    <div class="wrap-img section active img-responsive" id="slide-0">
        <div class="Center-Container is-Table">
            <div class="Table-Cell">
                <!--                <div class="Center-Block" id="txt-intro">-->
                <!--                    <h1>list(idea)</h1>-->
                <!--                </div>-->
            </div>
        </div>
    </div>

    <div class="wrap-img section" id="slide-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 content" id="content-1">
                    <div class="btn-toggle"><a href="#about"><i class="icon-angle-left"></i></a></div>
                    <div class="wrap-content">
                        <img src="img/kurhula03.jpg" class="img-responsive">
                        <h1><a name="about" href="about.php">About Me</a></h1>
                        <?php include "aboutme.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-img section" id="slide-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 content" id="content-2">
                    <div class="btn-toggle"><a href="#innovation"><i class="icon-angle-left"></i></a></div>
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <?php include 'dry/carousel.php'; ?>
                        <?php include 'dry/slides_background_images.php'; ?>
                    </div>
                    <div class="wrap-content">
                        <h1><a name="innovation" href="inventor.php">Innovation</a></h1>

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

                        <h4>
                            <a href="inventor.php" class="read-more">Read more</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-img section" id="slide-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 content" id="content-3">
                    <div class="btn-toggle"><a href="#development"><i class="icon-angle-left"></i></a></div>
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <?php include 'dry/carousel.php'; ?>
                        <?php include 'dry/slides_background_images.php'; ?>
                    </div>
                    <div class="wrap-content">
                        <h1><a name="development" href="developer.php">Development</a></h1>

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

                        <h4>
                            <a href="developer.php" class="read-more">Read more</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-img section" id="slide-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 content" id="content-4">
                    <div class="btn-toggle"><a href="#enterprise"><i class="icon-angle-left"></i></a></div>
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <?php include 'dry/carousel.php'; ?>
                        <?php include 'dry/slides_background_images.php'; ?>
                    </div>
                    <div class="wrap-content">
                        <h1><a name="enterprise" href="enterpreneur.php">Enterprise</a></h1>

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

                        <h4>
                            <a href="enterpreneur.php" class="read-more">Read more</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-img section" id="slide-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 content" id="content-5">
                    <div class="btn-toggle"><a href="#authorship"><i class="icon-angle-left"></i></a></div>
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <?php include 'dry/carousel.php'; ?>
                        <?php include 'dry/slides_background_images.php'; ?>
                    </div>
                    <div class="wrap-content">
                        <h1><a name="authorship" href="author.php">Authorship</a></h1>

                        <p>
                            Writing is the oldest of my professions. It started way back in grade 8 (the then standard
                            6). I wrote to practice my English. The first novel to read was called "A Bushveld Story".
                            The English there was hectic. But the better I became in English the more I seemed to lose
                            my Xitsonga. So I started writing in Xitsonga too. Soon enough I was writing about girls. My
                            proudest works borrow from reality, and indeed they are not my works. It is life speaking. I
                            have over 500 works of art and I will be sharing the less embarrassing ones on this
                            platform.
                        </p>

                        <h4>
                            <a href="author.php" class="read-more">Read more</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "dry/scripts.php"; ?>

</body>
</html>
