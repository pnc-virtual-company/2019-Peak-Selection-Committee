
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#delete').on('show.bs.modal', function (event) { 
            var button = $(event.relatedTarget);
            var id = button.data('id');  //get Id from button
            var modal = $(this);
            var url="{{url('users')}}/"+id;
            console.log(url);
            $('#fid').attr('action',url); //get Id form
        })
    </script>

       {{-- hany --}}
       
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>



    <script>
        
    // ========== datatable ===============
        $(document).ready(function() {
            $('#example').DataTable( {
                colReorder: true
            } );

            $('#listCandidates').DataTable( {
                colReorder: true
            } );

        } );
    </script>

    </body>
</html>

