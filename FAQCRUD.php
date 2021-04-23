<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Usuario</title>

    <style>
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtaorCIPrQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCIPrQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoorCIPrQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCIPrQ.ttf) format('truetype');
        }

        body {
            background-color: #50b98a;
            color: #20503b;
            font-family: Raleway;
            font-size: 1.188em;
            font-weight: 400;
            padding-bottom: 90px;
            -webkit-font-smoothing: antialiased;
        }

        h1 {
            font-size: 2.1em;
            margin-bottom: 40px;
            letter-spacing: -1px;
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

    </style>

</head>

<body translate="no">

    <div id="preguntas">
        <div id="header">
            <h1>Preguntas Frecuentes</h1>
            <p><small>hecho por <strong>BP</small></p>
        </div>

		<?php

		$servidor = 'localhost';
		$base_datos = 'guinda';
		$usuario = 'root';
		$clave = '';

		$con = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $clave);

		?>

<table border="0" class="table table-striped" width="80%">
		<thead>
		<tr>
			<th><font size=5>Pregunta</font></th>
			<th><font size=5>Respuesta</font></th>
		</tr>
		</thead>
		<?php
		foreach ($con->query("SELECT * from preguntas") as $row){
		?>
		<tr>
	<td><font size=3><?php echo $row['pregunta'] ?></font></td>
    <td>
        <form   method='POST' action="DELETE.php">
        <input type='hidden' name='eliminar' value='".$result -> pregunta"'>
        <button class="boton verde" name='eliminar'>Eliminar</button>
        </form>
    </td>
	<td><font size=3>CAMBIA</font></td>
		</tr>

	<?php }?>
</table>
</body>
</html>
