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

                <!--                <img src="../img/ampswr3.jpg" class="img-responsive">-->
                <h1 class="title-post">Refactoring a Ncuva Game Code Snippet</h1>

                <p class="date">Last updated on: November 6, 2013 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>
                <br/>

                <p>The code below populates the initial board state for the game of Ncuva.</p>

                <script src="https://gist.github.com/MUSABALOYI/ffa7f5da8e89a8cac01d.js"></script>
                <p>
                    The for loop makes use of 3 global variables: the <strong><i>length</i></strong>,
                    <strong><i>width</i></strong> width and number of <strong><i>stones</i></strong> in each slot.
                    The length and width control how much looping is done. The two cases for the number of stones
                    catered for here are 2 and 3.
                </p>

                <p>
                    Executing this code will give rise to a structure like this:
                </p>

                <center>
                    <img src="../img/s2nspp.png" class="img-responsive">
                </center>

                <p>
                    As you can see from the figure displayed above, there is a pattern at work here. The pattern screams
                    out: there are too many 2’s! We gather that we do not have to loop through all of
                    <strong><i>a</i></strong> to know how many stones to place in each slot.
                </p>

                <p>
                    On having noticed the pattern, we go ahead and fill a with 2 or 3 stones according to the user’s
                    choice. How many corrections would we have to do if we filled a with 2’s? Would this approach
                    provide any savings? 6 (at best 4) corrections are better than 4x10x5 (at worst 4x10x7) checks.
                </p>

                <p>
                    For the time being we leave out all the if statements.
                </p>

                <script src="https://gist.github.com/MUSABALOYI/fd1aa6f44c92370f1577.js"></script>

                <p>
                    Instead of going another iteration around the board, we just pick the specific indices that have
                    been assigned wrongly and give them correct values.
                </p>

                <p>
                    In fact, this for-loop can be optimised out by using the built-in map function.
                </p>

                <script src="https://gist.github.com/MUSABALOYI/f805d768fbcc07c49420.js"></script>

                <p>
                    According to ncuva rules, at the beginning of each game, the first and second slots in the second
                    and third rows will always have no stone and 1 stone, respectively. If you look at the figure, you
                    should notice that these slots are mirror images of each other. So we go ahead and assign these
                    slots accordingly.
                </p>

                <script src="https://gist.github.com/MUSABALOYI/fc2cd6e7fab7d7dcb9c2.js"></script>

                <p>
                    Since Python has the ability to count from the end of a list going backwards, we can replace the
                    calculation <strong><i>width - some_number</i></strong> with the negative of some_number. In fact,
                    we do not need the <strong><i>if</i></strong> as <strong><i>a</i></strong> will not be changed
                    incorrectly for <strong><i>stones = 2</i></strong> or <strong><i>stones = 3</i></strong>.
                </p>

                <script src="https://gist.github.com/MUSABALOYI/7579bab602eabb0f303d.js"></script>

                <p>
                    We now introduce a method so that a can be populated whenever needed and not just once when the game
                    starts. <strong><i>set_board_up()</i></strong> takes <strong><i>length</i></strong>,
                    <strong><i>width</i></strong> and <strong><i>stones</i></strong> as input. This means we can get rid
                    of these three lines:
                </p>

                <script src="https://gist.github.com/MUSABALOYI/afc68c1a276b1427df2e.js"></script>

                <p>
                    Comments and global variables are a sign of bad design.
                </p>

                <p>
                    We have given the method a meaningful name and so now we rename the variable
                    <strong><i>a</i></strong> to <strong><i>board</i></strong>. We could probably guess that
                    <strong><i>a</i></strong> is an array but we would never know where, when or how it is used. At the
                    very least, the name board gives a hint.
                </p>

                <script src="https://gist.github.com/MUSABALOYI/f226faafa47f9f88c0fe.js"></script>

                <p>
                    In the method, we make other small naming changes. We change <strong><i>width</i></strong> to
                    <strong><i>breadth</i></strong> to adhere to naming conventions when working with rectangles. In the
                    same vein, ncuva players don’t only use stones as their tokens, they can use makanyi (morula fruit)
                    or timongo (dry morula fruit), so we use the more generic term: tincuva.
                </p>

                <p>
                    Another small refactoring we can do to make the method shorter is make use of destructuring
                    assignment to make multiple variable assignments on the same line. I made the judgment call of
                    multiply assigning slots with the same value for readability. I could have done it on a per row
                    basis.
                </p>

                <script src="https://gist.github.com/MUSABALOYI/259e696d72e7c3c346e8.js"></script>

                <p>
                    The question is: why didn’t I come straight to this last result? The answer is simple: when you
                    don’t know where you’re going, it’s hard to get there. Rewriting and testing the code with python
                    helped me understand the code and intended result better. The thing with refactoring and clean code
                    is that it is obvious afterwards, but not when you first write the code.
                </p>

                <p>
                    Also appears in:
                <li><a href="https://thoughtworks.github.io/p2/issue06/improve-this/">P2 Magazine</</li>
                </p>
            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="nfc.php" rel="prev"><span
                                    class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="ampswr.php" rel="next">Next Post <span
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