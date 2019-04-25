@extends('template')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<div class="content">
    <div class="row">
        <div class="col-md-7">
            <h1 class="text-center">List of Candidates</h1>
            <br>
            <div class="float-right">
                <button class="btn btn-primary btn-sm ml-2">All Candidates</button>
                <button class="btn btn-success btn-sm">Selected Candidates</button>
            </div>
            <br><br>

            <table id="listCandidates" class="table table-striped table-bordered mt-2" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <a href="{{url('/infoCan')}}">
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </a>
                    </tr>
                    <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                    </tr>
                    <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                    </tr>
                    <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                    </tr>
                    <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
             <button class="btn btn-primary btn-sm">Add candidate</button>
        </div>
        <div class="col-md-5">
            <h3 class="text-center mt-4">Among all candidates</h3>
           <div id="Sarah_chart" style="border:none; background:none;"></div>
           
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
            
                  // Load Charts and the corechart package.
                  google.charts.load('current', {'packages':['corechart']});
            
                  // Draw the pie chart for Sarah's pizza when Charts is loaded.
                  google.charts.setOnLoadCallback(drawSarahChart);
            
                  // Draw the pie chart for the Anthony's pizza when Charts is loaded.
                  google.charts.setOnLoadCallback(drawAnthonyChart);
            
                  // Callback that draws the pie chart for Sarah's pizza.
                  function drawSarahChart() {
            
                    // Create the data table for Sarah's pizza.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        ['A+', 2],
                        ['A', 2],
                        ['A-', 2],
                        ['B+', 0],
                        ['B', 3],
                        ['B-', 3],
                        ['Failed', 7],
                    ]);
            
                    // Set options for Sarah's pie chart.
                    var options = {title:'Grade distribution',
                                   width:400,
                                   height:300};
            
                    // Instantiate and draw the chart for Sarah's pizza.
                    var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart'));
                    chart.draw(data, options);
                  
                  }
                </script>
                <div class="row">
                    <h5 class="ml-5">Among selected candidates only</h5>
                        <table class="columns">
                                <tr>
                                  <td><div id="Sarah_chart_div" style="border: none"></div></td>
                                  <td><div id="Anthony_chart_div" style="border: none"></div></td>
                                </tr>
                              </table>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                    
                          // Load Charts and the corechart package.
                          google.charts.load('current', {'packages':['corechart']});
                    
                          // Draw the pie chart for Sarah's pizza when Charts is loaded.
                          google.charts.setOnLoadCallback(drawSarahChart);
                    
                          // Draw the pie chart for the Anthony's pizza when Charts is loaded.
                          google.charts.setOnLoadCallback(drawAnthonyChart);
                    
                          // Callback that draws the pie chart for Sarah's pizza.
                          function drawSarahChart() {
                    
                            // Create the data table for Sarah's pizza.
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Topping');
                            data.addColumn('number', 'Slices');
                            data.addRows([
                              ['M', 10],
                              ['F', 10],
                             
                            ]);
                    
                            // Set options for Sarah's pie chart.
                            var options = {title:'Gender',
                                           width:300,
                                           height:200};
                    
                            // Instantiate and draw the chart for Sarah's pizza.
                            var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
                            chart.draw(data, options);
                          }
                    
                          // Callback that draws the pie chart for Anthony's pizza.
                          function drawAnthonyChart() {
                    
                            // Create the data table for Anthony's pizza.
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Topping');
                            data.addColumn('number', 'Slices');
                            data.addRows([
                                ['Yes', 10],
                                ['No', 20],
                                
                            ]);
                    
                            // Set options for Anthony's pie chart.
                            var options = {title:'NGO Provenance',
                            width:300,
                            height:200};
                    
                            // Instantiate and draw the chart for Anthony's pizza.
                            var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
                            chart.draw(data, options);
                          }
                        </script>
                </div>
                <div class="row">
                        <table class="columns">
                                <tr>
                                  <td><div id="Sarah" style="border: none"></div></td>
                                  <td><div id="Anthony" style="border: none"></div></td>
                                </tr>
                              </table>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                    
                          // Load Charts and the corechart package.
                          google.charts.load('current', {'packages':['corechart']});
                    
                          // Draw the pie chart for Sarah's pizza when Charts is loaded.
                          google.charts.setOnLoadCallback(drawSarahChart);
                    
                          // Draw the pie chart for the Anthony's pizza when Charts is loaded.
                          google.charts.setOnLoadCallback(drawAnthonyChart);
                    
                          // Callback that draws the pie chart for Sarah's pizza.
                          function drawSarahChart() {
                    
                            // Create the data table for Sarah's pizza.
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Topping');
                            data.addColumn('number', 'Slices');
                            data.addRows([
                              ['Age', 1],
                             
                            ]);
                    
                            // Set options for Sarah's pie chart.
                            var options = {title:'Age',
                            width:300,
                            height:200};
                    
                            // Instantiate and draw the chart for Sarah's pizza.
                            var chart = new google.visualization.PieChart(document.getElementById('Sarah'));
                            chart.draw(data, options);
                          }
                    
                          // Callback that draws the pie chart for Anthony's pizza.
                          function drawAnthonyChart() {
                    
                            // Create the data table for Anthony's pizza.
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Topping');
                            data.addColumn('number', 'Slices');
                            data.addRows([
                              ['Phnom Penh', 2],
                              ['Takeo', 2],
                              ['Battombong', 2],
                              ['Prey Veng', 0],
            
                            ]);
                    
                            // Set options for Anthony's pie chart.
                            var options = {title:'Province',
                            width:300,
                            height:200};
                    
                            // Instantiate and draw the chart for Anthony's pizza.
                            var chart = new google.visualization.PieChart(document.getElementById('Anthony'));
                            chart.draw(data, options);
                          }
                        </script>
                </div>
        </div>
                
		</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#listCandidates').DataTable();
    } );
</script>

@endsection