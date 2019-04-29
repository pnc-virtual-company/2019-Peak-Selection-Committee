
    <script src="{{asset('js/app.js')}}"></script>

       {{-- hany --}}
       
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    {{-- pie chart --}}
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>


    <script>
    // ============== pie chart ==============

        // === all candidates ===
        var ctxP = document.getElementById("candidates").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["A+", "A", "A-", "B+", "B","B-","Failed"],
                datasets: [{
                data: [30, 50, 100, 40, 120,49,230],
                backgroundColor: ["#00c853", "#c6ff00", "#eeff41", "#fdd835", "#f9a825","#e65100", "#d50000"],
                hoverBackgroundColor:  ["#00c853", "#c6ff00", "#eeff41", "#fdd835", "#f9a825","#e65100", "#d50000"]
                }]
            },
            options: {
                responsive: true
            }
        });
        // =========== all candidates =========

        // ========== gender ========
        var ctxP = document.getElementById("gender").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["F", "M"],
                datasets: [{
                data: [300, 50],
                backgroundColor: ["#64dd17", "#01579b"],
                hoverBackgroundColor: ["#64dd17", "#01579b"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end gender ==========

        // ========== ngo ========
        var ctxP = document.getElementById("ngo").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Yes", "No"],
                datasets: [{
                data: [40, 120],
                backgroundColor: ["#00e676", "#d50000"],
                hoverBackgroundColor: ["#00e676", "#d50000"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end ngo ==========

        // ========== age ========
        var ctxP = document.getElementById("age").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Age"],
                datasets: [{
                data: [100, 50],
                backgroundColor:  ["#FDB45C", "#949FB1"],
                hoverBackgroundColor: ["#FFC870", "#A8B3C5"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end age ==========

        // ========== province ========
        var ctxP = document.getElementById("province").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Phnom Penh", "Prey Veng", "Ratanakiri", "Battambong"],
                datasets: [{
                data: [200, 90, 100, 90],
                backgroundColor: ["#009688", "#6d4c41", "#b0bec5", "#ffab91"],
                hoverBackgroundColor: ["#009688", "#6d4c41", "#b0bec5", "#ffab91"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end province ==========

    // =========== end pie chart ============

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

