<!doctype html>
    <!--ordenar los titulos y que vaya una separacion en las informaciones-->
    <!--Hacer el mismo diseño que en la parte de magister-->
<html class="no-js" lang="en">
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "DIPLOMADO EN TECNOLOGÍA PARA INTELIGENCIA DE NEGOCIOS - DIICC UDA";
    include_once "../include/functions.php";
    include_once "../config/config.php";
    include_once "../include/head.php";
?>
    <body>
        <!-- HEADER -->
        <?php include_once "../include/header2.php";?>
        <!-- HEADER -->
        <!-- Blog Start -->
        <div class="blog-details-area pt-150 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details">
                            <div class="blog-details-img">
                               
                            </div>
                            <div class="blog-details-content">
                                <h2>Diplomado en Tecnología para Inteligencia de Negocios (DTIN)</h2>
                                <br>
                                <h3>Información general:</h3>
                                <br>
                                <table id="tablepress-5" class="tablepress tablepress-id-5">
                                        <tbody  class="row-hover">
                                                <tr style="border-bottom: solid #E5E8E8 ;" class="row-1 odd">
                                                    <td  class="column-1">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                            <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Modalidad:</h5>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                         <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Presencial (clases cada 15 días)<br> </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="border-bottom: solid #E5E8E8 ;"  class="row-2 even">
                                                    <td class="column-1"> 
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Horario de Clases: </h5>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p style="margin-left: 20px;"class="card-text"><small class="text-muted">Viernes 19:00 – 23:00 hrs., Sábado 09:00 – 14:00 hrs.<br> </small></p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr style="border-bottom: solid #E5E8E8 ;" class="row-3 odd">
                                                    <td class="column-1">
                                                         <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                               
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Lugar de realización:</h5>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Departamento Ingeniería en Informática y Ciencias de la Computación (DIICC) <br> Facultad de Ingeniería<br>Av. Copayapu 485, Copiapó<br> </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="border-bottom: solid #E5E8E8 ;"class="row-4 even">
                                                    <td class="column-1">
                                                         <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Duración Total:</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2"> 
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted"> 189 horas presenciales</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="border-bottom: solid #E5E8E8 ;"class="row-5 odd">
                                                    <td class="column-1">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Fecha de matrícula:</h5>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Hasta el 15 de Mayo 2019 <br></small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="border-bottom: solid #E5E8E8 ;" class="row-6 even">
                                                    <td class="column-1">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Fecha de inicio:</h5>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Junio 2019 <br></small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <tr style="border-bottom: solid #E5E8E8 ;" class="row-7 odd">
                                            <td class="column-1">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Vacantes</h5>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-2">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">20<br></small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                               
                                <br>
                                <h3>Objetivos específicos del programa:</h3>
                                <br>
                                <li> Proporcionar un marco conceptual que fundamente la gestión informática en las organizaciones través de la tecnología IN, alineados con los objetivos estratégicos.</li>
                                <li>Proveer de herramientas prácticas y metodológicas que favorezcan el análisis, diseño e implementación de un proyecto.</li>
                                <li>Conocer, dominar y aplicar técnicas actualizadas y específicas orientadas al desarrollo y/o adopción de soluciones tecnológicas de IN, en las organizaciones productivas o de prestación de servicios, sean estas del sector público </li>
                                <li>Fomentar en los participantes del programa, las competencias conceptuales y analíticas imprescindibles para proponer, formular, liderar, planificar, analizar, diseñar e implementar soluciones de IN, como parte de un proceso de apoyo a la toma de decisiones.</li>
                                <br>
                                <p>Podrán ingresar a este programa:</p> 
                                <li> Los egresados o titulados de T ecnología Universitaria en análisis y programación de Sistemas computacionales..</li>
                                <li>Cualquier egresado o titulado de alguna carrera Técnica Universitaria a fin o para quienes acrediten estudios similares, siempre que el Departamento de Ingeniería Informática y ciencias de la Computación apruebe su postulación.</li>   
                                <br>
                                <br>
                                <h3>Requisitos de Ingreso al programa:</h3>
                                <br>
                                <li>Estar en posesión de un título profesional de carreras de ingenierías o afines con al menos 8 semestres de duración o poseer grado de licenciado.</li>   

                                <p>Cualquier otro caso será evaluado por el claustro de profesores del programa DTIN.</p>
                                
                                <p>Los antecedentes que deben presentar los y las postulantes para iniciar su proceso de postulación son los siguientes:<br>
                                    <li>Copia de Cédula de Identidad</li>
                                    <li>Currículo Vitae actualizado</li>
                                    <li>Copia legalizada del certificado de título y/o grado académico</li>   
                                </p>
                               
                                <br>
                                 <h3>Contenidos:</h3>
                                <br>
                                <table id="tablepress-4" class="tablepress tablepress-id-4">
                                    <tbody class="row-hover">
                                    <tr class="row-1 odd">
                                        <td class="column-1"><h5 class="card-title">N°</h5></td><td class="column-2"><strong>Asignatura</strong></td>
                                    </tr>
                                    <tr class="row-2 even">
                                        <td class="column-1"><h5 class="card-title">1</h5></td><td class="column-2">Manejo de Base de Datos</td>
                                    </tr>
                                    <tr class="row-3 odd">
                                        <td class="column-1"><h5 class="card-title">2</h5></td><td class="column-2">Tecnología para la Gestión Estratégica e Inteligencia de<br>
                                    Negocios</td>
                                    </tr>
                                    <tr class="row-4 even">
                                        <td class="column-1"><h5 class="card-title">3</h5></td><td class="column-2">Diseño y Proceso de un<br>
                                    Data WareHouse<br>
                                    </td>
                                    </tr>
                                    <tr class="row-5 odd">
                                        <td class="column-1"><h5 class="card-title">4</h5></td><td class="column-2">Proceso de Extracción, Transformación y Carga<br>
                                    de Datos<br>
                                    </td>
                                    </tr>
                                    <tr class="row-6 even">
                                        <td class="column-1"><h5 class="card-title">5</h5></td><td class="column-2">Procesamiento<br>
                                    Analítico en Línea (OLAP)<br>
                                    </td>
                                    </tr>
                                    <tr class="row-7 odd">
                                        <td class="column-1"><h5 class="card-title">6</h5></td><td class="column-2">Descubrimiento de Conocimiento en Bases<br>
                                    de Datos (KDD)<br>
                                    </td>
                                    </tr>
                                    <tr class="row-8 even">
                                        <td class="column-1"><h5 class="card-title">7</h5></td><td class="column-2">Técnicas y Proceso Data Mining</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h3> Cuerpo Académico:</h3>
                                <br>
                                <table id="tablepress-5" class="tablepress tablepress-id-5">
                                        <tbody class="row-hover">
                                                <tr class="row-1 odd">
                                                    <td  class="column-1">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="../img/academicos/img11.jpg" class="img-fluid rounded-start" alt="..." style="border-radius:50px;">
                                                                </div>
                                                            <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">John Atkinson Abutridy</h5>
                                                                        <p class="card-text"><small class="text-muted"> Académico de la Universidad Adolfo Ibañez, Santiago,Chile</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                         <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">PhD In Artificial Intelligence School of Informatics University of Edinburgh, Edinburgh, Scotland, UK </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 even">
                                                    <td class="column-1"> 
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="../img/academicos/img9.jpg" class="img-fluid rounded-start" alt="teache" style="border-radius:50px;" >
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Dante Carrizo Moreno </h5>
                                                                        <p class="card-text"><small class="text-muted"> Académico de la Universidad de Atacama Copiapó,Chile</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                    <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p style="margin-left: 20px;"class="card-text"><small class="text-muted">Doctor en Ingeniería de Software, Universidad Politécnica de Madrid (UPM), España<br> </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row-3 odd">
                                                    <td class="column-1">
                                                         <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="../img/academicos/img5.jpg" class="img-fluid rounded-start" alt="teacher" style="border-radius: 50px;">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Wilson Castillo-Rojas</h5>
                                                                        <p class="card-text"><small class="text-muted">  Académico de la Universidad de Atacama Copiapó,Chile</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Doctor en Ingeniería de Software, Universidad Politécnica de Madrid (UPM),España<br> </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row-4 even">
                                                    <td class="column-1">
                                                         <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="../img/academicos/img12.jpg" class="img-fluid rounded-start" alt="..." style="border-radius:50px;">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">José Luis Martí Lara</h5>
                                                                        <p class="card-text"><small class="text-muted">Académico de la Universidad Técnica Federico Santa María,
                                                                        Santiago,Chile</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2"> 
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Magíster en Ingeniería Informática, Universidad Técnica Federico Santa María, Valparaíso (UTFSM),Chile<br> </small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row-5 odd">
                                                    <td class="column-1">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="../img/academicos/img15.jpg" class="img-fluid rounded-start" alt="..." style="border-radius:50px;">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Mauricio Olivares Faúndez</h5>
                                                                        <p class="card-text"><small class="text-muted">Académico de la Universidad Técnica Federico Santa María, Santiago, Chile</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted"> Magíster en Gestión, Universidad Católica de Valparaíso (UCV), Chile<br></small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row-6 even">
                                                    <td class="column-1">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="../img/academicos/img13.jpg" class="img-fluid rounded-start" alt="..." style="border-radius:50px;">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Francisco García Barrera</h5>
                                                                        <p class="card-text"><small class="text-muted"> Académico de la Universidad Arturo Prat, Iquique,Chile</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="column-2">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted"> Magíster en Gestión Informática, Universidad Arturo Prat (UNAP), Chile<br></small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <tr class="row-7 odd">
                                            <td class="column-1">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="../img/academicos/img14.jpg" class="img-fluid rounded-start" alt="..." style="border-radius:50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Cristóbal Ibarra González</h5>
                                                                <p class="card-text"><small class="text-muted"> Gerente de BI y Big Data de Consultora Metricarts, Santiago, Chile</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-2">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <p id="card-text" style="margin-left: 20px;"class="card-text"><small class="text-muted">Magister de Tecnologías de la Información y Gestión, Pontifica Universidad Católica (PUC), Chile<br></small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <p>Coodinador del Programa DTIN: Dr. Wilson Castillo-Rojas, Profesor Asociado DIICC-UDA </p>
                                <li>wilson.castillo@uda.cl</li>
                                <br>
                                <h3>Valores de aranceles:</h3>
                                <br>
                                <li>Arancel básico: 200.000</li>
                                <li>Arancel matrícula: 1.300.000  </li>
                                <br>
                                <h4>En el siguiente link puede descargar en formato PDF la información:</h4>       
                                <li><a href=<?php echo fromroot($file, "img/blog/Diplomado-inteligencia.pdf"); ?>>Documento</a></li>
                                   
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                           
                           
                            <div class="single-blog-widget mb-47">
                                <div class="single-blog-banner">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJ4pKZWImnq67HAen8p9rUejfvMxjNRzKr3Btfl0Bb8QriA/viewform?embedded=true" id="blog"><img src="../img/blog/blog-img.jpg" alt="blog"></a>
                                    <h2><br> <br> </h2> 
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        
        <!-- FOOTER -->
        <?php include_once "../include/footer.php";?>
        <!-- FOOTER -->
    </body>
</html>
