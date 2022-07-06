<html>

<?php include "../dry/html.php"; ?>
<?php include "../dry/head.php"; ?>

<body data-spy="scroll" data-target=".nav-collapse" data-offset="0">

<div class="wrap-nav" id="nav-bar">
    <?php include "../dry/button.php"; ?>
    <?php include "../dry/logo.php"; ?>
    <?php include "../dry/sections.php"; ?>
    <?php include "../dry/social.php"; ?>
</div>


<div class="blog">

    <div class="fixed_width" id="sidebar">
        <?php include "../dry/dev-archive.php"; ?>
    </div>

    <div class="dynamic_width" id="">
        <div class="wrap-content">
            <div id="post">
                <img src="../img/dw.png" class="img-responsive">
                <h1 class="title-post">How to prepare to start playing with Datawinners</h1>

                <p class="date">Last updated on: March 22, 2015 by <a href="../index.php#about">Musa Kurhula Baloyi</a></p>

                <p>
                    I started preparing to join the Datawinners team while I was still in Braamfontein, Johannesburg.
                    The team is based out of Koramangala, Bengaluru. I found that it was not easy to get started.
                    Although I had my prospective team helping me setup from all the way in Bangalore, I found that I
                    lacked
                    proper understanding as to why we needed this package, this version of that package, this OS, Java
                    on a Python project, etc. I felt that had a detailed README document been prepared, I would have
                    navigated my
                    way better. What could have also helped is an architectural diagram showing how things were
                    connected. But I did not have this luxury. For a small team of 6, somehow I understood why the team
                    never invested in documentation. Afterall, we did not have any open source contributors in spite of
                    the project being of open source nature.
                </p>

                <p>
                    As we change from one package management system to another,
                    one virtualisation provider to another, I felt it would be nice to have some documentation to allow
                    anyone to play with Datawinners the way they wanted, even within the team. It is important to
                    understand how a project is setup, so that when things break, you know where to look. We tend to
                    join long-established teams which give us a VM from which we can start being productive on the first
                    day. There is nothing wrong with this approach, but we need to understand a bit about how packages
                    talk to each other. That is the intent of this blog post.
                </p>

                <p>
                    <strong>
                        Installing Datawinners natively on Ubuntu
                    </strong>
                </p>

                <p>
                    Carry out the following steps. Quick way would be to copy and paste into a Shell script.
                    <script src="https://gist.github.com/kurhula/a656988bf5e2fc8e8a22.js"></script>
                </p>

                <p>
                    Install python dependencies in a virtual environment. Download
                    <a href="https://gist.github.com/kurhula/5b40bf1bbdd94e2934b1">this</a> pip file into dw-ubuntu.
                    <script src="https://gist.github.com/kurhula/6310b7e7649c88813aea.js"></script>
                </p>

                <p>
                    Set Postgres up.
                    <script src="https://gist.github.com/kurhula/5429adf0fc8eb9ccc837.js"></script>
                </p>

                <p>
                    <strong>
                        Installing Datawinners on MacOS Yosemite using Vagrant
                    </strong>
                </p>

                <p>
                    Carry out the following steps. Download
                    <a href="https://gist.github.com/kurhula/5b40bf1bbdd94e2934b1">this</a> pip file into dw-vagrant.
                    <script src="https://gist.github.com/kurhula/e3ab964b2a004a8a4bbc.js"></script>
                </p>

                <p>
                    After editing your Vagrantfile should look like this:
                    <script src="https://gist.github.com/kurhula/0387c72dd4f20c194364.js"></script>
                </p>


                <p>
                    <strong>
                        Installing Datawinners on MacOS Yosemite using Ansible
                    </strong>
                </p>

                <p>
                    Prepare vagrant.
                    <script src="https://gist.github.com/kurhula/498963d175c9660726a3.js"></script>
                </p>

                <p>
                    Edit Vagrantfile.
                    <script src="https://gist.github.com/kurhula/0387c72dd4f20c194364.js"></script>
                </p>

                <p>
                    Carry out the following steps.
                    <script src="https://gist.github.com/kurhula/c219454c368e3f65a7d6.js"></script>
                </p>

                <p>
                    <strong>
                        Installing Datawinners on MacOS Yosemite using Docker
                    </strong>
                </p>

                <p>
                    Carry out the following steps to build the various containers that will compose your project.
                    <script src="https://gist.github.com/kurhula/554aa8e234b7f2dd0bb8.js"></script>
                </p>

                <p>
                    The python dependency Dockerfile.
                    <script src="https://gist.github.com/kurhula/b3d85344a1c7e9ec3848.js"></script>
                </p>

                <p>
                    The postgres Dockerfile.
                    <script src="https://gist.github.com/kurhula/70fe2678fbbc583a0fc0.js"></script>
                </p>

                <p>
                    The memcached Dockerfile.
                    <script src="https://gist.github.com/kurhula/9f1b83ecb825b80a5aca.js"></script>
                </p>

                <p>
                    The ElasticSearch Dockerfile.
                    <script src="https://gist.github.com/kurhula/23bf0ba1e45fd34c516a.js"></script>
                </p>

                <p>
                    <strong>
                        Compulsory steps for all installations
                    </strong>
                </p>

                <p>
                    Run these commands on your root directoty to clone the necessary git repositories. On
                    ubuntu, run them from within the <strong>dw-ubuntu-native</strong>. On vagrant, run them from
                    <strong>dw-vagrant</strong>.
                    <script src="https://gist.github.com/kurhula/75f2b1a276231421ff75.js"></script>
                </p>

                <p>
                    <strong>Useful links</strong>
                </p>

                <p>
                <ul>
                    <li>
                        <a href="https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-django-with-postgres-nginx-and-gunicorn">
                            How To Install and Configure Django with Postgres, Nginx, and Gunicorn
                        </a>
                    </li>
                    <li>
                        <a href="https://help.ubuntu.com/community/PostgreSQL">
                            PostgreSQL
                        </a>
                    </li>
                    <li>
                        <a href="http://uwsgi-docs.readthedocs.org/en/latest/tutorials/Django_and_nginx.html">
                            Setting up Django and your web server with uWSGI and nginx
                        </a>
                    </li>
                    <li>
                        <a href="https://docs.docker.com/compose/django/">
                            Getting started with Compose and Django
                        </a
                    </li>
                    <li>
                        <a href="https://docs.docker.com/compose/install/">
                            Installing Compose
                        </a>
                    </li>
                </ul>
                </p>
            </div>

            <nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous">
                            <a href="dwdt.php" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span>
                                Previous Post</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next">
                            <a href="nfc.php" rel="next">Next Post <span
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