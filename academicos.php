<!doctype html>
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Académicos - DIICC UDA";
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
                                    <h2>Académicos</h2>
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
                                <a href="academico.php"><img src="img/academicos/img1.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="DetallesServando.php">Servando Campillay</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img2.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Nahur Melendez</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img3.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Vladimmir Riffo</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img4.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">John Castro</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img5.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Wilson Castillo</a></h2>
                                <h4>Director del Departamento</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img6.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Manuel Monasterio</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img7.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Andres Alfaro</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img10.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Hector Cornide Reyes</a></h2>
                                <h4>Profesor Asistente</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img8.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Jaqueline Manriquez</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="academico.php"><img src="img/academicos/img9.jpg" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="academico.php">Dante Carrizo Moreno</a></h2>
                                <h4>Profesor</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->
    </body>

</html>