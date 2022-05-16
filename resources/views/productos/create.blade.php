@extends('layouts.principal')

@section('contenido')

    <form class="col s8">
      <div class="row">
        <div class="col s8">
          <h1 class="nav-wrapper purple darken-3">Nuevo producto</h1>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre del Producto" id="nombre" type="text" class="validate">
          <label for="nombre">Nombre producto</label>
        </div>
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Descripcion del Producto" id="desc" type="text" class="validate">
          <label for="desc">Descripcion del producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number" class="validate">
          <label for="precio">Precio del producto</label>
        </div>
      </div>
      <div class="row">
        <div class="col s8 input-field">
          <select name="marca" id="marca">
            <option>
              Elija la marca de su producto
            </option>
            @foreach($marcas as $marca)
            <option>{{ $marca->nombre }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field">
      <div class="btn">
          <span>Ingrese imagen..</span>
          <input type="file">
      </div>
      <div class="row">
      <div class="input-field col s12">
      <a class="waves-effect waves-light btn">Guardar</a>
      </div>
        </div>
      </div>
    </form>

@endsection
        