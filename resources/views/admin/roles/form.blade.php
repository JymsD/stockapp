{!! Form::open(['url' => $url, 'method' => $method]) !!}
  
  <div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
    <div class="col-lg-6">
      {!! Form::text('name', $role->name, ['class' => 'form-control form-control-sm']) !!}
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Descripcion</label>
    <div class="col-lg-6">
      {!! Form::text('description', $role->description, ['class' => 'form-control form-control-sm']) !!}
    </div>
  </div>
  <div class="form-group text-center">
    <a href="{{url('/admin/roles')}}" class="btn btn-secondary form-control-sm"> Atras</a>
    <input type="submit" value="Guardar" class="btn btn-primary form-control-sm">
  </div>

{!! Form::close() !!}