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
        <!-- Formulario-->
        @include('admin.roles.form',['role' => $role, 'url' => '/admin/roles', 'method' => 'POST'])
      </div>
    </div>
    <!-- /form user info -->
  </div>
</div>
@endsection