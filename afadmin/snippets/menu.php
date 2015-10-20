<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Antônio Farias</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<cms:link 'index.php' />" <cms:if k_template_name=='index.php'>class="current"</cms:if>>Home</a>
                    </li>
                    <li>
                        <a href="<cms:link 'about.php' />" <cms:if k_template_name=='about.php'>class="current"</cms:if>>Sobre</a>
                    </li>
                    <!--<li>
                        <a href="post.html">Sample Post</a>
                    </li>-->
                    <li>
                        <a href="<cms:link 'contact.php' />" <cms:if k_template_name=='contact.php'>class="current"</cms:if>>Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>