<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 19:08:48
         compiled from "..\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214315480a330bcab92-33183317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf435fd105aa6aef972522defb2c5599f87b934' => 
    array (
      0 => '..\\templates\\index.tpl',
      1 => 1417716527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214315480a330bcab92-33183317',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5480a330cc4bd9_39210816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5480a330cc4bd9_39210816')) {function content_5480a330cc4bd9_39210816($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NEFALUM</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrapfree.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='../css/style.css'type="text/css">
    <link rel="stylesheet" href="../css/normalize.css"type="text/css">
    <link rel="stylesheet" href="../css/lightGallery.css"/>
    <style>
        ul{
            list-style: none outside none;
            padding-left: 0;
        }
        .gallery li {
            display: block;
            float: left;
            height: 100px;
            margin-bottom: 6px;
            margin-right: 6px;
            width: 100px;
        }
        .gallery li a {
            height: 100px;
            width: 100px;
        }
        .gallery li a img {
            max-width: 100px;
        }
        #lightGallery{
            cursor: pointer;
        }
       
    </style>
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#top">NEFALUM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="#top">Inicio</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#about">Empresa</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Nosotros</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header id="top" class="header">
            <br>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">
                <i class="fa fa-chevron-circle-down "></i>
               Comienza
            </a>
           <?php echo $_smarty_tpl->getSubTemplate ("ventanas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container"><bR>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Soluciones e innovación para todos </h2>
                    <p class="lead">Nefalum, nace como empresa dedicada a la industria de la construcion en estruturas de cristales y aluminios, con el objetivo de entragar un trabajo comprometido  hacia  todos sus  clientes, es por esto que nos esforzamos cada día más en la excelencia de nuestro trabajo. Constantemente estamos innovando en la dificíl tarea de satisfacer  las necesidades de los consumidores, ofreciendo  un trabajo  de  calidad en todos nuestros   servicios, dando la seguridad que usted necesita. Pensando siempre en dar confianza y profesionalismo en cada uno de nuestras proyectos.
                    </p>

                </div>
            </div>

            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- Portfolio -->
    <section  id="portfolio"class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center"><br><br>
                    <h2>Nuestro Taller</h2>
                    <hr class="small">
                    <div id="lightGallery" class="row gallery">
                        <div data-src="../img/trabajos/taller.jpg" data-title="HOLA"data-desc="Description 1"  class="col-md-6">
                            <div class="portfolio-item">
                                <a >
                                    <img class="img-portfolio img-responsive" src="../img/trabajos/taller.jpg">
                                </a>
                            </div>
                        </div>
                        <div  data-src="../img/trabajos/taller1.jpg"class="col-md-6">
                            <div class="portfolio-item">
                                <a >
                                    <img class="img-portfolio img-responsive" src="../img/trabajos/taller1.jpg">
                                </a>
                            </div>
                        </div>
                        <div data-src="../img/trabajos/taller2.jpg"class="col-md-6">
                            <div class="portfolio-item">
                                <a >
                                    <img class="img-portfolio img-responsive" src="../img/trabajos/taller2.jpg">
                                </a>
                            </div>
                        </div>
                        <div data-src="../img/trabajos/taller3.jpg"class="col-md-6">
                            <div class="portfolio-item">
                                <a >
                                    <img class="img-portfolio img-responsive" src="../img/trabajos/taller3.jpg">
                                </a>
                            </div>
                        </div>
                         <div data-src="../img/trabajos/taller4.jpg"class="col-md-6">
                            <div class="portfolio-item">
                                <a >
                                    <img class="img-portfolio img-responsive" src="../img/trabajos/taller4.jpg">
                                </a>
                            </div>
                        </div>
                         <div data-src="../img/trabajos/taller5.jpg" class="col-md-6">
                            <div class="portfolio-item">
                                <a >
                                    <img class="img-portfolio img-responsive" src="../img/trabajos/taller5.jpg">
                                </a>
                            </div>
                        </div>

                        
                    </div>
                    <!-- /.row (nested) -->
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <script>
var myWindow;

function openWin() {
    myWindow = window.open("", "L-5000", "width=500, height=600");
    myWindow.html("<h1><hola/h1>"); 
}


</script>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Pautas de corte.</h3>
                    <h5>(estas son las medidas y estrutura que tiene el marco y modela  de la ventana)</h5>
                    <a class="btn btn-lg btn-light" onclick="openWin()">Ventanas L-5000<a/>
                    <a href="#" class="btn btn-lg btn-dark">Ventanas L-25</a>
                </div>
                <div class="video">
                    <iframe width="640" height="360" src="https://www.youtube.com/watch?v=Y7kCV7bFNK0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Para Más información</strong>
                    Nos puede contactar en
                    </h4>
                    <p>Santiago, El Bosque Av Padre Hurtado #13248</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (02) 56565467</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">neftaly_12@nefalum.com
                        <strong>Lider de Proyectos</strong></a>
                        </li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">raquel@nefalum.com
                        <strong>Dirección de Presupuesto </strong></a>
                        </li>
                    </ul>
                    <br>
                    <p class="text-muted">visitanos también en nuestro</p>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/Nefalum"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                       
                    </ul>
                    <hr class="small">
                    
                </div>
                <div class="col-md-6 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d6647.954617351248!2d-70.68059961314849!3d-33.57993841441437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m0!4m3!3m2!1d-33.5799563!2d-70.6759005!5e0!3m2!1ses-419!2scl!4v1417581690900" width="600" height="400" frameborder="0" style="border:1">
                    </iframe>
               </div>
            </div>
        </div>  
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/contact_me.js"></script>
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/prefixfree.min.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src='../js/animacion.js'></script>

    <script src="../js/lightGallery.js"></script>
    <script src="../js/lightGallery.min.js"></script>
    <script src="../js/html5gallery.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

   
    
    $(document).ready(function() {

        $("#lightGallery").lightGallery({
         
              mode      : 'slide',  // Type of transition between images. Either 'slide' or 'fade'.
              useCSS    : true,     // Whether to always use jQuery animation for transitions or as a fallback.
              cssEasing : 'ease',   // Value for CSS "transition-timing-function".
              easing    : 'linear', //'for jquery animation',//
              speed     : 600,      // Transition duration (in ms).
              addClass  : '',       // Add custom class for gallery.
              
              preload         : 1,    //number of preload slides. will exicute only after the current slide is fully loaded. ex:// you clicked on 4th image and if preload = 1 then 3rd slide and 5th slide will be loaded in the background after the 4th slide is fully loaded.. if preload is 2 then 2nd 3rd 5th 6th slides will be preloaded.. ... ...
              showAfterLoad   : true,  // Show Content once it is fully loaded.
              selector        : null,  // Custom selector property insted of just child.
              index           : false, // Allows to set which image/video should load when using dynamicEl.
         
              dynamic   : false, // Set to true to build a gallery based on the data from "dynamicEl" opt.
              dynamicEl : [],    // Array of objects (src, thumb, caption, desc, mobileSrc) for gallery els.
         
              thumbnail            : true,     // Whether to display a button to show thumbnails.
              showThumbByDefault   : false,    // Whether to display thumbnails by default..
              exThumbImage         : false,    // Name of a "data-" attribute containing the paths to thumbnails.
              animateThumb         : true,     // Enable thumbnail animation.
              currentPagerPosition : 'middle', // Position of selected thumbnail.
              thumbWidth           : 100,      // Width of each thumbnails
              thumbMargin          : 5,        // Spacing between each thumbnails 
         
              controls         : true,  // Whether to display prev/next buttons.
              hideControlOnEnd : false, // If true, prev/next button will be hidden on first/last image.
              loop             : false, // Allows to go to the other end of the gallery at first/last img.
              auto             : true, // Enables slideshow mode.
              pause            : 4000,  // Delay (in ms) between transitions in slideshow mode.
              escKey           : true,  // Whether lightGallery should be closed when user presses "Esc".
              closable         : true,  //allows clicks on dimmer to close gallery
         
              counter      : false, // Shows total number of images and index number of current image.
              lang         : { allPhotos: 'Imagenes' }, // Text of labels.
         
              mobileSrc         : false, // If "data-responsive-src" attr. should be used for mobiles.
              mobileSrcMaxWidth : 640,   // Max screen resolution for alternative images to be loaded for.
              swipeThreshold    : 50,    // How far user must swipe for the next/prev image (in px).
              enableTouch       : true,  // Enables touch support
              enableDrag        : true,  // Enables desktop mouse drag support
         
              vimeoColor    : 'CCCCCC', // Vimeo video player theme color (hex color code).
              videoAutoplay : true,     // Set to false to disable video autoplay option.
              videoMaxWidth : '855px',  // Limits video maximal width (in px).
         
              // Callbacks el = current plugin object
              onOpen        : function(el) {}, // Executes immediately after the gallery is loaded.
              onSlideBefore : function(el) {}, // Executes immediately before each transition.
              onSlideAfter  : function(el) {}, // Executes immediately after each transition.
              onSlideNext   : function(el) {}, // Executes immediately before each "Next" transition.
              onSlidePrev   : function(el) {}, // Executes immediately before each "Prev" transition.
              onBeforeClose : function(el) {}, // Executes immediately before the start of the close process.
              onCloseAfter  : function(el) {}, // Executes immediately once lightGallery is closed.
                    
             });
    });
    
    

    </script>

</body>

</html>
<?php }} ?>
