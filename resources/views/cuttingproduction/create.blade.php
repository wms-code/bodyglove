@extends('layouts.admin')
@push('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" /> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
@endpush

@section('pagetitle','Cutting Program ')
 <style>
   .stock .select2-results__option {
  padding: 0px 4px;
}
</style>
@section('content')               
  <div class="row">
            <div class="col-md-12 col-md-offset-2 ">
                <div class="card card-outline-info">
                   
                    <div class="card-body">
                        <form action="{{ url('admin/cuttingproduction') }}" method="post" class="form-horizontal form-bordered">
                            <div class="form-body">
                            <br>
                            @csrf
                            @method('post')
                            <div  style="margin-left: 0px;" class="form-group row">
                                <label class="control-label text-left col-md-2"> Program No:.</label>
                                  <div class="col-md-3">
                                        <input type="text" name="production_number" 
                                        value ={{ $rsdepartmentData['production_number'] }}
                                        readonly class="form-control">
                                      
                                        <input type="text" name="productionnumber" 
                                        value ={{ $rsdepartmentData['productionnumber'] }}
                                        readonly  class="form-control">
                                  </div>
                                  <label class="control-label text-left col-md-2">Program Date:.</label>
                                   <div class="col-md-2">
                                      <input type="date" 
                                      value = "{{ date('Y-m-d')}}"
                                      name="program_date" maxlength="12" class="form-control">
                                    </div>
                            </div>
                            
                            <div style="margin-left: 0px;" class="form-group row">
                                <label class="control-label text-left col-md-2"> Supervisor </label>
                                 <div class="col-md-3">
                                    <select class="form-control jssingle" id='emp_code' name='emp_code'>
                                        <option value='0'>-- Select Supervisor --</option>
                                        @foreach($rsdepartmentData['staff'] as $department)
                                          <option value='{{ $department->id }}'>{{ $department->name }}</option>
                                        @endforeach
                                     </select>
                                  </div>
                                 
                            </div>
    
                            <div style="margin-left: 0px;" class="form-group row">
                              <label class="control-label text-left col-md-2"> Style </label>
                               
                                  <div class="col-md-3"> 
                                  <select class="form-control jssingle" id='style_code' name='style_code'>
                                      <option value='0'>-- Select Style --</option>
                                      @foreach($rsdepartmentData['style'] as $department)
                                        <option value='{{ $department->id }}'>{{ $department->name }}</option>
                                      @endforeach
                                   </select>
                                </div>
                                
                          </div>
                           
                          <div style="margin-left: 0px;" class="form-group row">
                          <label class="control-label text-left col-md-2"> Fabric & Colour </label> 
                                  <div class="col-md-6">
                                    <table  border="1" class="table">
                                      <thead>
                                        <tr> 
                                          <th width="4%">S.No</th>
                                          <th width="40%">Colour</th>
                                          <th width="40%">Fabirc</th>
                                          <th width="30%">Weight</th> 
                                        </tr>  
                                      </thead>
                                        <tr>   
                                        <td>1</td>
                                        <td><div id="fabricid1" class="form-control"></div></td>
                                        <td><div id="colourid1" class="form-control"></div></td>
                                        <td><div id="weightid1" class="form-control"></div></td>
                                        </tr>
                                        <tr>   
                                          <td>2</td>
                                          <td><div id="fabricid2" class="form-control"></div></td>
                                          <td><div id="colourid2" class="form-control"></div></td>
                                          <td><div id="weightid2" class="form-control"></div></td>
                                          </tr>
                                          <tr>   
                                            <td>3</td>
                                            <td><div id="fabricid3" class="form-control"></div></td>
                                            <td><div id="colourid3" class="form-control"></div></td>
                                            <td><div id="weightid3" class="form-control"></div></td>
                                            </tr>
                                            <tr>   
                                              <td>4</td>
                                              <td><div id="fabricid4" class="form-control"></div></td>
                                              <td><div id="colourid4" class="form-control"></div></td>
                                              <td><div id="weightid4" class="form-control"></div></td>
                                              </tr>
                                              <tr>   
                                                <td>5</td>
                                                <td><div id="fabricid5" class="form-control"></div></td>
                                                <td><div id="colourid5" class="form-control"></div></td>
                                                <td><div id="weightid5" class="form-control"></div></td>
                                                </tr>
                                      </table>
                                  </div>     
                                </div>     
                                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                                    <table  border="1" class="table">
                                          <thead>
                                            <tr> 
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize1" id="indxsize1" value="Size 1"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize2" id="indxsize2" value="Size 2"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize3" id="indxsize3" value="Size 3"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize4" id="indxsize4" value="Size 4"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize5" id="indxsize5" value="Size 5"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize6" id="indxsize6" value="Size 6"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize7" id="indxsize7" value="Size 7"></th>
                                              <th  width="2%">  <input type="text" class="form-control"  readonly name="indxsize8" id="indxsize8" value="Size 8"></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              <tr> 
                                                 <td>  <input type="number"    name="size1" id="size1"  value="0" class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size2" id="size2"  value="0"  class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size3" id="size3"  value="0"  class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size4" id="size4"  value="0"  class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size5" id="size5"  value="0"  class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size6" id="size6"  value="0"  class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size7" id="size7"  value="0"  class="form-control totalLinePrice"></td>
                                                 <td>  <input type="number"    name="size8" id="size8"  value="0"  class="form-control totalLinePrice"></td>
                                                
                                                </tr>
                                               </tbody>
                                           
                                     </table>   
                        
                         <div style="margin-left: 0px;" class="form-group row">
                            <label class="control-label text-left col-md-3"> Total Pcs:.</label>
                              <div class="col-md-3">
                                  <input type="number" name="total_pcs" readonly class="form-control"
                                   id="total_pcs" placeholder="Total Pcs" >
                              </div>
                        </div>
                       

                       <div style="margin-left: 0px;" class="form-group row">                                  
                            <label class="control-label text-left col-md-3"> Remarks</label>
                            <div class="col-md-5">
                                  <input type="text" name="remarks" maxlength="250" class="form-control">
                            </div>
                        </div>

                                                         
                        <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-7">
                                               
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                <a href="{{ url('admin/cuttingprogram') }}" class="btn btn-inverse">Cancel</a>
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>
                                </div>
                        </div>


                       
                        

                        </form>
                       </div>
                </div>
            </div>
        </div>
  
        <script>
          $('#style_code').on('change',function()
          {
                 
              var total=0; 
              var styleid=$('#style_code').val(); 
              selectcolourfabric();
              var _token = $('input[name="_token"]').val(); 
              var size1,size2,size3,size4,size5,size6,size7,size8;
              var weight_0,weight_1,weight_2,weight_3,weight_4,weight_5,weight_6,weight_7;
              $.ajax({
                    url:"{{ route('cuttingproduction.fetchsize') }}",
                    method:"POST", 
                    data:{_token:_token,styleid:styleid},  
                    success: function(response){   
                      $.each(response, function (index, value) {
                          total=0;
                          size1=(this.size1);size2=(this.size2);size3=(this.size3);size4=(this.size4);
                          size5=(this.size5);size6=(this.size6);size7=(this.size7);size8=(this.size8);
                          $("#indxsize1").val(size1);
                          $("#indxsize2").val(size2);
                          $("#indxsize3").val(size3);
                          $("#indxsize4").val(size4);
                          $("#indxsize5").val(size5);
                          $("#indxsize6").val(size6);
                          $("#indxsize7").val(size7);
                          $("#indxsize8").val(size8);
                        
                      })
                    
                    }, 
                    error: function (jqXHR, exception) {
                          var msg = '';
                          if (jqXHR.status === 0) {
                              msg = 'Not connect.\n Verify Network.';
                          } else if (jqXHR.status == 404) {
                              msg = 'Requested page not found. [404]';
                          } else if (jqXHR.status == 500) {
                              msg = 'Internal Server Error [500].';
                          } else if (exception === 'parsererror') {
                              msg = 'Requested JSON parse failed.';
                          } else if (exception === 'timeout') {
                              msg = 'Time out error.';
                          } else if (exception === 'abort') {
                              msg = 'Ajax request aborted.';
                          } else {
                              msg = 'Uncaught Error.\n' + jqXHR.responseText;
                          }
                           alert(msg);
                         },
                         
                          headers: {
                          'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                          } 
                        });
                       
                        
              //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
             
              
          });
     
         function selectcolourfabric()
         {

          var _token = $('input[name="_token"]').val();
          var styleid=$('#style_code').val();
          $("#fabricid1").html("");$("#fabricid2").html("");$("#fabricid3").html("");$("#fabricid4").html("");$("#fabricid5").html("");
          $("#colourid1").html('');$("#colourid2").html('');$("#colourid3").html('');$("#colourid4").html('');$("#colourid5").html('');
          $("#weightid1").html('');$("#weightid2").html(''); $("#weightid3").html(''); $("#weightid4").html(''); $("#weightid5").html('');
          $.ajax({
              url:"{{ route('cuttingproduction.fetchcolourfabric') }}",
              method:"POST", 
              data:{_token:_token,styleid:styleid},              
              success: function(response){ 
                $.each(response, function (index, value) {
                          total=0;
                           
                           $("#fabricid1").html(this.fabricname1);
                           $("#colourid1").html(this.colourname1);
                           $("#weightid1").html(this.weight1);

                           $("#fabricid2").html(this.fabricname2);
                           $("#colourid2").html(this.colourname2);
                           $("#weightid2").html(this.weight2);

                           $("#fabricid3").html(this.fabricname3);
                           $("#colourid3").html(this.colourname3);
                           $("#weightid3").html(this.weight3);

                           $("#fabricid4").html(this.fabricname4);
                           $("#colourid4").html(this.colourname4);
                           $("#weightid4").html(this.weight4);

                           $("#fabricid5").html(this.fabricname5);
                           $("#colourid5").html(this.colourname5);
                           $("#weightid5").html(this.weight5);
                      }) 
                            
                   
              }, 
             headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    } 
                  });
                 
                        
      }   
</script>        
<script>  
$(document).on('change keyup blur','.totalLinePrice',function(){
  calculateTotal();
 
 });
            
 
function calculateTotal(){
    var subTotal = 0 ; 
    var size1= 0,size2= 0,size3= 0,size4= 0,size5= 0,size6= 0,size7= 0,size8= 0; 
 

    size1 = parseFloat($('#size1').val());
    size2 = parseFloat($('#size2').val());
    size3= parseFloat($('#size3').val());size4 = parseFloat($('#size4').val());
    size5 = parseFloat($('#size5').val());size6 = parseFloat($('#size6').val());
    size7= parseFloat($('#size7').val());size8 = parseFloat($('#size8').val());
    if (size1!==0) {}
    subTotal=size1+size2+size3+size4+size5+size6+size7+size8;
    subTotal=subTotal.toFixed(0);
     $('#total_pcs').val(subTotal);    
     console.log(subTotal)        
            } 
var specialKeys = new Array();
specialKeys.push(8,46);  
function IsNumeric(e) {
                var keyCode = e.which ? e.which : e.keyCode;            
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                return ret;
            }
            
 </script>
 <script>
  $(document).ready(function() { 
     $('.jssingle').select2(); 
 });
 </script>
                                    
@endsection
