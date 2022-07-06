<div id="post">

    <h1 class="title-post"><a href="dev/refactoring.php">Refactoring a Ncuva Game Code Snippet</a></h1>

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

    <a href="dev/refactoring.php" class="read-more">Read more</a>
</div>
