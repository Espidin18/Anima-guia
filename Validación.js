var avatar = document.getElementById('avatar');
var fondo = document.getElementById('fondo');
var imagen = document.getElementById('imagen');
var info = document.getElementById('info');

function editarPag(){
	var cosa;
	cosa = document.tu_jta.Editar[document.tu_jta.Editar.selectedIndex].value;
	//obtuvimos el valor de lo que fue selecionado
	switch (cosa){
		case 0:
			avatar.contenteditable;
			break;
		case 1:
			break;
		case 2:
			break;
		case 3:
			break;
		default:
			
	}
    if(correo.value === null || correo.value === ''){
        mensajesError.push('Ingresa tu Correo');
    }
    if(clave.value === null || clave.value === ''){
        mensajesError.push('Ingresa tu Contraseña');
    }

    error.innerHTML= mensajesError.join(', ');
    return false;
}
