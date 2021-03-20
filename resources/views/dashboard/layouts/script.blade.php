<script type="text/javascript" src="{{ asset('dashboard/scripts/main.js') }}"></script>
{{-- <script src="{{asset('dashboard/jquery/jquery.min.js') }}"></script> --}}
<script src="{{asset('dashboard/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/jszip/jszip.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{asset('dashboard/datatable/datatables-buttons/js/buttons.print.min.js') }}"></script>

<script src="{{asset('dashboard/datatable/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="{{asset('plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });


    $(function () {

        $('#product_main_category_selected').select2();
        $('#product_main_category_selected').select2({
            placeholder: 'Select Main Category',
          });

          $('#product_sub_category_selected').select2();
        $('#product_sub_category_selected').select2({
            placeholder: 'Select Sub Category',
          });

          $('#product_main_category_selected').on('change', function () {
              let id = $(this).val();
              $('#product_sub_category_selected').empty();
              $.ajax({
                  type: 'GET',
                  url: 'getSubFromMainCategory/'+id,
                  success: function (response) {
                      var responses = JSON.parse(response);
                      $('#product_sub_category_selected').empty();
                      responses.forEach(element => {
                          $('#product_sub_category_selected').append(`<option value="${element['id']}">${element['name']}</option>`);
                      });
                  }
              });
          });
  </script>

</body>
</html>
