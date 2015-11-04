<?php require_once( 'afadmin/cms.php' ); ?>
<cms:template title='Contato' />
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Antônio Farias - Contato</title>

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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69290687-1', 'auto');
      ga('send', 'pageview');
    </script>

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
                    <div class="page-heading">
                        <h1>Entre em contato</h1>
                        <hr class="small">
                        <span class="subheading">Você tem uma pergunta? Talvez eu tenha a resposta.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <cms:editable name='contact_intro' label='Texto de introdução' type='richtext' >
                    <p>Quer entrar em contato comigo? Preencha o formulário abaixo para enviar-me uma mensagem e eu vou tentar voltar para você dentro de 24 horas!</p>
                </cms:editable>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <cms:form action='' method='post' id='contact_form' >
                
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Nome</label>
                            <cms:input type='text' name='name' placeholder="Nome" id='name' required='1'/>
                            <cms:if k_error_name>
                                <p id='name_error' class='error' style="display:block">Por favor insira um nome</p>
                            </cms:if>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Endereço de email</label>
                            <cms:input type='text' name='email' placeholder="Email" id='email' required='1' validator='email' />
                            <cms:if k_error_email>
                                <p id='email_error' class='error' style="display:block">Por favor insira um email válido</p>
                            </cms:if>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="telephone">Telefone</label>
                            <cms:input type='text' name='telephone' placeholder="Telefone" id='telephone' required='1' />
                            <cms:if k_error_telephone>
                                <p id='telephone_error' class='error' style="display:block">Por favor insira um telefone</p>
                            </cms:if>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="subject">Assunto</label>
                            <cms:input type='text' name='subject' placeholder="Assunto" id='subject' required='1' />
                            <cms:if k_error_subject>
                                <p id='subject_error' class='error' style="display:block">Por favor insira um assunto</p>
                            </cms:if>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="message">Mensagem</label>
                            <cms:input type='textarea' name='message' placeholder="Mensagem" id='message' required='1' rows="10" cols="60" ></cms:input>
                            <cms:if k_error_message>
                                <p id='message_error' class='error' style="display:block">Por favor insira sua mensagem</p>
                            </cms:if>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <cms:if k_success >
                        <p id="mail_success" class="success" style="diplay:block">Obrigado. Eu vou lhe responder o mais breve possível.</p>
                        <cms:send_mail from=k_email_from to=k_email_to subject='Feedback de seu site'>
                            A seguir, um email enviado por um visitante de seu site:
                            <cms:show k_success />
                        </cms:send_mail> 
                    </cms:if>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                    
                </cms:form>
            </div>
            <div class="col-lg-4 col-md-2">
                <cms:editable name='contact_details' label='Detalhes de contato' type='richtext' >
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Endereço e telefone</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li>
                                    <strong>Antônio Farias</strong><br />
                                    Rua Minha Rua, 999<br />
                                    Taquaritinga do Norte<br />
                                    Brasil<br /><br />
                                </li>
                                <li>
                                    Telefone: (81) 9999-9999
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Email</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="mailto:contato@antoniofarias.com.br">contato@antoniofarias.com.br</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </cms:editable>
            </div>
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
    <!--<script src="js/clean-blog.min.js"></script>-->

</body>

</html>
<?php COUCH::invoke(); ?>
