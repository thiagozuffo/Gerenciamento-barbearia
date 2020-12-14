@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
    <script>
        function ConfirmaExclusao(id) {
            swal.fire({
                title: 'Confirma a exclusão?', text: "Esta ação não poderá ser revertida!",
                type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33', confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar!', closeOnConfirm: false, 
            }).then(function(isConfirm) {
                if (isConfirm.value) {
           		 	$.get('/'+ @yield('table-delete') +'/'+id+'/destroy', function(data){
                  console.log(data);
                  if (data.status == 200){
                      swal.fire(
                          'Deletado!',
                          'Exclusao confirmada.',
                          'success'
                      ).then(function(isConfirm){
                          window.location.reload();
                      })
                  }else
                  swal.fire(
                      'erro',
                      'ocorreram erros na exclusao',
                      'error'
                  )


                    });
                }
            })
        }
    </script>
@stop

