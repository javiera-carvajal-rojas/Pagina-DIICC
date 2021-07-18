<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Nombre Trabajo - DIICC UDA";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>

    <body>
        <!-- Header -->
        <?php include_once "include/header.php"; ?>
        <!-- Header Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area-wrapper">
            <div class="banner-area text-center">   
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Postulación de trabajo</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Banner Area End -->
        <!-- Blog Start -->
        <div class="blog-details-area pt-150 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details">
                            <div class="blog-details-img">
                                <img src="img/blog/blog-detail.jpg" alt="blog-details">
                            </div>
                            <div class="blog-details-content">
                                <h2>La compañía X está buscando trabajador</h2>
                                <h6>Por compañía X  /  Hasta cuando quieras / <h6>
                                <p>¿Antecedentes? ¿Quien los necesita?</p>
                                <p>¿Puesto? ¿Quieres el trabajo o no?</p>
                                <p class="quote">¿Paga? ¿Con la economía actual importa?</p>
                                <p>Anda a marchar si no te gusta.</p>
                            </div>
                            <div class="reply-area">
                                <h3>¿Te interesa?</h3>
                                <p>Deja aquí tus datos.<br> No te molestes en llamar, nosotros te contactamos. </p>
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Nombre</p>
                                            <input type="text" name="name" id="name">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Correo</p>
                                            <input type="text" name="email" id="email">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Mensaje de postulación</p>
                                            <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <a class="reply-btn" href="#" data-text="send"><span>Enviar mensaje</span></a>
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                            <div class="single-blog-widget mb-47">
                                <h3>Otros trabajos</h3>
                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="blog-details.html"><img src="img/post/post1.jpg" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="index-postulación.html">Click aquí para buscar pega</a></h4>
                                        <p>2020/xx/xx</span> por <span class="post-autor">compañía x</span></p>
                                    </div>
                                </div>
                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="blog-details.html"><img src="img/post/post2.jpg" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="index-postulación.html">Click aquí para buscar pega</a></h4>
                                        <p>2020/xx/xx</span> por <span class="post-autor">compañía x</span></p>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="single-post-img">
                                        <a href="blog-details.html"><img src="img/post/post3.jpg" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="index-postulación.html">Click aquí para buscar pega</a></h4>
                                        <p>2020/xx/xx</span> por <span class="post-autor">compañía x</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>