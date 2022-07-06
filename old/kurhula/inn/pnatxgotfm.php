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
        <div class="wrap-mod" id="widget-1">
            <?php include "../dry/inn-archive.php" ?>
        </div>
    </div>

    <div class="dynamic_width" id="">
        <div class="wrap-content">
            <div id="post">

                <h1 class="title-post">Programming Ncuva</h1>

                <h2 class="title-post">a Traditional Xitsonga Game of the Family Mancala</h2>

                <p class="date">Last updated on: June 20, 2015 by <a href="../index.php#about">Musa Kurhula Baloyi</a>
                </p>

                <p><strong>Contents of this article</strong></p>
                <ol>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#rules">Rules of the game</a></li>
                    <li><a href="#code">Implementation and testing</a></li>
                    <!--                    <li><a href="#conclusion">Conclusion</a></li>-->
                    <!--                    <li><a href="#future_works">Shortcomings and future works</a></li>-->
                    <li><a href="#references">Further reading</a></li>
                </ol>

                <p><strong><a name="introduction">Introduction</a></strong></p>

                <p>
                    The <strong>ncuva</strong> game is of the family mancala. It is known by many different names across
                    the continent of Africa. In South Africa at least, the Vhavenda call it <i>mufuvha</i>, whereas the
                    Bapedi call it <i>moruba</i>. The name ncuva comes from the Vatsonga. It was traditionally played by
                    men for relaxation in the hot summers, under a tree or behind a hut, while putting your brain to
                    work. It is a strategy game based on mathematics.
                </p>

                <p><strong><a name="rules">Rules of the game</a></strong></p>

                <p>
                    You always move counterclockwise. In terms of number of players, there can be one-on-one or two
                    versus two. Three against three, or even more per side, is not common. The logic of the second
                    player in this game is a mirror image of what is shown below.
                </p>

                <p>
                    You score when you stop your moves in your inner line adjacent to your opponent's kanyi (token). The
                    win is the hole column adjacent to your stopping kanyi on your opponent's side. You get to penalise
                    your opponent by emptying one of his or her wholes. There are two strategies to do this. Either you
                    empty the whole that puts you in danger the most, or you empty the whole that will make it easier
                    for you to score in your next round.
                </p>

                <p>
                    Deep in the game, there may be a scenario where you or your opponent no longer has groupings of two.
                    The person who is in this state "u parile". This state of the game means making single moves for the
                    player who is in it. They cannot move a kanyi that has been blocked by another kanyi in front of
                    them. They have to move the one in front first, except when there is one or more empty holes in
                    between these makanyi. The main strategy is to bring into the inner row as few makanyi as possible
                    so you can dodge hits, and so you can hide and move in on your targets. Single moves mean it takes
                    longer for the player to go a full round.
                </p>

                <p>
                    Simply put, since we are using the Linux terminal for making moves, we need to guard against picking
                    moves from outside the board. This is not something required in real-life but is a programmatic
                    necessity for error handling. When a graphic user interface is finally completely implemented, this
                    section of code will fall into disuse.
                </p>

                <p>
                    This piece of code registers a move made by a player. The selected move is then sent to the player's
                    logic in order to start the play.
                </p>

                <p>
                    You win when your opponent no longer has makanyi on his half of the board. Others throw the towel
                    when the game looks hopeless but we are not modelling this functionality. It is believed that if you
                    start at the sixth hole against a player of reasonable skill and provided you always make the best
                    choices, you will win. The same rules apply for all multiples of 6.
                </p>

                <p><strong><a name="code">Implementation and testing</a></strong></p>

                <p>
                    In terms of arranging the board there are two common states: 2 nhlokweni (two at the head) and 3
                    nhlokweni (three at the head, two elsewhere, and one before the empty hole). Arbitrary numbers at
                    the head would create more complexity. The length is always 4 holes going up. The width can vary in
                    multiples of 2. A reasonable minimum width is 6 holes going left or right. A reasonable maximum
                    width is 32 holes going left or right. (<a href="../dev/refactoring.php">This article</a> shows how
                    one could refactor the piece of code that implements this rule.)
                </p>

                <p>
                    Visually, you can expect this result from the above rule:
                </p>

                <center>
                    <img src="../img/s2nspp.png" class="img-responsive">
                </center>

                <p>
                    Players 1 and 2 (or sides 1 and 2) alternate in playing this game. This is regardless of whether one
                    side scores or not, a side only plays once at a time.
                </p>

                <p>
                    To run this program, type these instructions on the terminal. (It is assumed that you have a Python
                    runtime environment.)
                </p>

                <p>
                    Below is a short video of me explaining how the game works:
                    <center>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ulKeow3apOI" frameborder="0"
                            allowfullscreen></iframe>
                    </center>
                </p>

                <br/>

                <!--                <p><strong><a name="conclusion">Conclusion</a></strong></p>-->

                <!--                <p><strong><a name="future_works">Shortcomings and future works</a></strong></p>-->

                <p><strong><a name="jargon">Jargon</a></strong></p>

                <ul>
                    <li><strong>Ncuva</strong> (pl. tincuva): Tokens used for playing. Can be timongo, maribye or
                        makangi.
                    </li>
                    <li><strong>Goma</strong>: Stop playing because your round cannot pick more stones, your one stone
                        in hand has landed on an empty hole.
                    </li>
                    <li><strong>Ge</strong>: Short for "gema". Another way of saying "goma" as in above.</li>
                    <li><strong>Nsulo</strong>: The tokens you remove your opponent's side as a result of scoring. When
                        you score, you're entitled to a penalty, which is removing all tokens from a hole that you
                        choose from your opponent's side.
                    </li>
                    <li><strong>Ku pfumala nsulo</strong>: This condition happens when the opponent is left with no
                        tokens to penalise after you've scored.
                    </li>
                    <li><strong>Ku avela</strong>: To bring the board to its starting configuration for a new game. To
                        initialise.
                    </li>
                    <li><strong>Ku pala</strong>: When the opponent does not have holes with groups of two and above,
                        and only one and below. We say the opponent "u pariwile" or the scorer "u n'wi parile". This
                        state leads to "xichondzo". In some regions, ku pala is called <i>ku cancula</i>.
                    </li>
                    <li><strong>Ximhani</strong>: The "head" of the game, which is a two in a game of all two's and a
                        one, or a three in a game of all threes, one two and one one. The 3 or 2 before the descent is
                        the <i>ximhani</i>.
                    </li>
                    <li><strong>Xichondzo</strong>: "Ku famba hi xichondzo" is how you play when "u pariwile".</li>
                    <li><strong>Ku hand(z)amuka</strong>: When you have a hole with 2 or more tokens, ku handzumuka
                        means you're playing in such a way that your tokens will be left as ones, even if there are twos
                        or more elsewhere. Tis action applies for a part of the board or all of a player's side.
                    </li>
                </ul>

                <p><strong><a name="references">Further reading</a></strong></p>

                <ol>
                    <li><a href="http://tectonic.co.za/?p=1362">SA students win award for Java Morabaraba</a></li>
                    <li><a href="https://www.youtube.com/watch?v=uv8ZqowGqcI">Rules of Morabaraba</a></li>
                    <li><a href="https://kivy.org/#home">Kivy Programming</a></li>
                </ol>

            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="ladiameladtrm.php" rel="prev"><span
                                    class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="xtsngspllchckr.php" rel="next">Next Post <span
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