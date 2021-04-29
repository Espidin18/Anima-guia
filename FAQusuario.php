<?php
include 'session.php';
?>
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
    </style>

</head>

<body translate="no">

    <div id="preguntas">
        <div id="header">
            <h1>Preguntas Frecuentes</h1>
            <p><small>Bienvenid@ <strong><i><?php echo $login_session; ?></i></small></p>
        </div>

		<?php



		if (isset($_SESSION['tipo'])== 1){
					header('location: http://192.168.0.2/bp/Anima%20Guinda/FAQCRUD.php');
		}elseif (isset($_SESSION['tipo'])== 1) {
            header('location: FAQdiseñador.php');
        }elseif (isset($_SESSION['tipo'])== 1) {
            header('location: FAQdiseñador.html');
        }else{
            header('Location: index.html');
        }

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
    <td><font size=3><?php echo $row['respuesta'] ?></font></td>
		</tr>
	<?php
	}
	?>
</table>
    <div>
				<h4><a href="logout.php"> Cerrar sesión</a></h4>
    </div>
</body>
</html>
