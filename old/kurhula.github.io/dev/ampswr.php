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

                <img src="../img/ampswr3.jpg" class="img-responsive">
                <h1 class="title-post">Analysing Municipal Population Statistics with R</h1>

                <p class="date">Last updated on: August 12, 2015 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>
                <br/>

                <p>
                    This article was supposed to be entitled “How Thulamela Underdeveloped Malamulele”, inspired by the
                    book “How Europe Underdeveloped Africa” written by Walter Rodney. I came up this similar title
                    because one, I am from Malamulele, and two, I have witnessed first-hand how an uncaring government
                    can drive a community to extreme levels of poverty and with that self-destruction. I was hoping to
                    look at all the projects that were done in Malamulele compared to the ones that were done in
                    Thohoyandou, the dual seat of Thulamela Local Municipality and Vhembe District Municipality. I would
                    look at the cost of each project as well as the status of completion. This would highlight the
                    subtleties of the municipality's spending patterns.
                </p>

                <p>
                    After struggling to find meaningful data that could be used for this analysis, I learnt that there
                    were a number of sources to find relevant data. These were <a href="http://www.statssa.gov.za/">Statistics South
                        Africa</a> (StatsSA), the <a href="http://www.demarcation.org.za/">Municipal
                        Demarcation Board of South Africa</a> (MDB), <a href="http://www.localgovernment.co.za/">municipal websites</a>, the
                    <a href="http://mfma.treasury.gov.za/Documents/Forms/AllItems.aspx" style="color: blue;">National
                        Treasury</a>, the <a href="http://www.elections.org.za/content/" style="color: blue;">Independent
                        Electoral Commission of South Africa</a> (IEC), as well as other third parties such as Adrian
                    Frith's <a href="http://blog.adrianfrith.com/" style="color: blue;">website</a>. None of these sites
                    included Thulamela Municipality's website. <a href="http://www.vhembe.gov.za/" style="color: blue;">Vhembe
                        District Municipality</a> had something of little use. Most of StatsSA's data products are dead
                    links, except for <a href="http://interactive.statssa.gov.za/superweb/refreshTable.do"
                                         style="color: blue;">SuperWeb</a> which proved immensely helpful. The data I
                    now had in my hands led to a new title: “The Thulamela Years (2001 – 2015): A Case for Unequal
                    Service Delivery”. I was really excited about the data I had found.
                </p>

                <p>
                    Since the data came from disparate sources, it required work to put in a format that my code could
                    consume. I learnt that looking at the data from an electoral ward or voting district point of view
                    simplified my life. I did not have to care which town or village fell under which ward. All I had to
                    do was figure out if there are any differences in terms of wards and service delivery: a simple
                    ANOVA test! This black box approach also saved me from myself as it insulated me from looking for
                    data that vilified municipal administration.
                </p>

                <p>
                    When I could not find any ward population statistics for 2006, I inferred it with a random normal
                    distribution. A community census was conducted in 2006/7. That gave me the total population but not
                    a ward breakdown. My distribution had to adhere to this sum and I did that by shifting each value
                    right by an equal number when it fell short.
                </p>

                <center>
                    <img src="../img/ampswr1.png" class="img-responsive">
                </center>

                <p>
                    R factors were not easy to deal with and so I could not get to my data to do the calculations. I
                    told R to read in my CSV file without making my strings into factors. I was then able to draw
                    different graphs that offer insight into how the population in the whole municipality as well as
                    among wards has been changing since 1996 (when Malamulele was still in Levubu-Shingwedzi
                    Transitional Local Municipality) until the last ward delimitation in 2011. Affecting these
                    statistics is not just the doing of Thulamela, but policies from the IEC and the MDB.
                </p>

                <center>
                    <img src="../img/ampswr2.png" class="img-responsive">
                </center>

                <p>
                    At this point, I decided to forget about population densities, water, sanitation, drainage,
                    electricity, health, parks, libraries, and other services that the municipality is mandated to
                    render. That will be the topic of another day. Given how difficult municipal data collection is, it
                    would have been a year before I could publish this article! For now the title will stay as is. The
                    delivery of municipal services hinges on population sizes, so this is a good start.
                </p>

                <p>
                    All the code is accessible from <a href="https://gist.github.com/kurhula/cc33c024824cef324bc1">here</a>. The data can be found <a
                        href="https://gist.github.com/kurhula/d6e7648419cf21d7cce2">here</a>.
                </p>

            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="refactoring.php" rel="prev"><span
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