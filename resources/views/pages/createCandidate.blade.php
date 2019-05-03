@extends('template')
@section('pageTitle', 'Create User')
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
      {{-- upload profile --}}
     
      <div class="col-sm-4 mt-4">
          <img src="{{url('storage/img/male.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
   <form action="{{route('candidate.store')}}" method="POST"  enctype="multipart/form-data">
          @csrf
                <div class="form-group" >
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="inputFile">
                </div>
  
      </div>
  
      <div class="col-sm-4 mt-4"> 
        <br>
          <input type="text" value="" placeholder="Student Name" class="form-control"  ><br>
          <label for="">Global Grade</label>
          <select name="" id="" class="form-control" selected="true" disabled="disabled">
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
                <select name="province" id="" class="form-control">
                    <option value="">Please select one</option>
                    <option value="">Battambang</option>
                    <option value="">Phnom Penh</option>
                    <option value="">Kandal</option>
                    <option value="">Banteay Meanchey</option>
                </select>
            </div>
            <div class="col-md-3" >
              
              <label for="" name="NGO">NGO:</label>
              <select name="" id="" class="form-control">
                  @foreach ($ngo as $item)
                    <option value="{{$item->name}}" name="ngo">{{$item->name}}</option>
                  @endforeach 
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
        <label for="" name="gender">Gender</label>
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
           <select name="health" id="" class="form-control">
              <option value="">D.No answer</option>
               @foreach ( DB::table('answers')->where('Question_id',4)->get() as $value)
                <option value="">{{$value->label.". ".$value->answer}}</option>
               @endforeach
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
              <option value="">D.No answer</option>
             @foreach ( DB::table('answers')->where('Question_id',5)->get() as $value)
              <option value="">{{$value->label.". ".$value->answer}}</option>
             @endforeach
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
         <option value="">D.No answer</option>
         @foreach ( DB::table('answers')->where('Question_id',3)->get() as $value)
         <option value="">{{$value->label.". ".$value->answer}}</option>
        @endforeach
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
            <option value="">D.No answer</option>
        @foreach ( DB::table('answers')->where('Question_id',1)->get() as $value)
         <option value="">{{$value->label.". ".$value->answer}}</option>
        @endforeach
     </select>
    </div>
    <div class="col-sm-6">
     <textarea name="" id="" cols="25" rows="5" class="form-control" placeholder="Optional Note"></textarea>   
    </div>
    </div>
    
    
    <h5>Parent is commitment:</h5>
    <div class="row">
      <div class="col-sm-6">
        <select name="" id="" class="form-control">
            <option value="">D.No answer</option>
        @foreach ( DB::table('answers')->where('Question_id',2)->get() as $value)
         <option value="">{{$value->label.". ".$value->answer}}</option>
        @endforeach
     </select>
    </div>
    <div class="col-sm-6">
     <textarea name="" id="" cols="25" rows="5" class="form-control" placeholder="Optional Note"></textarea> 
    </div>
  
    </div>
    <br><h5>Summary</h5>
    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br> 
    <button class="btn btn-info float-right"  data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" >Save Information</button><br><br>
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
              {{-- <div class="col-md-12"> --}}
              <div class="panel panel-primary">
                  <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
                     <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                       Parential information
                    </h4>
                    
            
                

                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h4>General inforamation</h4>
                      @for($id=7;$id<=9;++$id)
                      @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                        <h6>{{$value->question}}</h6>
                        <div class="row">
                            <div class="col-sm-6">
                              <select name="health" id="" class="form-control">
                                 <option value="">D.No answer</option>
                                  @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                                   <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                                  @endforeach
                               </select>                 
                            </div>
                            <div class="col-sm-6">
                             <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                            </div>
                        </div>                
                     @endforeach
                  @endfor
         <h4>Parent is Ocucupation</h4>
         @for($id=10;$id<=17;++$id)
         @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
           <h6>{{$value->question}}</h6>
           <div class="row">
               <div class="col-sm-6">
                 <select name="health" id="" class="form-control">
                    <option value="">D.No answer</option>
                     @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                      <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                     @endforeach
                  </select>                 
               </div>
               <div class="col-sm-6">
                <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
               </div>
           </div>                
        @endforeach
     @endfor
     <h4>Miscellaneous</h4>
     @for($id=18;$id<=19;++$id)
     @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
       <h6>{{$value->question}}</h6>
       <div class="row">
           <div class="col-sm-6">
             <select name="health" id="" class="form-control">
                <option value="">D.No answer</option>
                 @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                  <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                 @endforeach
              </select>                 
           </div>
           <div class="col-sm-6">
            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
           </div>
       </div>                
    @endforeach
 @endfor


                  <br><h5>Summary</h5>
                  <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
                  <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" >Save Information</button><br><br>
              
  



                  </div>
              </div>
              </div>
              <div class="panel panel-primary">
                  <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
                     <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                        Farmily Member
                    </h4>
                    
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">
                 <h4>General Information</h4>
                 
                 @for($id=20;$id<=21;++$id)
                 @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                   <h6>{{$value->question}}</h6>
                   <div class="row">
                       <div class="col-sm-6">
                         <select name="health" id="" class="form-control">
                            <option value="0">D.No answer</option>
                             @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                              <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                             @endforeach
                          </select>                 
                       </div>
                       <div class="col-sm-6">
                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                       </div>
                   </div>                
                @endforeach
             @endfor
            <h4>Children Death</h4>
            @for($id=22;$id<=23;++$id)
            @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
              <h6>{{$value->question}}</h6>
              <div class="row">
                  <div class="col-sm-6">
                    <select name="health" id="" class="form-control">
                       <option value="0">D.No answer</option>
                        @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                         <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                        @endforeach
                     </select>                 
                  </div>
                  <div class="col-sm-6">
                   <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                  </div>
              </div>                
           @endforeach
        @endfor
        <br><h5>Summary</h5>
        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
        <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4" >Save Information</button><br><br>
        

          
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
                  <div class="panel-body">
                <h4>Children Ocucupation</h4>
            @for($id=24;$id<=30;++$id)
                @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                  <h6>{{$value->question}}</h6>
                  <div class="row">
                      <div class="col-sm-6">
                        <select name="health" id="" class="form-control">
                           <option value="0">D.No answer</option>
                            @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                             <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                            @endforeach
                         </select>                 
                      </div>
                      <div class="col-sm-6">
                       <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                      </div>
                  </div>                
               @endforeach
            @endfor
          <h4>Educational profile children</h4>    
          @for($id=31;$id<=33;++$id)
          @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
            <h6>{{$value->question}}</h6>
            <div class="row">
                <div class="col-sm-6">
                  <select name="health" id="" class="form-control">
                     <option value="0">D.No answer</option>
                      @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                       <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                      @endforeach
                   </select>                 
                </div>
                <div class="col-sm-6">
                 <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                </div>
            </div>                
         @endforeach
      @endfor
      <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
      <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFive" >Save Information</button><br><br>

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
                  <div class="panel-body">
              <h4>General information</h4>    
              @for($id=35;$id<=38;++$id)
              @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                <h6>{{$value->question}}</h6>
                <div class="row">
                    <div class="col-sm-6">
                      <select name="health" id="" class="form-control">
                         <option value="0">D.No answer</option>
                          @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                           <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                          @endforeach
                       </select>                 
                    </div>
                    <div class="col-sm-6">
                     <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                    </div>
                </div>                
             @endforeach
          @endfor       
              <h4>Sickness and handcap</h4>
              @for($id=39;$id<=42;++$id)
              @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                <h6>{{$value->question}}</h6>
                <div class="row">
                    <div class="col-sm-6">
                      <select name="health" id="" class="form-control">
                         <option value="0">D.No answer</option>
                          @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                           <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                          @endforeach
                       </select>                 
                    </div>
                    <div class="col-sm-6">
                     <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                    </div>
                </div>                
             @endforeach
          @endfor
          <br><h5>Summary</h5>
          <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
          <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseSix" >Save Information</button><br><br>
 
              </div>
              </div>
              {{-- </div> --}}
  
  
  
          </div>
      </div>
    </div>    </div>
    
    {{-- Part3 --}}
    <div class="panel panel-primary">
        <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseSeven">
           <h4 class="panel-title accordion-toggle btn btn-primary text-left  btn-block">
             Household assets, income and expenses
          </h4>
          
      </div>
      <div id="collapseSeven" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
                   <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                     House monthly Income 
                  </h4>
                  
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    @for($id=34;$id<=34;++$id)
                    @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                      <h6>{{$value->question}}</h6>
                      <div class="row">
                          <div class="col-sm-6">
                            <select name="health" id="" class="form-control">
                               <option value="">D.No answer</option>
                                @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                                 <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                                @endforeach
                             </select>                 
                          </div>
                          <div class="col-sm-6">
                           <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                          </div>
                      </div>                
                   @endforeach
                @endfor
                <br><h5>Summary</h5>
                <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
                <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1" >Save Information</button><br><br>
            

                </div>
            </div>

          <div class="panel panel-info">
            <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseK">
               <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
                     Residential and Appliant Assets
              </h4>
              
          </div>
          <div id="collapseK" class="panel-collapse collapse">
            <div class="panel-body">
               <h4>House information</h4>
               @for($id=43;$id<=46;++$id)
               @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                 <h6>{{$value->question}}</h6>
                 <div class="row">
                     <div class="col-sm-6">
                       <select name="health" id="" class="form-control">
                          <option value="">D.No answer</option>
                           @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                            <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                           @endforeach
                        </select>                 
                     </div>
                     <div class="col-sm-6">
                      <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                     </div>
                 </div>                
              @endforeach
           @endfor

           <h4>Animal</h4>  
           @for($id=47;$id<=49;++$id)
           @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
             <h6>{{$value->question}}</h6>
             <div class="row">
                 <div class="col-sm-6">
                   <select name="health" id="" class="form-control">
                      <option value="">D.No answer</option>
                       @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                        <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                       @endforeach
                    </select>                 
                 </div>
                 <div class="col-sm-6">
                  <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                 </div>
             </div>                
          @endforeach
         @endfor    
         
         <br><h5>Summary</h5>
         <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
         <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseK" >Save Information</button><br><br>
         
                   
            </div>
        </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseS">
             <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
              Farmily Self production
            </h4>
            
        </div>
        <div id="collapseS" class="panel-collapse collapse">
          <div class="panel-body">
               <h4>Crop production</h4>
               @for($id=50;$id<=52;++$id)
               @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
                 <h6>{{$value->question}}</h6>
                 <div class="row">
                     <div class="col-sm-6">
                       <select name="health" id="" class="form-control">
                          <option value="">D.No answer</option>
                           @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                            <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                           @endforeach
                        </select>                 
                     </div>
                     <div class="col-sm-6">
                      <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
                     </div>
                 </div>                
              @endforeach
           @endfor

  <h4>Animal</h4>  
  @for($id=53;$id<=56;++$id)
  @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
    <h6>{{$value->question}}</h6>
    <div class="row">
        <div class="col-sm-6">
          <select name="health" id="" class="form-control">
             <option value="">D.No answer</option>
              @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
               <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
              @endforeach
           </select>                 
        </div>
        <div class="col-sm-6">
         <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
        </div>
    </div>                
 @endforeach
@endfor    

<br><h5>Summary</h5>
<textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
<button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseS" >Save Information</button><br><br>


            
          </div>
      </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseC">
           <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
             Dept
          </h4>
          
      </div>
      <div id="collapseC" class="panel-collapse collapse">
        <div class="panel-body">

    @for($id=58;$id<=59;++$id)
    @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
      <h6>{{$value->question}}</h6>
      <div class="row">
          <div class="col-sm-6">
            <select name="health" id="" class="form-control">
               <option value="">D.No answer</option>
                @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                 <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                @endforeach
             </select>                 
          </div>
          <div class="col-sm-6">
           <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
          </div>
      </div>    
 
   @endforeach
@endfor
<br>
<h5>Summary</h5>
<textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
<button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseC" >Save Information</button><br><br>
    </div>
    </div>
    </div>
<div class="panel panel-info">
  <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseD">
     <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
           Household montly expene
    </h4>
    
</div>
<div id="collapseD" class="panel-collapse collapse">
  <div class="panel-body">
    <h3>Living expenses</h3>
    <br>
    @for($id=60;$id<=64;++$id)
    @foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
      <h6>{{$value->question}}</h6>
      <div class="row">
          <div class="col-sm-6">
            <select name="health" id="" class="form-control">
               <option value="">D.No answer</option>
                @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
                 <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                @endforeach
             </select>                 
          </div>
          <div class="col-sm-6">
           <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
          </div>
      </div>    
 
   @endforeach
@endfor
<h3>Extra expenses</h3>
<br>
@for($id=65;$id<=71;++$id)
@foreach (  $question=DB::table('questions')->where('id',$id)->get() as $value)         
  <h6>{{$value->question}}</h6>
  <div class="row">
      <div class="col-sm-6">
        <select name="health" id="" class="form-control">
           <option value="">D.No answer</option>
            @foreach ( DB::table('answers')->where('Question_id',$id)->get() as $value)
             <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
            @endforeach
         </select>                 
      </div>
      <div class="col-sm-6">
       <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
      </div>
  </div>    

@endforeach
@endfor
<br>
<h5>Summary</h5>
<textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>

<button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseD" >Save Information</button><br><br>

  </div>
</div>
</div>

<div class="panel panel-info">
    <div class="panel-heading " data-toggle="collapse" data-parent="#accordion" data-target="#collapseT">
       <h4 class="panel-title accordion-toggle btn btn-info text-left  btn-block">
         Holding proverty Card
      </h4>
      
  </div>
  <div id="collapseT" class="panel-collapse collapse">
    <div class="panel-body">

        @foreach (  $question=DB::table('questions')->where('id',72)->get() as $value)         
        <h6>{{$value->question}}</h6>
        <div class="row">
            <div class="col-sm-6">
              <select name="health" id="" class="form-control">
                 <option value="">D.No answer</option>
                  @foreach ( DB::table('answers')->where('Question_id',72)->get() as $value)
                   <option value="$value->id">{{$value->label.". ".$value->answer}}</option>
                  @endforeach
               </select>                 
            </div>
            <div class="col-sm-6">
             <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Optional Note"></textarea>
            </div>
        </div>    
      
      @endforeach
      <br>
      <h5>Summary</h5>
      <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Please Comment"></textarea> <br>
      
      <button class="btn btn-info float-right" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseT" >Save Information</button><br><br>
      
      



    </div>
</div>
</div>






    </div>    
    </div>
    </div>
   
    </div>
    <br><br>
    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Please Comment"></textarea> <br>
    <button type="submit" class="btn btn-info float-right">Save Information</button>
  </form>
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
                  @foreach ($ngo as $item)
                  <tr>
                    <td > <a href="" class="text-danger"> <i class="material-icons">delete</i></a> </td>
                    <td>{{$item->name}}</td>                 
                  </tr>
                  @endforeach
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
  
  
  




