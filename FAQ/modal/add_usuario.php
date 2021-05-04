<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Pregunta</h4>
      </div>
      <div class="modal-body">
<form id="formEmpty" data-smk-icon="glyphicon-remove" action="javascript:()">
<div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Respuesta</label></div>
      <div class="col-md-10">
    <input class="form-control" id="nombre" name="nombre"
    placeholder="Nombre" required maxlength="25" >
      </div>
  </div>
</div>
<br>
  <div class="row">
  <div class="form-group">
      <div class="col-md-2"><label class="control-label">Usuario</label></div>
      <div class="col-md-10">
        <input class="form-control" id="usuario" name="usuario"
    placeholder="Usuario" required maxlength="10" ></div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClear">Clear</button>
        <button type="submit" class="btn btn-primary" id="btnEmpty">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
