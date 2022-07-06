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

                <img src="../img/pagopws.jpg" class="img-responsive">
                <h1 class="title-post">Programming a Game of Pong with Scratch</h1>

                <p class="date">Last updated on: December, 2011 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>
                <br/>

                <p>
                    Here are instructions on how to program your own pong game. After following these instructions
                    successfully, you might want to check where you went wrong in your previous code or what you did
                    better. Be free to improve on this game. As you will come to see, there is a lot of repeat code,
                    more especially when you have to choose a new y value and when you have to decide who serves.
                </p>

                <p>
                    First you need to understand the task you're trying to accomplish. You're asked to develop a game of
                    pong that has two players playing against each other. There are no strict rules as to who serves and
                    when; or even the number of points to reach the end of game.
                </p>

                <p>
                    Now decide what sprites (objects) you will need to accomplish this task. They are a table or court
                    where your players will be playing, your two players and your tennis ball.
                </p>

                <img src="../img/scratch/field.png" class="img-responsive" style="float: left">
                <img src="../img/scratch/pong.png" class="img-responsive" style="float: left">
                <img src="../img/scratch/player1.png" class="img-responsive" style="float: left">
                <img src="../img/scratch/player2.png" class="img-responsive" style="float: left">
                <br/><br/><br/><br/>

                <p>
                    All these sprites can be drawn by selecting the “Paint new sprite” button on top of the Sprite List.
                    Name your sprites as shown above.
                </p>

                <p>
                    Please select the “field” sprite. We use the same ideas from Section 3, Iterations and Sequences, on
                    your manual. In the Control block, you will find “when start clicked”.
                </p>

                <img src="../img/scratch/fig2.png" class="img-responsive">

                <p>
                    Select the Pen block and from it drag “clear” and snap it on “when start clicked.
                </p>

                <img src="../img/scratch/fig3.png" class="img-responsive">

                <p>
                    Lift your pen with “pen up” so that when you move the pen to a position or coordinate where you want
                    to start drawing, it does not draw anything along the way. Snap “pen up” underneath “clear”.
                </p>

                <img src="../img/scratch/fig4.png" class="img-responsive">

                <p>
                    The Motion button on the Blocks palette has a “point in direction”. Join it to “pen up” without
                    changing the default value of 90.
                </p>

                <img src="../img/scratch/fig5.png" class="img-responsive">

                <p>
                    Switch to Motion and drag <strong><i>go to x:0 y:0</i></strong>.
                </p>

                <img src="../img/scratch/fig6.png" class="img-responsive">

                <p>
                    Edit the values from <strong><i>0</i></strong> and <strong><i>0</i></strong> to <strong><i>-150</i></strong>
                    and <strong><i>-100</i></strong>. These values denote the bottom left coordinates where
                    we want our field to start. Starting here instead of the origin gives up enough space to make a
                    bigger field. Perform a few more actions until the code for your field sprite looks like below.
                </p>

                <img src="../img/scratch/fig7.png" class="img-responsive">

                <p>
                    The easiest sprites to start with are the two players, who are able to do the same things. This
                    makes the game fair. Go to the Sprite List and select Player1. In the middle palette the Scripts tab
                    should be selected. At this point your Script Area is empty. Go to the Control block and drag it to
                    the Scripts Area. Now select the Motion block. Find <strong><i>go to x:0 y:0</i></strong> and snap
                    it under “when start clicked”. Make <strong><i>x -145</i></strong> and <strong><i>y 0</i></strong>.
                    This says Player1 will be the player on the right. Each time “when start clicked” is clicked (at the
                    start of the game), Player1 will assume this position. Your program should now look like in Figure 8.
                </p>

                <img src="../img/scratch/fig8.png" class="img-responsive">

                <p>
                    Next drag the “when space pressed” condition onto the Scripts Area. Select an “if” condition as well
                    and lock it underneath. Go to the Operators block and choose “when space key pressed”. Click the
                    dropdown and change “space” to “u” for up. Again in Control, drag an “if” clause. Snap it on “when u
                    key pressed”. In Operators, drag “less than” and put it in the condition spaceholder of the if. Go
                    to Variables and create the variable y. Drop it on the left operand of the “less than” comparator.
                    On the right side, double click and type 85. Inside the “if” clause, put “change y by 10” from
                    Motion. Switch to Variables and find “change <> by”, depending on what the current variable is.
                    Change this variable to the y that you already created. Repeat this step but in place of “u” use “d”
                    for down. Make all numbers negative this time and change from “greater than” to “smaller than”. Look
                    below to verify that you completed every step for Player1.
                </p>

                <p>
                    Repeat step 5 but this time select Player2 first. The code should look like this at the end. As you
                    can see, up is now “8” and down is “2”. Notice the arrows on the keypad.
                </p>

                <img src="../img/scratch/fig9.png" class="img-responsive">

                <p>
                    Last and most importantly, we need to control the motion of the ball, serve, count stores, and even
                    end the game. The best place to put this logic is on the code for the ball. Serving and scoring both
                    depend on the position of the ball.
                </p>

                <p>
                    Do some initializations: go to (140,0); create the variables and x, player1score, player2score,
                    serve1, serve2, and divisor; set the variable x to 140; set player1score, player2score and serve1 to
                    0; set serve2 to 1; and lastly set divisor to 2. The set instruction is found under Variables,
                    visible only after some variables have been created. Announce that the game is about to start with
                    “say Hello for 2 secs”, changing “Hello” to “START!!!”.
                </p>

                <img src="../img/scratch/fig10.png" class="img-responsive">

                <p>
                    Now snap a “forever if” control.
                </p>

                <img src="../img/scratch/fig11.png" class="img-responsive">

                <p>
                    The game can only continue if a winning score has not been reached. By default, we've selected 12 as
                    the winning score. This is also consistent with the rules as found
                    <a href="http://www.ittf.com/ittf_handbook/hb.asp?s_number=2.11&">here</a>. The case where the one
                    player reaches 11 before the other gets to 10 has not been catered for. This is something you could
                    add. What you need to do for the current implementation is go to Operators and find the “and”
                    operator.
                </p>

                <img src="../img/scratch/fig12.png" class="img-responsive">

                <p>
                    On the left and rights operands, put a “less than” operator.
                </p>

                <img src="../img/scratch/fig13.png" class="img-responsive">

                <p>
                    For one of the operands, put player1score < 12 and the other player2score < 2. This means the game
                    will keep repeating until one of the players scores 12. A condition based on “and” fails as soon as
                    one of the operands for “and” becomes untrue.
                </p>

                <img src="../img/scratch/fig14.png" class="img-responsive">

                <p>
                    Go to controls and pull out a “repeat until” clause. In the placeholder, put an “or” operator, found
                    in Operators.
                </p>

                <img src="../img/scratch/fig15.png" class="img-responsive">

                <p>
                    To the one side put “touching ?”, clicking the dropdown and selecting “Player1”.
                </p>

                <img src="../img/scratch/fig16.png" class="img-responsive">

                <p>
                    To the other put another operand, the “less than” operand.
                </p>

                <img src="../img/scratch/fig17.png" class="img-responsive">

                <p>
                    Use the variable x and the number -150. This means the ball will keep moving in the leftward
                    direction until it touches Player1 or crosses the line (goes past Player1).
                </p>

                <p>
                    Within the repeat put a “change x by -10” to make sure it goes in the leftward direction in
                    decrements of 10. Save the value of the x-coordinate in the variable x. Use “change … by” from the
                    Variables block.
                </p>

                <img src="../img/scratch/fig18.png" class="img-responsive">
                <br/>

                <img src="../img/scratch/fig19.png" class="img-responsive">
                <br/>

                <img src="../img/scratch/fig20.png" class="img-responsive">
                <br/>

                <p>
                    After the “repeat until”, put an “if” clause. The purpose of this if is to check why the “repeat
                    until” loop was exited.
                </p>

                <p>
                    If it was exited because the ball went past Player1, then that means Player2 has scored and so you
                    want to increment the applicable score (player2score).
                </p>

                <p>
                    Use “change player2score by 1” to make this happen.
                </p>

                <p>
                    The next part of the code determines if the sum of scores is divisible by 2. If it is, the players
                    must change who's giving the service.
                </p>

                <p>
                    We use “go to” to send the ball to its new possible and two boolean/binary variables serve1 and
                    serve2, which always have opposite values depending on who served last. For example, if Player1
                    served, serve1 will be 1, else Player2 must have serve, making serve2 1.
                </p>

                <p>
                    Analyse the rest of the serving code.
                </p>

                <p>
                    Going to the outer “else”, the value of the y coordinate is being change by picking a random value
                    that's 100-y if y is positive and 100+y if y is negative.
                </p>

                <p>
                    This is so that the randomly picked y-value does not go out of the table or field of play. We save
                    this y value in the y variable. The current value of the coordinate is stored in “y position”, found
                    in Motion.
                </p>

                <p>
                    The next “repeat until” and “if” do the same thing as described above for Player1 but doing them for
                    Player2. The very last if first checks for a tie at 10 up. If that's the case, the players must
                    change serve after every goal.
                </p>

                <p>
                    The nested if after that checks if any player has scored 12 so to announce that the game is OVER!!
                </p>

                <p>
                    The code can be downloaded <a href="../files/pingpong.sb">here</a>.
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
