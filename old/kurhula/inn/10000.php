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

                <img src="../img/heroku.png" class="img-responsive">
                <h1 class="title-post">The 10,000 Mark</h1>
                <h2 class="title-post">The Good and Bad of Scaling Up</h2>

                <p class="date">Last updated on: May 21, 2015 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>

                <p>
                    <strong>
                        10,000 Dictionary Entries
                    </strong>
                </p>

                <p>
                    It took me less than 2 weeks to clean the data that now forms part of the more than 10,000-word
                    <a href="https://madyondza-cms-dictionary.herokuapp.com/" target="_blank">
                        online dictionary.
                    </a>
                    This is besides the work I had to do in scanning the hardcopy dictionary and then converting
                    from PDF to text file. In comparison, the Second Edition of the Oxford English Dictionary contains
                    around 231,000 words
                    <a
                        href="http://public.oed.com/history-of-the-oed/dictionary-facts/"
                        target="_blank">
                        [OED.com
                    </a>,
                    <a
                        href="http://www.oxforddictionaries.com/us/words/how-many-words-are-there-in-the-english-language"
                        target="_blank">
                        Oxford Dictionaries
                    </a>], while the Urban Dictionary contains approximately
                    <a href="http://www.infotoday.com/LinkUp/Urban-Dictionary-Six-Million-Words-You-Wont-Find-in-Websters-76779.shtml"
                       target="_blank">
                        6 million
                    </a> definitions and
                    <a href="http://www.quora.com/How-many-entries-are-there-in-Urban-Dictionary"
                       target="_blank">
                        2.1 million
                    </a> unique words and phrases. It would be hard to know how many words in total exist in the
                    Xitsonga language or for all African languages combined, but for an estimated 2,000 languages,
                    there should be around a billion. In a way, 10,000 is an achievement, but still scratching the
                    surface in terms of the possibilities that exist.
                </p>

                <p>
                    As I continued to populate the database with more data, I received another notification a little
                    while later:
                    <img src="../img/11214.png" class="img-responsive">
                </p>

                <p>
                    Data entry was made easier by writing a uniform SQL script and then running that against a hobbyist
                    Heroku Postgres database. Each new word is a new entry. The same spelling gets one entry but will be
                    formatted better on the display for cosmetic purposes. Different spellings for the same word are
                    nonexistent in the standardised version of Xitsonga. But this will become a factor once we open the
                    dictionary up for comments and the contributions start rolling in. Now I am sitting on an
                    interesting problem: what is the most cost-effective and efficient way to host what will eventually
                    become millions, perhaps billions, of word/meaning pairs and their metadata?
                </p>

                <p>
                    During this time, I learnt that
                </p>

                <ul>
                    <li>
                        The existing pocket dictionary has many moments of genius, as well as many more flaws.
                    </li>
                    <li>
                        There is a bias towards English, where the best English is used and Xitsonga made an appendage
                        to the existing English when English was supposed to conform to a Xitsonga-first dictionary.
                    </li>
                    <li>
                        The obsession with parity definitions. Not much attention is given to the core meaning of a word
                        and the most related word is found and substituted for the meaning, when at this point
                        descriptions of the word would have served a better purpose.
                    </li>
                </ul>

                <center>
                    <img src="../img/likes.png" class="img-responsive">
                </center>

                <p>
                    <strong>
                        10,000 Facebook Likes
                    </strong>
                </p>

                <p>
                    It took us 4 years (2010 - 2014) to to hit the 10,000 mark on our Facebook page, the
                    <a href="https://www.facebook.com/firstonlinetsongadictionary" target="_blank">
                        First Online Tsonga Dictionary
                    </a>.
                    The numbers have dwindled a little bit since Facebook has not been a major focus since the
                    <a href="http://www.meetup.com/madyondza/" target="_blank">meetup group</a>, and
                    the move
                    away from a Xitsonga-only drive. Those 4 years taught me a lot about how people interact with
                    languages and a service that seeks to enhance conversations about African languages.
                </p>

                <p>
                    Some of the learnings are:
                </p>

                <ul>
                    <li>
                        We need to break the culture of people wanting to be fed information and help them find the fun
                        in being part of the knowledge creation ecosystem.
                    </li>
                    <li>
                        We need to get away from parity querying, where people wonder what a particular word could be in
                        another language. Parity querying should have an end in sight otherwise we're creating knowledge
                        for the sake of knowledge, not because we seek understanding from it or make use of it.
                    </li>
                </ul>

                <p>
                    At this point, we need to have new languages added, but the focus should be on adding new
                    functionality to improve the user experience. There is an existing copy of the Xilenge dictionary,
                    from the incorporation of which we can gain some major insights on dealing with multiple languages.
                    This is an important precursor for the continent.
                </p>

                <p>
                    The current challenge is to get users to engage just as they did when controversial stuff was posted
                    on the Facebook page. I know not how. Up until now, the
                    <a href="http://tsonga-history.blogspot.com/" target="_blank">
                        Tsonga vs Shangaan
                    </a>
                    debate had taken over the Tsonga Internet to a point where we had to call time on it. We seek
                    similar engagement on other topics. The users have so far helped bring out the core meaning of many
                    words in a way that made them intuitive. We need them to do the same on this new website.
                </p>

                <p>
                    These two metrics (the number of Facebook likes and the number of words in the database) have been
                    instrumental thus far. But, how do we measure ourselves moving forward? By 10,000 daily searches?
                    $10,000 in funding? 10,000 new sign ups? 10,000 downloads? Whatever the next metric to evaluate
                    ourselves, it has to have a bigger impact than the other two combined.
                </p>

            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="ladiameladtrm.php" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="imamtdalak.php" rel="next">Next Post <span
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