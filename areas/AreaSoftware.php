<!doctype html>
<html class="no-js" lang="es">

<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Ingeniería Civil en Computación e Informática - DIICC UDA";
    include_once "../include/functions.php";
    include_once "../config/config.php";
    include_once "../include/head.php";
?>
<body>

    <body>
        <!-- Header -->
        <?php include_once "../include/header.php";?>
        <!-- Header Area End -->

        <!-- Inicio del Banner -->
        <div class="banner-area-wrapper">
            <div class="banner-area text-center">
                <!--Para cambiar la imagen del banner,ir a style.css,linea 172 y modificar la direccion de la imagen(1920x318)-->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">

                                <div class="banner-content">
                                    <h2>MAGISTER</h2> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Fin del Banner -->
        <!-- Inicio de Historia -->
        <div class="historia-area pt-25 pb-70">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="about-content">
                                <h2>Historia</h2>
                            </div>
                        </div>

                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                            <div class="about-content">
                                <p>En el año 1986, el Departamento de Matemáticas y Ciencias de la Computación, propone la creación de la carrera de Ingeniería Ejecución en Computación e Informática. En esos años, otras universidades del país ya impartían la carrera. En esos momentos se percibía una gran masa crítica de interesados por esta especialidad; la tecnología empezó a avanzar en forma avasalladora, comenzando a aparecer una gran demanda de profesionales en estas áreas, por lo tanto, la Universidad decide impartir esta nueva oferta académica. El día 10 de julio de 1991 bajo el Decreto Excento número 021, se formaliza la creación de la carrera de Ingeniería de Ejecución en Computación e Informática. Para dictar la carrera, en sus comienzos, se contaba con dos Ingenieros Civiles en Informática más un laboratorio equipado con doce computadores con tecnología de punta de la época, conectados en red.</p>

                                <p>El año 2000, se creó el Departamento de Ingeniería Informática y Ciencias de la Computación (DIICC, de acá en adelante), a partir de la separación de las áreas de Computación e Industria del Departamento de Matemáticas y Ciencias de la Computación. Paralelamente, ese mismo año se crearon los nuevos planes de estudios de la carrera de Ingeniería Civil en Computación e Informática, la que comienza a recibir sus primeros alumnos a partir del año 2001.</p>

                                <p>Actualmente, el DIICC dicta las carreras de Ingeniería Civil en Computación e Informática; Ingeniería de Ejecución en Computación (Continuidad de Estudios – Vespertino); Magíster en Informática y Ciencias de la Computación (Magíster Investigación); Magíster en Tecnologías de la Información e Innovación (Magíster Profesional), este ultimo conjuntamente a los Diplomado en Gestión de Tecnologías de Información; Diplomado en Gestión de Innovación y Emprendimiento; y Diplomado en Procesos Integrales de Software. Además presta servicios a otras unidades académicas de la Universidad, realiza actividades de extensión y de investigación.
                                </p>
                            </div>
                        </div>

                        <!--Imagen del frontis del departamento-->
                        <div id="img_dpto" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                            <img id="img_old" src="img/dpto/old.png" class="img-responsive">
                            <h5>El departamento hasta el 2015.</h5>

                            <img id="img_new" src="img/dpto/about1.png" class="img-responsive">
                            <h5>El departamento actualmente.</h5>


                        </div>
                        <!--Fin Imagen del frontis del departamento-->

                    </div>
                    <!--Mision y Vision de la Carrera,junto a los Lineamientos Estrategicos-->

                    <div class="row">
                        <!--MISION-->
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div id="mision-diicc" class="about-content">
                                <h2>Misión</h2>
                            </div>
                            <p>El Departamento de Ingeniería Informática y Ciencias de la Computación pertenece a la Facultad de Ingeniería de la Universidad de Atacama, y tiene como misión cultivar las Ciencias de la Computación e Informática, a través de la investigación, divulgación, aplicación y formación de profesionales, compartiendo la filosofía centrada en la ética, cultura, desarrollo sustentable y equidad social de la Universidad de Atacama, contribuyendo al progreso de nuestra región y país.</p>
                        </div>
                        <!--FIN MISION-->
                        <!--VISION-->
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div id="vision-diicc" class="about-content">
                                <h2>Visión</h2>
                            </div>
                            <p>Mantenerse como la unidad académica líder a nivel regional en docencia, investigación y extensión en ciencias de la computación e informática, y convertirse en un actor reconocido a nivel nacional e internacional en esas áreas.</p>
                        </div>


                    </div>
                    <!--FIN VISION-->
                    <!--LINEAMIENTOS-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="lin_est" class="about-content">
                                <h2>Lineamientos Estratégicos</h2>
                            </div>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Fomentar el desarrollo de la Investigación científica en el DIICC.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Establecer métodos de financiamiento para los distintos proyectos de investigación.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Fomentar proyectos de investigación asociados a las TIC en la comunidad, de acurdo al plan de investigación del DIICC y postulando a recursos regionales.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Apoyar el perfeccionamiento académico y profesional de los Docentes del DIICC.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Consolidar un cuerpo académico adecuado y estable para realizar labores administrativas, docentes, de investigación y extensión.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Disminuir las tasas de deserción y reprobación de los estudiantes que ingresan a la carrera.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Promover sistemas de articulación y continuidad de estudios.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Asegurar el cumplimiento de estándares de calidad en educación y gestión.</p>
                            <p><span class="glyphicon glyphicon-asterisk"></span> Promover e impulsar actividades de extensión en el DIICC.</p>
                        </div>

                    </div>

                    <!--FIN LINEAMIENTO-->
                    <!--CARRUSEL-->
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div id="infra-diicc" class="about-content">
                                <h2></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="infraestructura" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <div id="infra-diicc" class="about-content">
                            </div>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicadores -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                    <!--Diapositivas para las salas
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                    <li data-target="#myCarousel" data-slide-to="6"></li>
                                    <li data-target="#myCarousel" data-slide-to="7"></li>
                                    -->
                                </ol>

                                <!-- Diapositivas -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/dpto/Olimpo1.jpg" alt="Olimpo" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h4>Laboratorio Olimpo</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="img/dpto/Melquiades.jpg" alt="Melquiades" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h4>Laboratorio Melquiades</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="img/dpto/Robotica.jpg" alt="Robotica" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h4>Laboratorio de Robotica</h4>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/Conectividad.jpg" alt="Conectividad" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h4>Laboratorio de Conectividad y Redes</h4>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/SalEst.jpg" alt="SalaEst" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h4>Sala de Estudios</h4>
                                        </div>
                                    </div>
                                    <!--Sala de Clases
                                    <div class="item">
                                        <img src="img/dpto/diicc1.jpg" alt="DIICC1" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/diicc2.jpg" alt="DIICC2" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/diicc3.jpg" alt="DIICC3" class="img-responsive">
                                    </div>
                                    -->
                                </div>
                                <!-- Controles Izquierda y Derecha-->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>


                            </div>
                        </div>
                        <!--FIN CARRUSEL-->
                        <!--Detalles del Departamento-->
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4|" id="detalles_dpto">
                            <div class="about-content">
                                <h2>Nuestras Dependencias</h2>
                            </div>


                            <div class="table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <!--<th>Nuestras Dependencias</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p><span class="glyphicon glyphicon-chevron-right"></span> Auditorio</p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p><span class="glyphicon glyphicon-chevron-right"></span> Sala Multimedia</p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p><span class="glyphicon glyphicon-chevron-right"></span> Sala de Estudios</p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p><span class="glyphicon glyphicon-chevron-right"></span> Sala Modular de Estudios</p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p><span class="glyphicon glyphicon-chevron-right"></span> Dos Salas de Clases</p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p><span class="glyphicon glyphicon-chevron-right"></span> Cuatro Laboratorios</p>
                                                <p><span class="glyphicon glyphicon-pushpin"></span> Robotica</p>
                                                <p><span class="glyphicon glyphicon-pushpin"></span> Conectividad y Redes</p>
                                                <p><span class="glyphicon glyphicon-pushpin"></span> Dos Laboratorios de Computación</p>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Fin detalles dpto-->
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include_once "../include/footer.php";?>
        <!-- FOOTER -->
    </body>

</html>