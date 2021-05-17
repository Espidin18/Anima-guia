<!-- Modal -->
<div class="modal fade" id="editar<?php echo $row_usuario['id_usuario'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar pregunta</h4>
      </div>
      <div class="modal-body">

<form id="formEditar<?php echo $row_usuario['id_usuario'];?>" data-smk-icon="glyphicon-remove" action="javascript:()">
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Respuesta</label></div>
      <div class="col-md-10">
    <input class="form-control" id="nombre<?php echo $row_usuario['id_usuario'];?>" name="nombre"  value="<?php echo $row_usuario['nombre'];?>"
    placeholder="Nombre" required  >
      </div>
  </div>
</div>
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Pregunta</label></div>
      <div class="col-md-10">
        <input class="form-control" id="usuario<?php echo $row_usuario['id_usuario'];?>" name="usuario"  value="<?php echo $row_usuario['usuario'];?>"
    placeholder="Usuario" required  ></div>
  </div>
</div>

<br>


<input type="hidden"  name="id_usuario" id="id_usuario<?php echo $row_usuario['id_usuario'];?>" value="<?php echo $row_usuario['id_usuario'];?>" size="32">
<input type="hidden"  name="viejo_usuario" id="viejo_usuario<?php echo $row_usuario['id_usuario'];?>" value="<?php echo $row_usuario['usuario'];?>" size="32">

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary" id="btnEditar<?php echo $row_usuario['id_usuario'];?>">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script>


$('#btnEditar<?php echo $row_usuario['id_usuario'];?>').click(function() {
    if ($('#formEditar<?php echo $row_usuario['id_usuario'];?>').smkValidate()) {
                 if( $.smkEqualPass('#pass1', '#pass2') ){

      // Code here
     var dataString=
        'nombre='+$('#nombre<?php echo $row_usuario['id_usuario'];?>').val()+
        '&usuario='+$('#usuario<?php echo $row_usuario['id_usuario'];?>').val()+
        '&viejo_usuario='+$('#viejo_usuario<?php echo $row_usuario['id_usuario'];?>').val()+
        '&id_usuario='+$('#id_usuario<?php echo $row_usuario['id_usuario'];?>').val();

    $.ajax({
        type:"POST",
        url:"ajax/editar_usuario.php",
        data:dataString
    }).done(function(data){
      if(data==1){
          $.smkAlert({
          text: 'Excelente',
          type: 'success'
      });
        ver_tabla_usuario();
        $("#editar").modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
			}
      	else{
            $.smkAlert({
            text: 'Error',
            type: 'danger'
        });
			}
    })
  }
  }
});


</script>
