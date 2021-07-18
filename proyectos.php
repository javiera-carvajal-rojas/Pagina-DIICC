<!doctype html>
<html class="no-js" lang="span">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Proyectos - DIICC UDA";
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
                                    <h2>Proyectos</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Blog Start -->
        <div class="blog-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="container proyectos">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-blog mb-60">
                                    <div class="blog-img">
                                        <a href="https://ibima.org/accepted-paper/faset-desarrollo-de-un-asistente-web-para-el-proceso-de-seleccion-de-tecnicas-de-educcion-de-requisitos/"><img src="img/blog/blog-1.jpg" alt="blog"></a>
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-top">
                                            <p>Dante Carrizo  /  2018  / Conference Proceeding / Scopus</p>
                                        </div>
                                        <div class="blog-bottom">
                                            <h2><a href="https://ibima.org/accepted-paper/faset-desarrollo-de-un-asistente-web-para-el-proceso-de-seleccion-de-tecnicas-de-educcion-de-requisitos/">FASET: Desarrollo de un Asistente Web. </a></h2>
                                            <a href="https://ibima.org/accepted-paper/faset-desarrollo-de-un-asistente-web-para-el-proceso-de-seleccion-de-tecnicas-de-educcion-de-requisitos/">Seguir leyendo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-blog mb-60">
                                    <div class="blog-img">
                                        <a href="http://fei-web.lv/en/itcity"><img src="img/blog/blog-2.jpg" alt="blog"></a>
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-top">
                                            <p>Dante Carrizo / 2019    </p>
                                        </div>
                                        <div class="blog-bottom">
                                            <h2><a href="http://fei-web.lv/en/itcity">ITCity </a></h2>
                                            <a href="http://fei-web.lv/en/itcity">Seguir leyendo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-blog mb-60">
                                    <div class="blog-img">
                                        <a href="proyectoevaluacion.html"><img src="img/blog/blog-3.jpg" alt="blog"></a>
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-top">
                                            <p>John Wilmar Castro /  2018  /  Conference Proceedings Citation Index  / Scopus </p>
                                        </div>
                                        <div class="blog-bottom">
                                            <h2><a href="proyectoevaluacion.html">Evaluación de la Usabilidad de Aplicaciones Móviles </a></h2>
                                            <a href="proyectoevaluacion.html">Seguir leyendo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-blog mb-60">
                                    <div class="blog-img">
                                        <a href="http://medfasee.ufsc.br/conosur/"><img src="img/blog/blog-4.jpg" alt="blog"></a>
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-top">
                                            <p>DIICC UDA / 2016  </p>
                                        </div>
                                        <div class="blog-bottom">
                                            <h2><a href="http://medfasee.ufsc.br/conosur/">Proyecto MedFasee </a></h2>
                                            <a href="http://medfasee.ufsc.br/conosur/">Seguir leyendo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-4">
                        <div class="blog-sidebar left">
                            <div class="single-blog-widget mb-50">
                                <h3>Buscar</h3>
                                <div class="blog-search">
                                    <form id="search" action="#">
                                        <input type="search" placeholder="Ej: BLOCKCHAIN..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="single-blog-widget mb-50">
                                <div class="single-blog-banner">
                                    <a href="http://www.uda.cl/index.php?option=com_content&view=article&id=47&Itemid=118" id="blog"><img src="img/blog/blog-img.jpg" alt="blog"></a>
                                    <h2><br> Admision 2020<br> </h2> 
                                </div>
                            </div>
                            <!-- Ultimos Posts -->
                            <div class="single-blog-widget mb-50">
                                <h3>Ultimos Proyectos publicados</h3>
                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="http://www.diicc.uda.cl/magister/investigacion/faset/index.html"><img src="img/post/post-1.jpg" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="http://www.diicc.uda.cl/magister/investigacion/faset/index.html">FASET</a></h4>
                                        <p>Dante Carrizo / 2018 </p>
                                    </div>
                                </div>
                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="http://fei-web.lv/en/itcity"><img src="img/post/post-2.jpg" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="http://fei-web.lv/en/itcity">ITCity</a></h4>
                                        <p>Dante Carrizo / 2019</p>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="single-post-img">
                                        <a href="proyectoevaluacion.html"><img src="img/post/post-3.jpg" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="proyectoevaluacion.html">Evaluación de la Usabilidad de Aplicaciones Móviles</a></h4>
                                        <p>John W. Castro Ll. /  2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <div class="pagination">
                            <ul>
                                <li><a href="#">1</a></li> <!-- Por el momento es una sola pagina para el prototipo-->
                            </ul>
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
