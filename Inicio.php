
<html lang="en" class=""><head>

  <meta charset="UTF-8">
  <title>Inicio</title>

<!-- Favicons -->

<link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="icon"href="assets/images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<style class="INLINE_PEN_STYLESHEET_ID">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
body, html {
height: 100%;
}

body {
font-family: 'Open Sans';
font-weight: 100;
display: -webkit-box;
display: flex;
overflow: hidden;
}

input ::-webkit-input-placeholder {
color: rgba(255, 255, 255, 0.7);
}
input ::-moz-placeholder {
color: rgba(255, 255, 255, 0.7);
}
input :-ms-input-placeholder {
color: rgba(255, 255, 255, 0.7);
}
input:focus {
outline: 0 transparent solid;
}
input:focus ::-webkit-input-placeholder {
color: rgba(0, 0, 0, 0.7);
}
input:focus ::-moz-placeholder {
color: rgba(0, 0, 0, 0.7);
}
input:focus :-ms-input-placeholder {
color: rgba(0, 0, 0, 0.7);
}

.login-form {
min-height: 10rem;
margin: auto;
max-width: 80%;
padding: .5rem;
}

.login-text {
color: white;
font-size: 1.5rem;
margin: 0 auto;
max-width: 50%;
padding: .5rem;
text-align: center;
}
.login-text .fa-stack-1x {
color: black;
}

.login-username, .login-password {
background: transparent;
border: 0 solid;
border-bottom: 1px solid rgba(255, 255, 255, 0.5);
color: white;
display: block;
margin: 1rem;
padding: .5rem;
-webkit-transition: 250ms background ease-in;
transition: 250ms background ease-in;
width: calc(100% - 3rem);
}
.login-username:focus, .login-password:focus {
background: white;
color: black;
-webkit-transition: 250ms background ease-in;
transition: 250ms background ease-in;
}

.login-forgot-pass {
bottom: 0;
color: white;
cursor: pointer;
display: block;
font-size: 75%;
left: 0;
opacity: 0.6;
padding: .5rem;
position: absolute;
text-align: center;
width: 100%;
}
.login-forgot-pass:hover {
opacity: 1;
}

.login-submit {
border: 1px solid white;
background: transparent;
color: white;
display: block;
margin: 1rem auto;
min-width: 1px;
padding: .25rem;
-webkit-transition: 250ms background ease-in;
transition: 250ms background ease-in;
}
.login-submit:hover, .login-submit:focus {
background: white;
color: black;
-webkit-transition: 250ms background ease-in;
transition: 250ms background ease-in;
}

[class*=underlay] {
left: 0;
min-height: 100%;
min-width: 100%;
position: fixed;
top: 0;
}

.underlay-photo {
-webkit-animation: hue-rotate 6s infinite;
        animation: hue-rotate 6s infinite;
background: url("https://31.media.tumblr.com/41c01e3f366d61793e5a3df70e46b462/tumblr_n4vc8sDHsd1st5lhmo1_1280.jpg");
background-size: cover;
-webkit-filter: grayscale(30%);
z-index: -1;
}

.underlay-black {
background: rgba(0, 0, 0, 0.7);
z-index: -1;
}

@-webkit-keyframes hue-rotate {
from {
  -webkit-filter: grayscale(30%) hue-rotate(0deg);
}
to {
  -webkit-filter: grayscale(30%) hue-rotate(360deg);
}
}

@keyframes hue-rotate {
from {
  -webkit-filter: grayscale(30%) hue-rotate(0deg);
}
to {
  -webkit-filter: grayscale(30%) hue-rotate(360deg);
}
}

</style>


<script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-7f4d47902dc785f30dedcac9c996b9f31d4dfcc33567cc48f0431bc918c2bf05.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>

</head>

<body>
  <form class="login-form" action="login.php" method="post">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="email" name="correo" class="login-username" ="true"="" required="true" placeholder="Correo">
  <input type="current-password" name="contrasena" class="login-password" required="true" placeholder="Contraseña">
  <input type="submit" name="submite" onclick='return enviarFormulario()' value="Entra" class="login-submit">
</form>
<a href="registro.html" class="login-forgot-pass">Registrate</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
<div = "error">
<span><?php echo $error; ?></span>
</div>


<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>



</body></html>
