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
                <h1 class="title-post">Data Mining with Web Scraping, PDF Scraping and Image Recognition</h1>

                <p class="date">Last updated in: April, 2020 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>
                <br/>

                <p><strong>Contents</strong></p>
                <ol>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#web-scraping">Web scraping</a></li>
                    <li><a href="#pdf-scraping">PDF scraping</a></li>
                    <li><a href="#image-recognition">Image recognition</a></li>
                    <li><a href="#conclusion">Conclusion</a></li>
                    <li><a href="#references">Further reading</a></li>
                </ol>

                <br/>
                <p><strong><a name="introduction">Introduction</a></strong></p>

                <p>
                    Data mining is a key business process which feeds into decision making. Every company
                    and industry has a use for it. It is normally the precursor to more advanced analytics
                    tasks. One form of data mining is web scraping.
                </p>

                <p>
                    There are many tools and programming languages that can be used to do web scraping, e.g.
                    Python, JavaScript, Java, C#, Go, PHP, R and some proprietary frontend services. Which one
                    to use depends on your unique situation, i.e. your financial, skill, human and time
                    resources, as well as the frequency and variety of your scraping tasks. Are you scraping
                    the same website daily or various websites monthly?
                </p>

                <p>
                    There are alternatives to web scraping such as manually copying and downloading data, using
                    crowd sourcing platforms such as Amazon Mechanical Turk, or hiring data capturers. If you
                    are a coder, or can pay for one, web scraping is your best bet. The best part is that once
                    you build the script, it can be re-run many times. Only when a website (not its data) gets
                    updated will you need to update your pipeline or script. Rare events like a change in the
                    API (method signature) of the library you use may also call for a rewrite.
                </p>

                <br/>
                <p><strong><a name="web-scraping">Web scraping</a></strong></p>

                <p> To scrape the web, first you have to crawl it. Web crawling means navigating the Internet
                    and finding the URLs that contain the data that you require. Search engines do this
                    frequently. Sometimes web crawling is not necessary, more especially when you know the
                    source(s) that contain your data. Still, you will need to collect the URLs and/or pages
                    that contain the actual data.
                </p>

                <p> To retrieve an identified page, you can use libraries such as request, cURL or any other
                    library that can make HTTP calls, either via the browser, command line or through a third
                    party application such as SoapUI or Postman. Once you have the page, you want to inspect
                    it to understand its structure, how data is represented, device a way to grab it, and even
                    guard against errors. This is done using a combination of a general-purpose programming
                    language like Python and a parser like BeautifulSoup. An understanding of CSS classes and
                    id's becomes critical here. Grabbing data via its XPath is also an option.
                </p>

                <p> Your data will likely be placed in more than one place within the website. For example men's
                    and women's clothing may appear on different pages, laptops and desktops may each have their
                    own page, and each user on Twitter or Facebook will have their own timeline. For this reason,
                    one of your post-processing steps may involve deduplication of the data since the same data
                    may be represented in multiple pages depending on the criteria the web developer has used
                    and the commonalities among the different data items.
                </p>

                <p> To move around a website, click through links, select options, drop downs, type in search
                    queries and even wait for data to load, you will need a navigation tool such as Selenium.
                    Any browser (e.g. Google Chrome, Firefox, Microsoft Edge, etc) can be used, but there will
                    be browser-related quarks, so some browsers are easier than others on certain websites or to
                    do certain things with Selenium. There is extra software that has to be installed (as in
                    placed in a particular location that your web scraper software can reach) called a web driver.
                    A web driver enables you to talk to the browser, and can make HTTP calls just like request and
                    cURL. But the web driver does one better in that it does not just return the HTML, is can also
                    load JavaScript. Headless or phantom mode allows one to navigate the web without opening up a
                    browser. This is especially useful for deployment purposes.
                </p>

                <p><strong><a name="pdf-scraping">PDF Scraping</</a></strong></p>

                <p> It turns out, in practice, that some content is stored in PDF files, so using a traditional web
                    scraping tool like BeautifulSoup, is no longer sufficient. BeautifulSoup parses an HTML page by
                    exploiting its tag structure. PDF's cannot be scraped this way. This is where tools like PDFMiner
                    come in.
                </p>

                <p> PDFMiner's pdf2txt module can be run over the command line. But there are ways to run it inside
                    a script if your programming language is able to invoke the command line via bash or other.
                </p>

                <p><strong><a name="image-recognition">Image Recognition</a></strong></p>

                <p>
                    You might have seen that some PDF's do not follow the Adobe standard. There are image files
                    which are stored as PDF, and others with the .ps (PostScript) extension. This is a harder
                    problem to solve and requires us to venture into the realm of image recognition, specifically
                    optical character recognition (OCR). OCR is still an active area of research. In fact, Kaggle
                    has a nice starter tutorial on this. There are many tools to do OCR, e.g. OpenCV, Tesseract
                    and AWS Textract. Machine learning can also be employed if you want to do something more novel.
                    But often existing libraries can give a satisfactory result.
                </p>

                <p><strong><a name="image-recognition">Conclusion</a></strong></p>

                <p> Of course it does not end there. The scraped data needs to be stored in some format at some
                    location. This again, depends on your use case, as in whether you are a lone developer or you
                    work for a multinational company, and how that data will be accessed and used. You can store
                    the data as a CSV on your local disk, or on a NoSQL database on the cloud. The options are
                    endless.
                </p>

                <p> Yourself, a member of your team, or your client may then use that data, wherever it is stored,
                    to do further processing, such as transformations, merging, analysis, visualisation, and even
                    input into machine learning algorithms.
                </p>

                <p><strong><a name="references">Further reading</a></strong></p>

                <ol>
                    <li><a href="https://www.crummy.com/software/BeautifulSoup/">BeautifulSoup</a></li>
                    <li><a href="https://github.com/madmaze/pytesseract">PyTesseract</a></li>
                    <li><a href="https://github.com/euske/pdfminer">PDFMiner</a></li>
                    <li><a href="https://aws.amazon.com/textract/">Amazon Textract</a></li>
                    <li><a href="https://selenium-python.readthedocs.io/">Selenium</a></li>
                    <li><a href="https://opencv.org/">OpenCV</a></li>
                    <li><a href="https://www.sqlite.org/index.html">SQLite</a></li>
                    <li><a href="https://aws.amazon.com/dynamodb/">DynamoDB</a></li>
                </ol>

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
