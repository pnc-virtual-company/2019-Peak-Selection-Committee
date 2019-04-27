@extends('template')

@section('pageTitle', 'List Candidate')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-7">
            <h1 class="text-center">List of Candidates</h1>
            <br>
            <div class="float-right">

                <a href="{{url('infoCan')}}"><button class="btn btn-primary btn-sm ml-2">All Candidates</button></a>
                <button class="btn btn-success btn-sm">Selected Candidates</button>
            </div>
            <br><br>

            {{-- table of candidate --}}
            <table id="listCandidates" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
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
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
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

            <a href="{{url('createCandidate')}}"> <button class="btn btn-primary btn-sm">Add candidate</button></a>
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
                    <canvas id="candidates"></canvas>
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

@endsection