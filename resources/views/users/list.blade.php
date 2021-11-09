@extends('layouts.lte')

@section('content')

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Correo</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                <tr>
                    <td>{{ $user-> firstname }}</td>
                    <td>{{ $user-> secondname }}</td>
                    <td>{{ $user-> email }}</td>

                    @Actived($user)
                    <td>
                    <a href="{{ url('/usuarios/activate/' . $user->id) }}" disabled="true" class="btn btn-primary" title="Activar este registro">Activar
                      </a>
                      <a href="{{ url('/usuarios/desactivate/' . $user->id) }}" class="btn btn-primary" title="Desactivar este registro">Desactivar
                      </a>
                    </td>
                    @else
                    <td>
                    <a href="{{ url('/usuarios/activate/' . $user->id) }}" class="btn btn-primary" title="Activar este registro">Activar
                      </a>
                      <a href="{{ url('/usuarios/desactivate/' . $user->id) }}" class="btn btn-primary" disabled="true" title="Desactivar este registro">Desactivar
                      </a>
                    </td>
                    @endActived
                    <td>
                    <a href="/usuarios/{{$user->id}}/edit" class="btn btn-warning" title="Editar este registro">Editar
                      </a>
                    <a href="/usuarios/{{$user->id}}/softdelete" title="Eliminar este registro" class="btn btn-danger">Eliminar
                      </a>
                    <!--<button type="button" class="btn btn-danger" onClick="return ConfirmDelete">Eliminar</button>-->
                    </td>
                    <!--<td>
                    <a href="{{ url('/usuarios/activate/' . $user->id) }}" class="btn btn-primary" title="Activar este registro">Activar
                      </a>
                      <a href="" class="btn btn-primary" disabled="true" title="Desactivar este registro">Desactivar
                      </a>
                    </td>
                    <td>
                      <a href="/usuarios/{{$user->id}}/edit" class="btn btn-primary" title="Editar este registro">Editar
                      </a>
                      <a href="" title="Eliminar este registro" class="btn btn-primary">Eliminar
                      </a>
                    </td>-->
                </tr>
                @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@endsection

<!--<script>
  $(document).ready( function() ){
    $('#datatable'.Datatable();
    $('#datatable').on('click','.deletebtn', function () {
      $tr = $(this).closest('tr');
      var user = $tr.children("td").map(function() {
        return $(this).text();
      }).get();
      $('#delete_user_id').val(user[0]);
      $('#delete_modal_form').attr('action','/usuarios/' + user[0]);
      $('#deletemodalpop').modal('show');
    });
    
  });
</script>-->