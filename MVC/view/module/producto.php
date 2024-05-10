<?php
    include "view/module/header.php";
?>
<center><h1>PRODUCTO</h1></center> 

<div class="container">
    <h1>Formulario de Registro</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroModal">
      Abrir Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registroModalLabel">Registro de Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
              </div>
              <div class="form-group">
                <label for="precio">Precio Unitario:</label>
                <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio unitario">
              </div>
              <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" id="stock" placeholder="Ingrese el stock">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese la descripción"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Registrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>