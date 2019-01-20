<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog text" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLongTitle">Crear Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label>Nombre Completo del Usuario:</label>
              <input type="text" name="" id="newUserComplete" class="form-control" required>
            </div>
             <div class="form-group">
              <label>Nombre del Usuario:</label>
              <input type="text" name="" id="newUser" class="form-control" required>
            </div>
             <div class="form-group">
              <label>E-mail:</label>
              <input type="email" name="" id="newEmail" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Información Extra:</label>
              <input type="text" name="" id="InfoExtra" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" name="" id="newPassword" class="form-control" required>
            </div>
              <span  class="btn btn-primary" id="SubmitCreateUser">Enviar</span>

          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>