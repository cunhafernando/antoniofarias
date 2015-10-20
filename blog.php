<?php require_once( 'afadmin/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1'>
    <cms:editable name='blog_content' label='Conteúdo do Blog' type='richtext' />
    <cms:editable name='blog_autor' label='Autor' type='text' />
    <cms:editable name='blog_image' label='Imagem do Blog' desc='O tamanho da imagem é de 900x600px' crop='1' width='900' height='300' type='image' />
    <cms:folder name='politica' title='Política' />
    <cms:folder name='direito' title='Direito' />
    <cms:folder name='historia' title='História' />
    <cms:folder name='sertao' title='Sertão' />

</cms:template>
<cms:if k_is_page >
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Antônio Farias - Blog</title>

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
    <header class="intro-header" style="background-image: url('img/sertao.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><cms:show k_page_title /></h1>
                        <!--<h2 class="subheading">Assunto: <cms:show k_page_foldertitle /></h2>-->
                        <cms:if k_page_foldertitle >
                            <cms:set my_category=k_page_foldertitle/>
                        <cms:else />
                            <cms:set my_category='Sem Categoria' />
                        </cms:if>
                        <span class="meta"><cms:show my_category />  |  Escrito por: <cms:show blog_autor /> |  Data: <cms:date k_page_date format='d/m/y'/>  |  <a href="#"><cms:show k_comments_count /> Comentários</a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <!-- Blog Post Content Column -->
            <div class="col-lg-8 col-md-10">

                <!-- Blog Post -->

                <!-- Preview Image -->
                <img class="img-responsive" src="<cms:show blog_image />" alt="">

                <hr>

                <!-- Post Content -->
                <cms:show blog_content />

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <cms:embed 'comments_form.html' />
                </div>

                <hr>

                <!-- Posted Comments -->
                <cms:if k_comments_count >
                <cms:comments page_id=k_page_id order='asc' limit='5' paginate='1' >
                <!-- Comment -->
                <div class="media">
                    <div class="col-lg-1 col-md-1"
                    <a class="pull-left" href="#">
                        <cms:gravatar email="<cms:show k_comment_author_email />" size="55" />   
                    </a>
                    <a name="cms:show k_comment_anchor />"></a>
                    </div>
                    <div class="col-lg-11 col-md-11">
                        <h4 class="media-heading"><cms:show k_comment_author />
                            <small><cms:date k_comment_date format='F j, Y' /></small>
                        </h4>
                        <cms:show k_comment />
                    </div>
                </div>
                <cms:paginator />
                </cms:comments>
                <cms:else />
                    Sem comentários
                </cms:if>

                <ul class="pager">
                    <li class="next">
                        <a href="<cms:link masterpage='blog.php' />">&larr; Voltar ao blog</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <cms:embed 'blog_sidebar.html' />
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
    <cms:embed "footer.php" />

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript 
    <script src="js/clean-blog.min.js"></script>-->

</body>

</html>
<cms:else />
    <cms:embed 'blog/blog_list.php' />
    
</cms:if>
<?php COUCH::invoke(); ?>
