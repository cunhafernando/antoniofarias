<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <cms:embed "menu.php" />

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/taquaritinga_do_norte.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Meu Blog</h1>
                        <hr class="small">
                        <span class="subheading">Assuntos Diversos</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <cms:pages masterpage='blog.php' 
                    folder=k_folder_name 
                    start_on=k_archive_date 
                    stop_before=k_next_archive_date 
                    paginate='1' 
                    limit='3'>
                <div class="post-preview">
                    <a href="<cms:show k_page_link />">
                        <h2 class="post-title">
                            <cms:show k_page_title />
                        </h2>
                        
                    </a>
                    <cms:if k_page_foldertitle >
                            <cms:set my_category=k_page_foldertitle/>
                        <cms:else />
                            <cms:set my_category='Sem Categoria' />
                        </cms:if>
                    <h3 class="post-subtitle">Escrito por: <cms:show blog_autor /> |  Data: <cms:date k_page_date format='d/m/y'/>  |  <a href="#"><cms:show k_comments_count /> Comentários</a></h3>
                    <h3 class="post-subtitle"><cms:show my_category /></h3>
                    <cms:excerptHTML count='50' ignore='img' ><p class="post-meta"><cms:show blog_content /></p></cms:excerptHTML>
                </div>
                <hr> 
                <!-- Pager -->
                <cms:if k_paginated_bottom >
                <ul class="pager">
                    <cms:if k_paginate_link_next >
                    <li class="next">
                        <a href="<cms:show k_paginate_link_next />">&larr; Postagens Antigas</a>
                    </li>
                    </cms:if>
                    <cms:if k_paginate_link_prev >
                    <li class="next">
                        <a href="<cms:show k_paginate_link_prev />">Postagens Novas &rarr;</a>
                    </li>
                    </cms:if>
                </ul>
                </cms:if>
                </cms:pages>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <cms:embed 'blog_sidebar.html' />
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <cms:embed "footer.php" />

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
