    
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

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

            $(document).ready(function() {
                $('#ngo').DataTable();
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
        });

    </script>

    </body>
</html>

