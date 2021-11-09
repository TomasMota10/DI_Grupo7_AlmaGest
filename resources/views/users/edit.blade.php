@extends('layouts.lte')

@section('content')
<div class="centrar-form card-body">
          <!-- Horizontal Form -->
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

          @include('partials.errors')

          <form action="/usuarios/{{$user->id}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
            @csrf @method('put')
              <div class="box-body">

              <div class="form-group">
                  <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10">
                    <input type="text" id="firstname" value="{{ $user-> firstname }}" placeholder="Nombre" class="form-control" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                    
                  </div>
                </div>

              <div class="form-group">
                  <label for="inputApellidos" class="col-sm-2 control-label">Apellidos</label>

                  <div class="col-sm-10">
                    <input type="text" id="secondname" value="{{ $user-> secondname }}" placeholder="Apellidos" class="form-control" name="secondname" value="{{ old('secondname') }}" required autocomplete="secondname" autofocus>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputCompany" class="col-sm-2 control-label">Compañía</label>

                  <div class="col-sm-10">
                    <input type="number" value="{{ $user-> company_id }}" placeholder="Compañía" class="form-control" name="company_id" required autocomplete="company_id">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" id="email" value="{{ $user-> email }}" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Contraseña</label>

                  <div class="col-sm-10">
                    <input type="password" placeholder="Contraseña" class="form-control" name="password" required autocomplete="new-password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">Confirmación</label>

                  <div class="col-sm-10">
                  <input id="password-confirm" placeholder="Confirmación" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-block btn-primary">Actualizar</button>
                <div class="checkbox">

          </div>
        </div>
      </form>
  </div>
</div>
@endsection