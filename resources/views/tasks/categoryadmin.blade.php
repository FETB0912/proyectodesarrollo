@extends('base.base')

@section('title')
Lista de acciones
@endsection

@section('content')
<div class="d-flex justify-content-center pt-5">
<form method="POST" enctype="multipart/form-data">
    @csrf 
  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <input  value="{{ @old('name') }}" name="name" type="text" class="form-control">
    @error('name')
      <div class="form-text">{{ $message }}</div>
    @enderror
    
  </div>

  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <textarea name="description" cols="2" class="form-control">{{ @old('description') }}</textarea>
    @error('description')
      <div class="form-text">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="featured"  class="form-label">Imagen</label>
    <input name="featured" type="file" class="form-control">
    @error('image')
      <div class="form-text">{{ $message }}</div>
    @enderror
  </div>

  <!-- <div class="mb-3">
    <label  class="form-label">Fecha</label>
    <input name="date" type="date" class="form-control">
  </div> -->

  <div class="d-grid">
    <button type="submit" class="btn btn-primary">Agregar</button>
  </div>
</form>
</div>
@endsection