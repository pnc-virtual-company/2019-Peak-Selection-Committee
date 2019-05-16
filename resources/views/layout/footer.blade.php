    
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#delete').on('show.bs.modal', function (event) { 
            var button = $(event.relatedTarget);
            var id = button.data('id');  //get Id from button
            var modal = $(this);
            var url="{{url('users')}}/"+id;
            console.log(url);
            $('#fid').attr('action',url); //get Id form
        });
        $('#deleteNGO').on('show.bs.modal', function (event) { 
            var button = $(event.relatedTarget);
            var id = button.data('id');  //get Id from button
            var modal = $(this);
            var url="{{url('ngo')}}/"+id;
            console.log(url);
            $('#fid').attr('action',url); //get Id form
        })
    </script>

     <!-- line hany  export file listUser  and line responsive table-->
     <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js"></script> -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    
     <script>
    //======hany script export file====

    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                text: '<button class="btn btn-primary"><i class="material-icons left">import_export</i> Export List</button>', 
            },
        ]
    });
    
    });
    
    </script>
  
    <script>
        
    // ========== datatable ===============
        $(document).ready(function() {
            $('#listCandidates').DataTable( {
                colReorder: true
            });

            // $('#example').DataTable( {
            //     colReorder: true
            // });

            $('#ngo').DataTable( {
                colReorder: true
            });

        } );

        // =====================table ngo========================
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td></td>' +
                '<td><input type="text" class="form-control" name="name" placeholder="Name NGO"/></td>' +
                '</tr>';
            $("table").append(row);		
        });
 
    </script>
    </body>
</html>

