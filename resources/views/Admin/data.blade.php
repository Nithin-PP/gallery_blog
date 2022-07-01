@extends('Admin.Layouts.layout')
 @section('content')
<div class="content-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="notification_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>sl/no</th>
                    <th>title</th>
                    <th>detail</th>
                    <th>description</th>
                    <th>image</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
                  {{-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> --}}
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
@endsection

<script>
    $(document).ready(function() {
    var dataTable = $('#notification_table').dataTable({
        "processing": true,
        "ServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        "lengthMenu": [
            [50, 100, 1000, 2000],
            [50, 100, 1000, 2000],
        ],
        "ajax": {
            url: 'viewStatus',
            dataType: 'json',
            type: 'POST',
            data: function(d) {
                d._token = $('meta[name="csrf-token"]').attr('content');

            },

        },
        buttons: [
            'colvis',
            { extend: 'copyHtml5', footer: true, exportOptions: { columns: ':visible' } },
            { extend: 'excelHtml5', footer: true, exportOptions: { columns: ':visible' } },
            { extend: 'pdfHtml5', footer: true, exportOptions: { columns: ':visible' } },
        ],
        "columns": [
            { "data": "key", 'visible': true },
            { "data": "type" },
            { "data": "content" },
            { "data": "time" },
            { "data": "action" },
    

        ],

    });
});
</script>


