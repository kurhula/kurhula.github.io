<html>
<?php include "../dry/html.php"; ?>
<?php include "../dry/head.php"; ?>

<body data-spy="scroll" data-target=".nav-collapse" data-offset="0">

<div class="wrap-nav" id="nav-bar">
    <?php include "../dry/button.php" ?>
    <?php include "../dry/logo.php" ?>
    <?php include "../dry/sections.php" ?>
    <?php include "../dry/social.php" ?>
</div>

<div class="blog">
    <div class="fixed_width" id="sidebar">
        <?php include "../dry/dev-archive.php" ?>
    </div>

    <div class="dynamic_width" id="">
        <div class="wrap-content">
            <div id="post">

                <!-- <img src="../img/pagopws.jpg" class="img-responsive"> -->
                <h1 class="title-post">On Coding: the Anti-Patterns</h1>

                <p class="date">Last updated in: March, 2015 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>
                <br/>

                <p><strong>Contents</strong></p>
                <ol>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#firefighting">Coding as firefighting</a></li>
                    <li><a href="#throwing-code">Coding as throwing code at a program</a></li>
                    <li><a href="#finish-line">Coding as a race to the finish line</a></li>
                    <li><a href="#fear-to-break">Coding with fear of breaking something</a></li>
                    <li><a href="#exhausting">Coding as an exhausting process</a></li>
                    <li><a href="#programmer">Coding as a programmer</a></li>
                    <li><a href="#conclusion">Conclusion</a></li>
                </ol>

                <br/>

                <p><a name="introduction">Introduction</a></p>
                <p>
                    I have no authority in the industry. I am the one guy who spends minutes, if not hours,
                    pondering on a problem. I over-analyse, and my lack of experience only makes the analysis
                    take longer. I think more about the underlying solution than I do about the next line of
                    code. I think more about the existing code, than I do about the next script. You might
                    have guessed, I have just recently left academia. If there are any experienced developers
                    out there who have seen these patterns, please share your perspective. I offer no solutions
                    because I think the patterns speak for themselves.
                </p>

                <p><strong><a name="firefighting">Coding as firefighting</a></strong></p>

                <p>
                    Each functional test fails. If it does not, something will break in production. We spend
                    most of our time trying to understand the gotchas. We have no idea how many points of
                    vulnerabilities are contained in the system. So each time we try to finish the current
                    problem, without worrying about the next. We fail to see that our program is brittle. As
                    a result we do nothing about it.
                </p>

                <p><strong><a name="throwing-code">Coding as throwing code at a program</a></strong></p>

                <p>
                    To us, new requirements necessitate new code. We do not think that maybe the program
                    already does that, or it could do that with just a few tweaks, maybe even deleting some
                    useless, though non-duplicated code, because the scenario is handled elsewhere. Instead,
                    we introduce new classes and functions, sometimes even modules. We fail to realise that
                    the new specifications actually change our problem, and that changes what our code is
                    trying to accomplish. So maybe the previous data structures need to be rethought, and
                    the previous design revisited.
                </p>

                <p><strong><a name="finish-line">Coding as a race to the finish line</a></strong></p>

                <p>
                    Business thinks we’re doing more work when story cards are moving to the right on the
                    story wall. The progress we’re making is visible. The features that we’re completing
                    can be showcased. Life is great! However, we may be doing more harm to the program than
                    we’re helping to solve. Each rushed decision is a dimension to introduce new problems.
                    Implementations that are not well-thought out will need to be changed very soon as we
                    understand our problem better. If they are not changed, and this is the worst case, they
                    drive the project into the abyss of never-ending destruction.
                </p>

                <p><strong><a name="fear-to-break">Coding with fear of breaking something</a></strong></p>

                <p>
                    Our program is working. Tests have been written and they are passing. Do not allow for this
                    part of the software to interfere with the other part. We do not want to spend days debugging.
                    The code we have written has become a monster. And this monster has been fossilised. We end
                    up with a large program, for a small problem.
                </p>

                <p><strong><a name="exhausting">Coding as an exhausting process</a></strong></p>

                <p>
                    Writing code is a tedious process. Remembering how to implement lambdas or configure the
                    postgres database is hard work. Having all the tools you’ll need to do a particular feature
                    is not always feasible, so you need to do research. You read many blog posts, trying to
                    understand them until you stumble on the one that solves a problem similar to yours. Sometimes
                    you need a completely fresh implementation, taking out of your toolbox of programming knowledge.
                    Most of us do not step back and reflect when we get to this point. Instead we try out different
                    solutions until we land on one that barely solves the problem. And then we move on to the next
                    feature.
                </p>

                <p><strong><a name="programmer">Coding as a programmer</a></strong></p>

                <p>
                    So my work description says I am a programmer, and as long as I’m writing programs, I’m doing
                    my job. We do not think as developers of a product or tool much bigger than signing off on a
                    project, tools that other people may have to improve in the future or rely on to build other
                    tools and products. As long as the program works, we do not worry about the quality of the
                    software. We do not think, what if NONE of the tools or languages currently in popular use can
                    best represent our solution. Instead, we dive in and start building.
                </p>

                <p><a name="conclusion">Conclusion</a></p>

                <p>
                    It would be hard to avoid all of these pitfalls all the time. At some points we will quell
                    some fires, throw more code at a program without investigating a system’s current capabilities,
                    chase deadlines, avoid introducing errors, go for less than optimal solutions because we’ve
                    already spent too much time, and well, be programmers. However, we ought to be aware of these
                    practices and not do them every single day. If and when you see these practices and given that
                    you can, run!
                </p>

            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="dmwwspair.php" rel="prev"><span
                                    class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="amsykhrrm.php" rel="next">Next Post <span
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
