@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="mx-auto col-sm-10">
    <!-- form user info -->
    <div class="card">
      <div class="card-header">
        <h4 class="mb-0">Nuevo Rol</h4>
      </div>
      <div class="card-body">
        <form class="form" role="form" autocomplete="off" method="POST" action="">
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
            <div class="col-lg-6">
              <input name="name" id="name" class="form-control form-control-sm" type="text" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Descripcion</label>
            <div class="col-lg-6">
              <input name="description" id="description" class="form-control form-control-sm" type="text" required>
            </div>
          </div>
          <!--<div class="form-check">
            <label class="form-check-label">Estado</label>
            <input name="status" id="status" class="form-check-input" type="checkbox">
          </div>-->
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label"></label>
            <div class="col-lg-6">
              <input type="reset" class="btn btn-secondary form-control-sm" value="Cancelar">
              <button type="submit" class="btn btn-primary form-control-sm">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /form user info -->
  </div>
</div>
@endsection