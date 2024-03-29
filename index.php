<?php
session_start();
$_SESSION["nivel"] = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Intercambio de Servicios</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">   
</head>
<body>
    <header>
        <h1>Bienvenido a Intercambio de Servicios</h1>
        <nav>
            <ul>
                <li><a href="php/sanitRegistro.php">Registro</a></li>
                <li><a href="php/sanitLogin.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="intro">
        <h2>¿Qué es Intercambio de Servicios?</h2>
        <p>
            Intercambio de Servicios es una plataforma en la que los usuarios pueden ofrecer y buscar servicios
            para intercambiar. Regístrate y descubre una nueva forma de obtener lo que necesitas a cambio de tus habilidades.
        </p>
    </section>

    /***
    Las páginas tienen que ser dinámicas. Los servicios que aquí mostramos tienen que ser los que leemos del ficher y más
    adelante de la base de datos
    ***/

    <section id="servicios-destacados">
        <h2>Servicios Destacados</h2>
        <div class="servicio">
            <img src="assets/imgServicios/imagen-servicio1.jpg" alt="Servicio 1">
            <h3>Fontaneros</h3>
            <p>Ofrecemos servicios de fontanería de alta calidad para resolver tus problemas de plomería.</p>
            <a href="detalle-servicio1.php">Ver más</a>
        </div>
        <div class="servicio">
            <img src="assets/imgServicios/imagen-servicio2.jpg" alt="Servicio 2">
            <h3>Profesores de programación</h3>
            <p>Aprende programación de la mano de nuestros expertos. Te ayudamos a dominar los lenguajes de programación más populares.</p>
            <a href="detalle-servicio2.php">Ver más</a>
        </div>
        <div class="servicio">
            <img src="assets/imgServicios/imagen-servicio3.avif" alt="Servicio 3">
            <h3>Diseñadores gráficos</h3>
            <p>Creamos diseños únicos y atractivos para tu marca o proyecto. Déjanos dar vida a tus ideas visuales.</p>
            <a href="detalle-servicio3.php">Ver más</a>
        </div>
        <!-- Se pueden añadir más servicios destacados según sea necesario -->
    </section>
    
    <section id="footer">
        <p>&copy; 2023 Intercambio de Servicios Fran-Kevin-Pablo</p>
    </section>
</body>
</html>
