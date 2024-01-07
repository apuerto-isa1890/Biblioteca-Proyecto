@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Adminstracion de categorias<div>
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#crearCategoria"> Agregar</button>
                        <button type="button" class="btn btn-warning m-2">Editar</button>
                        <button type="button" class="btn btn-danger  m-2">Anular/Activar</button>

                    </div>
                </div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="crearCategoria" tabindex="-1" aria-labelledby="crearCategoriaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="crearCategoriaLabel">
            Nueva categoria.
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
        @endsection

        @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
        @endpush