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

                <h1 class="title-post">Preliminary Work Towards a Xitsonga Spellchecker</h1>

                <h2 class="title-post">by Way of Reverse-Engineering the Tsonga Dictionary</h2>

                <p class="date">Last updated on: June 19, 2016 by <a href="../index.php#about">Musa Kurhula
                        Baloyi</a>

                <p>

                <p><strong>Contents of this article</strong></p>
                <ol>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#rules">Xitsonga spelling rules</a></li>
                    <li><a href="#tests">Put me to the test</a></li>
                    <li><a href="#data">Input data and results</a></li>
                    <li><a href="#conclusion">Bringing it all together</a></li>
                    <li><a href="#future_works">Shortcomings and future works</a></li>
                    <li><a href="#references">Further reading</a></li>
                </ol>

                <p><strong><a name="introduction">Introduction</a></strong></p>

                <p>
                    LibreOffice claims to have a Xitsonga spellchecker implementaed for their office programs. Well, in
                    that case, "dog" must be a Tsonga word. Being a Tsonga speaker, I know that this is not true. I
                    expect "Dog" and "dog" to be underlined with a squiggly red line since LibreOffice is set to Tsonga
                    (as you can see at the bottom center in the image below). That being so, I set out to implement one
                    with the hope of perhaps incorporating it in any text editor that does not currently have this
                    functionality. In my experience, no text editor or word program, open-source or commercial, has this
                    functionality.
                </p>

                <img src="../img/dog%20is%20a%20Tsonga%20word.png" class="img-responsive">
                <br/>

                <p>
                    My most potent weapon in this task is my in-depth understanding of the Tsonga language. Through the
                    school system and subsequent curiosity and extensive reading of Xitsonga books of all kinds, I was
                    able to come up with some rules of thumb through which I could tell instantly whether a word is
                    possibly Tsonga or not. If it followed the correct spelling structure, I could then see if it has a
                    known meaning. I then took these rules and wrote Python functions for each, as I show in the next
                    sections.
                </p>

                <p>
                    <strong><a name="rules">Xitsonga spelling rules</a></strong>
                <ul>
                    <li>Every word in Xitsonga ends in a vowel</li>
                    <li>There are certain alphabets that never follow each other</li>
                    <li>A consonant is never followed by a hyphen</li>
                    <li>Only the letter 'n' can be followed by an apostrophe</li>
                    <li>Xitsonga words never start with an apostrophe</li>
                    <li>Two vowels which are not the same never come after each other</li>
                </ul>
                </p>

                <p><strong>Every word in Xitsonga ends in a vowel</strong></p>

                <p>
                    This is perhaps one of the most obvious rules. There are, however, some Tsonga surnames (such as
                    Lowan and Marolen) that are spelt without a vowel at the end. This is just a result of habit and
                    preference. It is assumed that "i" is appended at the end of these surnames. In their daily use as
                    words, the "i" does appear. That said, our focus in this project at this stage is on words and not
                    the names of people. Our code says, if you come across a word which does not end in a vowel, assume
                    it cannot be Tsonga.
                </p>
                <!--                <script src="https://gist.github.com/kurhula/d80a74603a163151e9571556cdfa6cef.js"></script>-->

                <p><strong>There are certain alphabets that never follow each other</strong></p>

                <p>
                    Two alphabets each after the other must make a valid sound. For example, "ai" or "pl" do not make
                    valid Tsonga sounds. They may appear in other languages, or words borrowed from other languages, but
                    never intrinsically in Xitsonga. Common sounds are "ch", "dz", "mb", and others.
                </p>

                <!--                <script src="https://gist.github.com/kurhula/f92751c06ce80fc28320e2016d9e4727.js"></script>-->

                <p><strong>A consonant is never followed by a hyphen</strong></p>

                <p>
                    The reason for this is that hyphens are used to concatenate two words (called marito-nkatsano). It
                    follows from the previous rule that since a consonant is not a vowel, no Tsonga word can end in a
                    consonant, making it impossible to join that word with another via a hyphen.
                </p>

                <!--                <script src="https://gist.github.com/kurhula/b78709403baa92cb31c6a57dee42797c.js"></script>-->

                <p><strong>Only the letter 'n' can be followed by an apostrophe</strong></p>

                <p>
                    "n'" is a particular sound found in words such as n'anga, n'eni, n'wheti, n'weti, and many others.
                    There is no instance wherein another alphabet appears in this form.
                </p>

                <!--                <script src="https://gist.github.com/kurhula/54fb57c4694e9cf0690f56e7d4fe357a.js"></script>-->

                <p><strong>Xitsonga words never start with an apostrophe</strong></p>

                <p>
                    This is self-explanatory. I would add that apostrophes are used where a word changes form. For
                    example, n'anga above comes from munanga. The apostrophe is used so that the word can take its new
                    form. These are the instances where the apostrophe is used, to swallow up some syllable.
                </p>

                <!--                <script src="https://gist.github.com/kurhula/3e6089f1cdad2109e20f8d9d1fc2f1ea.js"></script>-->

                <p><strong>Two vowels which are not the same never come after each other</strong>
                </p>

                <p>
                    A repeating vowel is common in exclamations. Words such as dzwii, hatii, ponomonoo, etc, have
                    repeating vowels of the same type in order to emphasize the sound.
                </p>

                <!--                <script src="https://gist.github.com/kurhula/ab43eea527844a0072e54cb1d690c0c4.js"></script>-->

                <p><strong><a name="tests">Put me to the test</a></strong></p>

                <p>
                    How will we know that our program works as intended? Well, for that I implemented a few integration
                    tests in order to ensure that all our functions do what they are supposed to be doing. It did not
                    seem easy or appealing to write unit tests for every function because I eliminated all intermediate
                    results since we have no interest in them. Thus, these integration tests will break should any of
                    the functions fail and it would be clear which one(s) has/have broken since we can see how the
                    output differs from our expectations.
                </p>

                <!--                <script src="https://gist.github.com/kurhula/5c15f79541d8fc371be3a43dce74cea0.js"></script>-->

                <p><strong><a name="data">Input data and results</a></strong></p>

                <p>
                    I created a file containing all the <strong>invalid combinations</strong> of alphabets known to me.
                    This file is used as input for the second rule in the above list. The end product is a bunch of
                    files for each number of alphabets used to generate the file. For example, file <strong>xitsonga_dictionary_1.txt</strong>
                    would contain just one alphabet words, file <strong>xitsonga_dictionary_2.txt</strong> would contain
                    one syllable words (mimpfumawulo), whereas file <strong>xitsonga_dictionary_26.txt</strong> would
                    contain all alphabets with or without special characters, depending on when in the sequence they
                    were introduced.
                </p>

                <p><strong><a name="conclusion">Bringing it all together</strong></p>

                <p>
                    I have a <strong>create_all_xitsonga_words</strong> function which takes in the alphabet and the
                    <strong>CreateAllWords</strong> class reference. This function is able to call all other functions
                    in an order that the developer prefers. For example, the developer may deem it more suitable to
                    implement the "A consonant is never followed by a hyphen" rule before the "Every word in Xitsonga
                    ends in a vowel" rule because they deem it would make the program run faster. This particular
                    program runs faster (and correctly) if more eliminations can be made well ahead of time without
                    imposing the danger of removing valid words.
                </p>

                <p>
                    One advantage of this program worth pointing out is that the alphabet is pretty flexible. A
                    developer can substitute the alphabet by another and the program would still perform well. Another
                    advantage is that the rules can be extended, modified or removed depending on the language under
                    implementation. Thus, even though this program is geared towards the Xitsonga language, with little
                    effort any African or other language can have its spellchecker developed.
                </p>

                <p><strong><a name="future_works">Shortcomings and future works</a></strong></p>

                <p>
                    I will need to use a comprehensive corpus which contains all the words available in the Xitsonga
                    language to be able to eliminate the words generated through reverse engineering that follow the
                    structure but are not valid Xitsonga words.
                </p>

                <p>
                    The Mozambican and Zimbabwean orthographies are still to be incorporated. The Mozambican orthography
                    is greatly influenced by Portuguese whereas the Zimbabwean orthography is greatly influenced by
                    Shona. For example, "c-", "nh-" and "ss-" in the Mozambican Tsonga languages are "k-", "ny-" and
                    "s-" in the South African standard. A glaring difference between South African and Zimbabwean
                    orthographies is the use of "ch-" in Zimbabwe for the place of "x-" in South Africa.
                </p>

                <p>
                    Another hurdle still waiting to be conquered are spelling suggestions. After we've determined that a
                    word cannot possibly exist in the Xitsonga language, we must make suggestions to the writer of other
                    words whose correct spellings are in proximity with the misspelt word.
                </p>

                <p><strong><a name="references">Further reading</a></strong></p>
                <ol>
                    <li><a href="http://norvig.com/spell-correct.html">How to Write a Spelling Corrector</a> by Peter
                        Norvig
                    </li>
                </ol>

            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="pnatxgotfm.php" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="10000.php" rel="next">Next Post <span
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