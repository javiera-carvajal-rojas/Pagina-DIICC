<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Funcionarios - DIICC UDA";
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
                                    <h2>FUNCIONARIOS</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Teacher Start -->
        <div class="teacher-area pt-150 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a><img src="img/teacher/teacher1.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a>Carlos Ortiz </a></h2>
                                <h4>Ingeniero en sistema</h4>
                                <h4>carlos.ortizdezarate@uda.cl</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a><img src="img/officials/officials2.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a>Jeimy Parra Campusano</a></h2>
                                <h4>Secretaria del Departamento</h4>
                                <h4>jeimy.parra@uda.cl</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a><img src="img/officials/officials3.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a>Jorge Saavedra Gúzman</a></h2>
                                <h4>Personal Asistente</h4>
                                <h4>choche73@uda.cl</h4>
                                
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesJohn.html"><img src="img/teacher/teacher4.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesJohn.html">John Castro</a></h2>
                                <h4>Profesor</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesWilson.html"><img src="img/teacher/teacher5.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesWilson.html">Wilson Castillo</a></h2>
                                <h4>Director del Departamento</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesMonasterio.html"><img src="img/teacher/teacher6.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesMonasterio.html">Manuel Monasterio</a></h2>
                                <h4>Profesor</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesAndres.html"><img src="img/teacher/teacher7.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesAndres.html">Andres Alfaro</a></h2>
                                <h4>Profesor</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesCarlos.html"><img src="img/teacher/teacher8.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesCarlos.html">Carlos Ortiz</a></h2>
                                <h4>Ingeniero en Sistemas</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="DetallesJaque.html"><img src="img/teacher/teacher9.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesJaque.html">Jaqueline Manriquez</a></h2>
                                <h4>Profesor</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
        </div>
                    
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>
</html>
