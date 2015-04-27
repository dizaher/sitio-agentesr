<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Technologica REINTECH">
    <meta name="author" content="">
    <title>Plataforma Tecnológica REINTECH</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico.png">   
</head><!--/head-->

<body class="homepage">

    <header id="header">        

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('creintech') ?>"><img src="<?php echo base_url(); ?>img/logoReintecht.png" alt="logo"></a>                    
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/quienes') ?>">Quiénes Somos</a></li>                                
                                <li><a href="<?php echo site_url('creintech/caphumano') ?>">Capital Humano</a></li>
                                <li><a href="<?php echo site_url('creintech/contacto') ?>">Contacto</a></li>
                                <li><a href="<?php echo site_url('creintech/cie') ?>">Aliados</a></li>
                            </ul>
                        </li>  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/prog_ase') ?>">Capacitaciones y asesorías</a></li>
                                <li><a href="<?php echo site_url('creintech/resi') ?>">Residuos Sólidos</a></li>                    
                                <li><a href="<?php echo site_url('creintech/disenio') ?>">Diseño Industrial</a></li>
                            </ul>
                        </li>  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Makerspace<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/solidos') ?>">Pendiente</a></li>
                                <li><a href="<?php echo site_url('creintech/electronicos') ?>">Pendiente</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Residuos <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/solidos') ?>">Sólidos Urbanos</a></li>
                                <li><a href="<?php echo site_url('creintech/electronicos') ?>">Electrónicos</a></li>
                            </ul>
                        </li>                                                
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">I+D+i<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/idi') ?>">Investigaciones</a></li>
                                <li><a href="<?php echo site_url('creintech/ie') ?>">Innovación Empresarial</a></li>
                                <li><a href="<?php echo site_url('creintech/filosofia') ?>">Filosofías Complementarias</a></li>                                
                            </ul>
                        </li>  
                        <li><a a href="<?php echo site_url('creintech/proyecto') ?>">Proyectos<i class="fa fa-angle-down"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ecosistema<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/agentes_inno') ?>">Agentes de Innovación</a></li>                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('creintech/sitios') ?>">Sitios de Interés</a></li>
                            </ul>
                        </li>                                                                                                                                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

   <!--Slider-->
    <?php $this->load->view($contenido) ?>
    <!--/Slider-->

  
   
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">                    
                    <address>
                    <strong>REINTECH Recycled Innovation and Technology</strong>  RFC: RRI100407M5A<br>
                    Calle México # 34,Colonia Pumar, Xalapa , Veracruz, México    
                    <abbr title="Teléfono">Tel:</abbr> +052 (228) 2001512<br>                 
                    <a href="mailto:#">contacto@reintech.com.mx  </a>
                    </address>                                              
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
</body>
</html>


<!--


<!DOCTYPE html>
<html lang="es">
<head>
	
</head>
<body class="metro">
	<div class="container">
        
            
        <header class="margin20 nrm nlm">
            <div class="row">
            
                <div class="span4 place-right">
                    <small class="place-right">Apoyado</small><br><a href="http://www.conacyt.mx/" title="" target="_new">
                    <img align="right" src="http://www.coepesoaxaca.org.mx/wp-content/uploads/2012/03/conacyta.jpg" width="50px"></a>
                   <br><br>
                    <div id='cse' style='width: 100%;'>Cargando...</div>
                    <script src='//www.google.com/jsapi' type='text/javascript'></script>
                    <script type='text/javascript'>
                    google.load('search', '1', {language: 'es', style: google.loader.themes.DEFAULT});
                    google.setOnLoadCallback(function() {
                      var customSearchOptions = {};
                      var orderByOptions = {};
                      orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                      customSearchOptions['enableOrderBy'] = true;
                      customSearchOptions['orderByOptions'] = orderByOptions;
                      customSearchOptions['overlayResults'] = true;
                      var customSearchControl =   new google.search.CustomSearchControl('011058425245224211510:byt-fahik08', customSearchOptions);
                      customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                      var options = new google.search.DrawOptions();
                      options.setAutoComplete(true);
                      customSearchControl.draw('cse', options);
                    }, true);
                    </script>
                    <link rel='stylesheet' href='<?php echo base_url(); ?>css/default.css' type='text/css'/>
                               
                </div>
                <div class="span2">
                    <a class="place-left" href="<?php echo site_url('creintech') ?>" title="">
                    <img src="<?php echo base_url(); ?>img/simbolo.png" alt="REINTECH"></a><br>                    
                </div>
                <div class="span6 place-center">
                    <h2>REINTECH</h2>
                    <h3>Recycled, Innovation and Technology</h3>
                    <h5 class="text-center">Ecosistema de innovación</h6>
                </div>
                                
             
            </div>
        </header>       
            <div class="grid fluid">
                <div class="row">
                    <div class="span12">
                        <!--MENU DE NAVEGACION-
                        <nav class="navigation-bar light">
                            <div class="navigation-bar-content">
                            <a href="#" class="element"><img src="<?php echo base_url(); ?>img/ico.png" alt="" ></a>                            
                            <a class="pull-menu" href="#"></a>                    
                                                   
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        
	</div> 
      			            			           			            			         
	<div class="container">
	
	</div>
    <div class="container">
        <div class="row">
	<center>
		<img src="<?php echo base_url(); ?>img/logos2.png" alt="CIE" width="500px" height="10px"></center>        
		
        </div>
	</div> <!-- /container --> 	
</body>
</html>