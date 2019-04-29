
@extends('template')

@section('pageTitle', 'Create Candidate')

@section('content')
    

<style>
  @import url('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
  .panel-heading {
     cursor: pointer;
  }
  /* CSS Method for adding Font Awesome Chevron Icons */
  .accordion-toggle:after {
     /* symbol for "opening" panels */
     font-family:'FontAwesome';
     content:"\f077";
     float: right;
     color: inherit;
  }
  .panel-heading.collapsed .accordion-toggle:after {
     /* symbol for "collapsed" panels */
     content:"\f078";
  }
  
  </style>
  
  <div class="container mt-4 ">
  
  <div class="row">
    <div class="col-sm-4 mt-4">
    <img src="{{url('storage/male.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
    <input type="file" value="">
    </div>
    <div class="col-sm-4 mt-4">
      <br>
        <input type="text" value="" placeholder="Student Name" class="form-control"  ><br>
        <label for="">Global Grade</label>
        <select name="" id="" class="form-control">
                <option value="">Choose Grade</option>
                <option value="">A+</option>
                <option value="">A</option>
                <option value="">A-</option>
                <option value="">B+</option>
                <option value="">B</option>
                <option value="">B-</option>
        </select><br>
        <input type="checkbox"><label for="">Information is filled by PNC employee</label>
    </div>
  </div>
  <br>
  <h5>Instructions on how to fill out the form: </h5>
  <ul>
    <li> All answers are by default on "D. No answer". If the question is not relevant, or you do  not  have the answer, do not change it</li>
    <li>Otherwise, you can choose the answer closer to the reality. If more than 1 answer is correct, take the strongest (example: several sickness in a family).</li>
     <li> In the optionnal notes, please fill in the most information possible (the exact number when the answer is a range, or anything else relevant / interesting).</li>
  </ul>
  
  
  {{-- Part1 --}}
  
  <div class="panel-group mt-4 " id="accordion">
      <div class="panel panel-primary ">
          <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
             <h3 class="panel-title accordion-toggle btn btn-primary text-left  btn-block" >
                 Student Information
             </h3>
         </div>
         <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body  ">
           <h4 class="">General Information</h4><br>
           <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                <label for="">Province:</label>
                <select name="" id="" class="form-control">
                  <option value="">Please select one</option>
                  <option value="">Battambang</option>
                  <option value="">Phnom Penh</option>
                  <option value="">Kandal</option>
                  <option value="">Banteay Meanchey</option>
              </select>
          </div>
          <div class="col-md-3" >
            
            <label for="" >NGO:</label>
            <select name="" id="" class="form-control">
              <option value="">None</option>
              <option value="">PSE</option>
              <option value="">Enfant dasia</option>
              <option value="">EDM</option>
          </select>
        </div>
        <div class="col-md-1"> 
            <a href="" class="text-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons">edit</i> </a>
           
           </div>
     
      
      
  </div>
  <br>
  <div class="row">
      <div class="col-sm-3"></div>
    <div class="col-sm-2">
      <label for="">Gender</label>
      <select name="" id="" class="input-group-sm form-control"  style="width:70px">
          <option value="">M</option>
          <option value="">F</option>
      </select>
  </div>
  <div class="col-sm-2">
      <label for="">Age</label>
      <input type="number" class="input-group-sm form-control " style="width:65px">
  </div>
  <div class="col-sm-4">
      <label for="">Years of selection</label>
       <input type="number" class="input-group-sm  form-control"  style="width:65px">
  </div>
  
  </div>
  <h5>Health Status</h5>
   <div class="row">
       <div class="col-sm-6">
         <select name="" id="" class="form-control">
            <option value="">Please select one</option>
             <option value="">A. Very bad GPA and rank and lowest rank in high school</option>
             <option value="">B. Average GPA and rank around middle of the class</option>
             <option value="">C. Very good GPA and is able to cath up all the lessions </option>
             <option value="">D. No answer</option>
         </select>
       </div>
       <div class="col-sm-6">
        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
  
       </div>
   </div>
   <h5>Rank in class</h5>
   <div class="row">
       <div class="col-sm-6">
         <select name="" id="" class="form-control">
             <option value="">Please select one</option>
             <option value="">A. Very bad GPA and lowest rank in high school</option>
             <option value="">B. Average GPA and rank around middle of the class</option>
             <option value="">C. Very good GPA and is able to cath up all the lessions </option>
             <option value="">D. No answer</option>
         </select>
       </div>
       <div class="col-sm-6">
        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
      </div>
  
  
  
  </div>
  <h5>Motivation</h5> <br>
  
  <div class="row">
      <div class="col-sm-3">
          <label for="">Motivation for PNC:</label><input type="number" class="form-control" style="width:100px;"><br>
      </div>
      <div class="col-sm-3">
          <label for="">Communication :</label><input type="number" class="form-control" style="width:100px;">
      </div>
      <div class="col-sm-3">
          <label for="">Responsibility and maturty :</label><input type="number" class="form-control" style="width:100px;">
      </div>
      </div>
  
  
      <h5>PNC choice Rank:</h5>
  <div class="row">
    <div class="col-sm-6">
      <select name="" id="" class="form-control">
       <option value="">Please select one</option>
       <option value="">A. PNC is candidate's optional</option>
       <option value="">B. PNC candidate's sescond choice </option>
       <option value="">C. PNC is candidate's first choice </option>
       <option value="">D. No answer</option>
   </select>
  </div>
  <div class="col-sm-6">
   <textarea name="" id="" cols="25" rows="5" class="form-control" placeholder="Optional Note"></textarea>
   
  </div>
  </div>
  
  
  <h5>Other scholarship:</h5>
  <div class="row">
    <div class="col-sm-6">
      <select name="" id="" class="form-control">
       <option value="">Please select one</option>
       <option value="">A. Applied for others scholarship more than 3 places</option>
       <option value="">B. Applied for others scholarship more than 2 places</option>
       <option value="">C. Applied for others scholarship more than 1 place </option>
       <option value="">D. No answer</option>
   </select>
  </div>
  <div class="col-sm-6">
   <textarea name="" id="" cols="25" rows="5" class="form-control" placeholder="Optional Note"></textarea>
   
  </div>
  </div>
  
  
  <h5>Parents' commitment:</h5>
  <div class="row">
    <div class="col-sm-6">
      <select name="" id="" class="form-control">
       <option value="">Please select one</option>
       <option value="">A. Parents will assist the candidate to continue the studies at university</option>
       <option value="">B. Parents will hesitate to assist the candidate to continue the studies at university</option>
       <option value="">C. Parents have no possibilities to assist the candidate to continue the studies at university </option>
       <option value="">D. No answer</option>
   </select>
  </div>
  <div class="col-sm-6">
   <textarea name="" id="" cols="25" rows="5" class="form-control" placeholder="Optional Note"></textarea>
   
  </div>

  </div>
  <br>
  <button class="btn btn-info float-right" >Save Information</button><br><br>
  
  </div>
  </div>
  
  </div>
  
  {{-- Part2 --}}
  
    <div class="panel panel-primary">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
           <h4 class="panel-title accordion-toggle  btn btn-primary text-left  btn-block">
           Farmily Information
          </h4>
          
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">

            <div class="panel panel-primary">
                <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
                   <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                     Parental information
                  </h4>
                  
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                     on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, 
                     craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
                     Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of
                      them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
                   <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                      Family members
                  </h4>
                  
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                     on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, 
                     craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
                     Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of
                      them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseFive">
                   <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                      children information
                  </h4>
                  
              </div>
              <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                     on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, 
                     craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
                     Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of
                      them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseSix">
                   <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                     Heaelth condition
                  </h4>
                  
              </div>
              <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                     on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, 
                     craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
                     Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of
                      them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>



        </div>
    </div>
  </div>
  
  {{-- Part3 --}}
  <div class="panel panel-primary">
      <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseSeven">
         <h4 class="panel-title accordion-toggle btn btn-primary text-left  btn-block">
           Household assets, income and expenses
        </h4>
        
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
          terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
          Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
           on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, 
           craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
           Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of
            them accusamus labore sustainable VHS.
      </div>
  </div>
  </div>



  
  </div>
  
  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Please Comment"></textarea> <br>
  <button class="btn btn-info float-right">Save Information</button>
  <br><br>

  </div>
</div>

  @endsection




    {{-- modal --}}

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Edit othe list of NGO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Position</th>
               
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td > <a href="" class="text-danger"> <i class="material-icons">delete</i></a> </td>
                  <td>Battambang</td>                 
                </tr>
                <tr>
                  <td > <a href="" class="text-danger"> <i class="material-icons">delete</i></a> </td>
                  <td>Prey Veng</td>                 
                </tr>
                <tr>
                  <td > <a href="" class="text-danger"> <i class="material-icons">delete</i></a> </td>
                    <td>Svay Reang</td>                 
                </tr>
               
            </tbody> 
          </table>   
          <button class="btn btn-primary">Add NGO</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );

</script>


