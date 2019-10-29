@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="mx-auto col-sm-10">
    <!-- form user info -->
    <div class="card">
      <div class="card-header">
        <h4 class="mb-0">Actualizar Usuario</h4>
      </div>
      <div class="card-body">
        <!-- Formulario-->
        @include('admin.users.form',['user' => $user, 'url' => '/admin/users/'.$user->id, 'method' => 'PUT'])
      </div>
    </div>
    <!-- /form user info -->
  </div>
</div>
@endsection