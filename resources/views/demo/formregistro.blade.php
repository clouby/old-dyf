
<!-- Modal -->
<div class="modal fade" id="modal-login-no-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center" id="exampleModalLabel">Registro necesario.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="messages" style="display:none"></div>
        <form id="modalForm" action="{{ route('registerUser') }}" method="post">
          @csrf
        <div class="box">
          <p>
            Para poder realizar una compra en Deal your Fun, es necesario registrarte; te invitamos a hacerlo en un par de clicks.
          </p>
        </div>

        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
        </div>

        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password" class="">Contraseña:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>

            
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label for="password2" class="">Confirmación Contraseña:</label>
              <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password" required>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-modal-dismiss" data-dismiss="modal">Ahora no</button>
        <button id="modalSubmit" type="submit" class="btn btn-default">Registrarme y continuar <span class="arrow">&rarr;</span></button>
      </div>
      </form>
    </div>
  </div>
</div>