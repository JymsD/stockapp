@extends('layouts.dashboard')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-gray-900">Usuarios</h6>
      <div class="dropdown no-arrow">
        <a href="#" class="btn btn-secondary btn-circle btn-sm" title="Nuevo">
          <i class="fas fa-plus"></i>
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Email</th>
              <th>Rol</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role_id }}</td>
              <td>
                <a href="#" class="btn btn-warning btn-circle btn-sm" title="Editar">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection