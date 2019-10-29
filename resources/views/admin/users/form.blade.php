{!! Form::open(['url' => $url, 'method' => $method]) !!}
  
  <div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
    <div class="col-lg-6">
      {!! Form::text('name', $user->name, ['class' => 'form-control form-control-sm', 'required']) !!}
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Email</label>
    <div class="col-lg-6">
      {!! Form::email('email', $user->email, ['class' => 'form-control form-control-sm', 'required']) !!}
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
    <div class="col-lg-6">
      {!! Form::password('password', ['class' => 'form-control form-control-sm']) !!}
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label form-control-label">Rol</label>
    <div class="col-lg-6">
      {!! Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control form-control-sm', 'id' => 'role_id', 'required']) !!}
    </div>
  </div>
  <div class="form-group text-center">
    <a href="{{url('/admin/users')}}" class="btn btn-secondary form-control-sm"> Atras</a>
    <input type="submit" value="Guardar" class="btn btn-primary form-control-sm">
  </div>

{!! Form::close() !!}