<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1" >
	<meta name="author" content="bp">
	<meta name="description" content="Pagina estudiantil para la administración">
	<meta name="keywords" content="Administrar, premium, redes estudiantiles">
	<!-- estamos refrescando la pagina cada 400 segundos -->
	<meta http-equiv="refresh" content="400">
	<!-- Adaptar la página a dispositivos moviles -->
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
    <!-- Estilos propios -->
    <style>
   		 .header{
   		 text-align: center;
   		 height: 300 px;
   		 padding:12px;
   		 background-image:url("https://pm1.narvii.com/6310/26be4bb85851e285fd4dd385b4c657b6d8a42642_hq.jpg");
   		  background-size: 100% 100%;
  		 background-attachment: fixed;
  		  }
  		  .avatar{
  		  width:200px;
  		  height:200px;
  		  border-radius: 50%;
  		  }
  		  .user-name{
  		  		color: #fff;
  		  }
  		  .socials {
			list-style: none;
			text-align: center;
			padding: 0;  		  
  		  }
  		  .socials li {
  		  display:inline-block;
  		  margin:5px;
  		  }
  		  
  		  a{
  		  text-decoration: none;
  		  color: #ad0000;
  		  }
  		  a:hover{
  		  color: #dd1919;
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
    </style>

	 <!-- Favicons -->
 	 <link href="assets/images/favicon.png" rel="icon">
 	 <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
	
	
</head>
<body>
	<form class="login-form" action="actperfil.php" id="waterform" method="post">

	<div class="header">
		<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Anima guinda"></a>
		<img class="avatar" src="https://i.pinimg.com/564x/8c/44/9a/8c449ab45fb85ef6e2334d4714f6b6ac.jpg"/>
		<h1 class="user-name" contenteditable><?php echo $login_user; ?></h1>
	</div>
	<ul class= "socials">
		<li>
			<a href="mailto:<?php echo $login_session; ?>"><?php echo $login_session; ?></a>
		</li>
		<li> 
	</ul>
	<div class="about" contenteditable>
		<h3>Acerca de <?php echo $login_user; ?></h3>
		<label for="reporte">Descripcion: <?php echo $login_desc ?></label>
        <input type="text" id="descripcion" name="descripcion" />
		<input type="submit" value="envialo" />
	</div>
	<div class="about">
	</form>
		<!-- es un formulario para que puedan cambiar los datos -->
			<form name="tu_jta" action="#">
				<select class="seleccion" name= "Editar">
					<option selected>Escoga una</option>
					<option  value="0">Guardar cmb.</option>
					<option id="fondo" value="1">Edit. fondo</option>
					<option id="imagen" value= "2">Edit. imagen</option>
					<option id="info" value = "3">Edit. redes</option>
				</select>
			</form>
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
      <script type="text/javascript" src='Validación.js'>

    		//# sourceURL=pen.js
 		</script>
</body>
</html>