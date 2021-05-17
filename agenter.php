<?php
include 'session.php';
?>
<html lang="en">
<head>


    <title>Usuario</title>
    <meta charset="ISO-8859-1" >
	<meta name="author" content="bp">
	<meta name="description" content="Pagina estudiantil para la administraci�n">
	<meta name="keywords" content="Administrar, premium, redes estudiantiles">
	<!-- estamos refrescando la pagina cada 400 segundos -->
	<meta http-equiv="refresh" content="400">
	<!-- Adaptar la p�gina a dispositivos moviles -->
	<meta name="viewport" content="width=device-width,initial-scale= 1,maximum-scale=1" user-scalable= no />
	<title>Perfil</title>
	<!-- Estilos & Fuentes -->
    <!-- Fuentes de google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Estilos de plugins -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- modelo del estilo -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Estilo de la Responsiva -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtaorCIPrQ.ttf) format('truetype');
        }

        a{
        text-decoration: none;
        color: #ad0000;
        font-family: 'Bangers', cursive;
        }
        a:hover{
        color: #dd1919;
        }
        body {
            background-color: #50b98a;
            color: #20503b;
            
            padding-bottom: 90px;
            -webkit-font-smoothing: antialiased;


        }

        h1 {

            margin-bottom: 40px;
            letter-spacing: -1px;
            font-weight: normal;
            font-size: 4em;
            font-family: 'Raleway', sans-serif;
            margin: 0 auto;
            margin-top: 30px;
            width: 500px;
            color: #F90;
            text-align: center;
        }

        h3 {
            -moz-transition: all 0.35s ease;
            -ms-transition: all 0.35s ease;
            -o-transition: all 0.35s ease;
            -webkit-transition: all 0.35s ease;
            background-color: #62c096;
            border-bottom: 3px solid #40a075;
            margin: 0;
            padding: 18px 15px;
            transition: all 0.35s ease;
            font-weight: 500;
        }

            h3:hover {
                background-color: #74c8a3;
                color: #193e2d;
                cursor: pointer;
            }

            h3::before {
                content: "\276f";
                font-size: 18px !important;
                float: left;
                line-height: 30px;
                margin: 0 15px 0 5px;
                opacity: 0.5;
                -moz-transition: all 0.15s ease;
                -ms-transition: all 0.15s ease;
                -o-transition: all 0.15s ease;
                -webkit-transition: all 0.15s ease;
                transition: all 0.15s ease;
            }

            h3.cerrar {
                cursor: pointer;
            }

                h3.cerrar::after {
                    content: "\2715";
                    float: right;
                    font-size: 11px;
                    font-weight: 300;
                    line-height: 30px;
                }

                h3.cerrar::before {
                    -moz-transform: rotate(-90deg) !important;
                    -ms-transform: rotate(-90deg) !important;
                    -o-transform: rotate(-90deg) !important;
                    -webkit-transform: rotate(-90deg) !important;
                    transform: rotate(-90deg) !important;
                }

        h4 {
            font-size: 21px;
            font-weight: 400;
            margin: 0 auto;
            width: 70%;
            border-bottom: 1px dotted #74c8a3;
            padding-bottom: 20px;
        }

        div {
            margin: 0;
        }

            div:first-child {
                border: none;
                margin-top: 45px;
            }

        img {
            height: 16px;
            width: 16px;
        }

        h3:hover::before {
            opacity: 0.55;
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        div.respuesta {
            background: #40a075;
            margin-bottom: 20px;
            line-height: 1.8em;
        }

            div.respuesta p {
                font-weight: 400;
                margin: 0;
                padding: 25px 50px;
            }

        #header {
            background: #40a075;
            margin: 0 0 20px 0;
            padding: 30px;
            text-align: center;
            overflow: hidden;
        }

            #header a {
                color: #bde5d3;
                text-decoration: none;
            }

        #preguntas {
            margin: 40px auto 0;
            padding: 0 5%;
        }

        #cerrartodas {
            background-color: #ed1409;
            bottom: 30px;
            color: #ffffff;
            font-size: 14px;
            padding: 5px 10px;
            position: fixed;
            right: 10%;
            text-decoration: none;
            z-index: 1;
        }
        .boton{
      text-shadow: 0px 1px rgba(0, 0, 0, 0.2);
            text-align:center;
            text-decoration: none;
      font-family: 'Helvetica Neue', Helvetica, sans-serif;
      display:inline-block;
            color: #FFF;
            background: #7F8C8D;
            padding: 7px 20px;
            white-space: nowrap;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 100px;
            margin: 10px 5px;
            -webkit-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .azul{
        background: #3498DB;
        box-shadow: 0px 5px 0px 0px #2980B9;
        }

        .azul:hover{
        background: #39a0e5;
        }

        .azul:active{
        box-shadow: 0px 2px 0px 0px #2980B9;
        }

        .verde{
        background: #2ECC71;
        box-shadow: 0px 5px 0px 0px #27AE60;
        }

        .verde:hover{
        background: #32db78;
        }

        .verde:active{
        box-shadow: 0px 2px 0px 0px #27AE60;
        }

        .rojo{
        background: #E74C3C;
        box-shadow: 0px 5px 0px 0px #C0392B;
        }

        .rojo:hover{
        background: #ff5242;
        }

        .rojo:active{
        box-shadow: 0px 2px 0px 0px #C0392B;
        }
        .about{
        padding: 40px;
        }
        .seleccion{
        border: 3px solid #58ACFA;
        background-color:#faa658;
        color: white;
        font-size: 17px;
        Width: 150px;
        border-radius: 12%;
        height: 35px;
        }

                /* Animation webkit */
                @-webkit-keyframes myfirst {
                    0% {
                        margin-left: -235px
                    }

                    90% {
                        margin-left: 100%;
                    }

                    100% {
                        margin-left: 100%;
                    }
                }

                /* Animation */
                @keyframes myfirst {
                    0% {
                        margin-left: -235px
                    }

                    70% {
                        margin-left: 100%;
                    }

                    100% {
                        margin-left: 100%;
                    }
                }

    </style>
    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">

</head>

<body translate="no">
<div class="header"><a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Anima guinda"></a></div>
    <div id="preguntas">
        <div id="header">
            <h1>Reportes</h1>
            <p><small>Bienvenid@ <strong><i><?php echo $login_session; ?></i></small></p>
        </div>

<table border="0" class="table table-striped" width="80%">
		<thead>
		<tr>
			<th><font size=5>Número</font></th>
			<th><font size=5>Reporte</font></th>
			<th><font size=5>Fecha</font></th>
			<th><font size=5>Usuario</font></th>
			<th><font size=5>Agente</font></th>
			<th><font size=5>Cambiar</font></th>
		</tr>
		</thead>
		<?php
		$sql="SELECT * FROM reportes";
		$result=mysqli_query($con,$sql);
		
		while($row=mysqli_fetch_array($result)){
		?>
		<tr>
	<td><font size=3><?php echo $row['idReporte'] ?></font></td>
    <td><font size=3><?php echo $row['reporte'] ?></font></td>
	<td><font size=3><?php echo $row['fechar'] ?></font></td>
	<td><font size=3><?php echo $row['usuarior'] ?></font></td>
	<td><font size=3>
		<form action="#" method="post">
		<input type="checkbox" name="visto" value="visto">Visto</input>
		<input type="submit" name="submit" value="Enviar Informacion"/>
		</form>
		<?php
		// COndicional para validad el genero
		if (isset($_POST['visto'])){
			$row1=$row['idReporte'];
			$agente = $login_session;
			$insert2 = $con->prepare("UPDATE reportes SET agenter='$agente' WHERE idReporte=$row1");
			$insert2->execute();
		}
		echo $row['agenter']
	?></font></td>
	<td><font size=3>
		<form action="#" method="post">
		<div class="formgroup" id="name-form">
                <label for="reporte"></label>
                <input type="text" id="reporte" name="reporte" />
            </div>

            <input type="submit" value="actualizalo" />
		</form>
		<?php
		if (isset($_POST['reporte'])){
			$nreporte = $_POST['reporte'];
			$insert3 = $con->prepare("UPDATE reportes SET reporte='$nreporte' WHERE idReporte=idReporte");
			$insert3->execute();
		}
		?>
	</font></td>
		</tr>
	<?php
	}
	?>
</table>
    <div>
				<h4><a href="logout.php"> Cerrar sesión</a></h4>
    </div>
    <!-- Foot Note Start -->
<div class="foot-note">
    <div class="container">
        <div class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
            <p class="mb-0" data-aos="fade-right" data-aos-offset="0">&copy; 2020 All Rights Reserved. Design by <a href="https://freehtml5.co/multipurpose" target="_blank" class="fh5-link">BP</a>.</p>
            <p class="mb-0" data-aos="fade-left" data-aos-offset="0"><a href="#">Terms Of Use</a><a
                    href="#">Privacy & Security
                    Statement</a></p>
        </div>
    </div>
</div>
<!-- Foot Note End -->
</footer>
<!-- Footer Endt -->
<!--jQuery-->
<script src="assets/js/jquery-3.3.1.js"></script>
<!--Plugins-->
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/loaders.css.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/lightgallery-all.min.js"></script>
<!--Template Script-->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src='Validaci�n.js'>

    //# sourceURL=pen.js
</script>
</body>
</html>