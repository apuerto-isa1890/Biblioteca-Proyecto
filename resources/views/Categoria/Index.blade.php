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
      @include('Categoria.form')
</div>
        @endsection
        @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
        @endpush

        <script>
            
    function rellanarActive() {
        let el = document.getElementById('administrar categoria');
        el.classList.add('active');
    }
    document.addEventListener('DOMContentLoaded', rellanarActive);
        </script>