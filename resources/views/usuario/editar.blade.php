<div class="modal-dialog">
    <form method="POST" id="form-usuario-editar">
        @method('PUT')
        @csrf
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="crearCategoriaLabel">
                  Editar Usuario.
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          <div class="modal-body">
                    <input type="hidden" name="id" id="estudiante-id">
                  <div class="mb-3">
                      <label for="estudiante-nombres" class="form-label">Nombres <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="estudiante-nombres" name="nombres" required>
                  </div>
                  <div class="mb-3">
                      <label for="estudiante-apellidos" class="form-label">Apellidos <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="estudiante-apellidos" name="apellidos" required>
                  </div>
                  <div class="mb-3">
                    <label for="estudiante-identificacion" class="form-label">Identificacion <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="estudiante-identificacion" name="identificacion" required>
                </div>
                  <div class="mb-3">
                    <label for="descripcion-direccion" class="form-label">Sexo <span class="text-danger">*</span></label>
                    <select class="form-control" name="sexo" id="estudiante-sexo">
                        <option value="Hombre" selected>Hombre </option>
                        <option value="Mujer" selected>Mujer </option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="estudiante-tipo" class="form-label">Tipo de perfil <span class="text-danger">*</span></label>
                    <select class="form-control" name="tipo" id="estudiante-tipo">
                        <option value="Personal Docente/Adminstrativo" selected>Personal Docente/Administrativo </option>
                        <option value="Estudiante" selected>Estudiante </option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="estudiante-fecha_nacimienti" class="form-label">Fecha Nacimiento <span class="text-danger">*</span></label>
                    <input type="date" name="fecha_nac" id="estudiante-fecha_nac" class="form-control">
                  </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
    </form>  
  </div>
</div>