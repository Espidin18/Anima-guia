var correo = document.getElementById('correo');
var clave = document.getElementById('clave');
var error = document.getElementById('error');
error.style.color = 'red' ;

function enviarFormulario(){
    console.log('Iniciando sesion...');
    var mensajesError = [];
    if(correo.value === null || correo.value === ''){
        mensajesError.push('Ingresa tu Correo');
    }
    if(clave.value === null || clave.value === ''){
        mensajesError.push('Ingresa tu Contraseña');
    }

    error.innerHTML= mensajesError.join(', ');
    return false;
}
