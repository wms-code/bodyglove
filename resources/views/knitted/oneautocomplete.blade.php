<link href="{{ url('invoice/css/jquery-ui.min.css.css') }}" rel="stylesheet"> 
<link href="{{ url('invoice/css/font-awesome.min.css') }}" rel="stylesheet">  
<link href="{{ url('invoice/css/sticky-footer-navbar.css') }}" rel="stylesheet">

<link //href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"> </link>
<script //src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="{{ url('invoice/js/jquery-ui.min.js')}}"></script>
<script src="{{ url('invoice/js/ie.js')}}"></script>
  
<script //src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link //rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script //src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ url('invoice/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ url('invoice/js/bootstrap.min.js')}}"></script>
@extends('layouts.admin')

@section('pagetitle','Knitted Fabric Inward') 
@section('content')      
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700"> 
<!-- Bootstrap core CSS -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/js/select2.min.js"></script> 

<script src="{{ url('invoice/js/jquery.min.js')}}"></script>
<script src="{{ url('invoice/js/jquery-ui.min.js')}}"></script>
<script src="{{ url('invoice/js/bootstrap.min.js')}}"></script>
<script src="{{ url('invoice/js/bootstrap-datepicker.js')}}"></script>

<link href="{{ url('invoice/css/jquery-ui.min.css.css') }}" rel="stylesheet">
 
<link href="{{ url('invoice/css/font-awesome.min.css') }}" rel="stylesheet">
 
<link href="{{ url('invoice/css/sticky-footer-navbar.css') }}" rel="stylesheet">
 
     <!-- Custom styles for this template -->
     
 
     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
     <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
     
     <script src="{{ url('invoice/js/ie.js')}}"></script>
 

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!--[if lt IE 9]>



      
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
   //datepicker
   $(function () {
      // $('#invoiceDate').datepicker({});
   });
    </script>
   <body>
  
      <!-- Begin page content -->
     <div class="container content">
       <div class='row'>
         <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
           <h1 class="text-center title">Invoice System Using jQuery AutoComplete</h1>
         </div>
       </div>
       <div class="checker" id="uniform-listing_amenity_ids_4">
        <span>
          <input class="check_boxes optional" id="listing_amenity_ids_4" name="listing[amenity_ids][]" type="checkbox" value="4" style="opacity: 0;">
        </span>
      </div>
      <div class="form-group">

          <td><input class="form-control autocomplete_txt" type='text' data-type="countryname" id='countryname_1' name='countryname[]'/></td>
          <td><input class="form-control autocomplete_txt" type='text' data-type="country_code" id='country_code_1' name='country_code[]'/> </td>

          <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Enter Country Name" />
          <div id="countryList">
          </div>
         </div>
         {{ csrf_field() }}
        </div>
  
         <h2>From </h2>
       <div class='row'>
           <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
             <div class="form-group">
           <input type="email" class="form-control" id="companyName" placeholder="Company Name">
         </div>
         <div class="form-group">
           <textarea class="form-control" rows='3' id="companyAddress" placeholder="Your Address"></textarea>
         </div>
           </div>
         </div>
         <h2>To,</h2>
         <div class='row'>
           <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
             <div class="form-group">
           <input type="email" class="form-control" id="clientCompanyName" placeholder="Company Name">
         </div>
         <div class="form-group">
           <textarea class="form-control" rows='3' id="clientAddress" placeholder="Your Address"></textarea>
         </div>
         
           </div>
           <div class='col-xs-12 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 col-sm-4 col-md-4 col-lg-4'>
             <div class="form-group">
           <input type="number" class="form-control" id="invoiceNo" placeholder="Invoice No">
         </div>
         <div class="form-group">
           <input type="date" class="form-control" id="invoiceDate" placeholder="Invoice Date">
         </div>
         <div class="form-group">
           <input type="number" class="form-control amountDue" id="amountDueTop" placeholder="Amount Due">
         </div>
           </div>
         </div>
         <h2>&nbsp;</h2>
           
        
 
         <div class='row'>
           <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
             <table  border="1" class="table">
           <thead>
             <tr>

               <th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/> SNo</th>
               <th width="15%">Item No</th>
               <th width="38%">Item Name</th>
               <th width="15%">Price</th>
               <th width="15%">Quantity</th>
               <th width="15%">Total</th>
             </tr>
           </thead>
           <tbody>
             <tr>
              <th width="2%"><input class="case" type="checkbox"/></th>
              <td> 
                  <input type="text" class="namecountry_name form-control" id="idcountry_name1" />
                  <div class="form-control" id="idcountryList1"></div> 
                  <select id="selectcountry"><option>ss</option></select>
               </td>
               <td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
               <td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
               <td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
               <td><input type="number" name="quantity[]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
               <td><input type="number" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
             </tr>
           </tbody>
         </table>
           </div>
         </div>
        
         <div class='row'>
           <div class='col-xs-12 col-sm-3 col-md-3 col-lg-3'>
             <button class="btn btn-danger delete" type="button">- Delete</button>
             <button class="btn btn-success addmore" type="button">+ Add More</button>
           </div>

           


           <div class='col-xs-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-5 col-md-5 col-lg-5'>
         <form class="form-inline">
           <div class="form-group">
             <label>Subtotal: &nbsp;</label>
             <div class="input-group">
               <div class="input-group-addon">$</div>
               <input type="number" class="form-control" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
             </div>
           </div>
           <div class="form-group">
             <label>Tax: &nbsp;</label>
             <div class="input-group">
               <div class="input-group-addon">$</div>
               <input type="number" class="form-control" id="tax" placeholder="Tax" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
             </div>
           </div>
           <div class="form-group">
             <label>Tax Amount: &nbsp;</label>
             <div class="input-group">
               <input type="number" class="form-control" id="taxAmount" placeholder="Tax" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
               <div class="input-group-addon">%</div>
             </div>
           </div>
           <div class="form-group">
             <label>Total: &nbsp;</label>
             <div class="input-group">
               <div class="input-group-addon">$</div>
               <input type="number" class="form-control" id="totalAftertax" placeholder="Total" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
             </div>
           </div>
           <div class="form-group">
             <label>Amount Paid: &nbsp;</label>
             <div class="input-group">
               <div class="input-group-addon">$</div>
               <input type="number" class="form-control" id="amountPaid" placeholder="Amount Paid" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
             </div>
           </div>
           <div class="form-group">
             <label>Amount Due: &nbsp;</label>
             <div class="input-group">
               <div class="input-group-addon">$</div>
               <input type="number" class="form-control amountDue" id="amountDue" placeholder="Amount Due" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
             </div>
           </div>
         </form>
       </div>
         </div>
         <h2>Notes: </h2>
         <div class='row'>
           <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
             <div class="form-group">
           <textarea class="form-control" rows='5' id="notes" placeholder="Your Notes"></textarea>
         </div>
           </div>
         </div>		
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     

     <script>
        $(document).ready(function(){
        var i=$('table tr').length;
        $(".addmore").on('click',function(){
          html = '<tr>';
          html += '<td><input class="case" type="checkbox"/></td>';
          html += '<td><input type="text" class="namecountry_name form-control" id="idcountry_name'+i+'"  />';
          html += '<div class="form-control" id="idcountryList'+i+'"></div></td>';
          html += '<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
          html += '<td><input type="text" data-type="productName" name="itemName[]" id="itemName_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
          html += '<td><input type="text" name="price[]" id="price_'+i+'" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
          html += '<td><input type="text" name="quantity[]" id="quantity_'+i+'" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
          html += '<td><input type="text" name="total[]" id="total_'+i+'" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
          html += '</tr>';
          $('table').append(html);
          i++;
          //alert('s');
        });
      });
        </script>
       <script>
          $(document).ready(function(){
            $(document).on('select', "[id^=selectcountry]", function(){
            var query = $('div[id^="selectcountry"]');
            var id = $(this).attr('id');  
            alert('d')
            // calculateTotal(id); 
	           
           });  
           function calculateTotal(id){
                 
                //  var query = $(id).val();//idcountry_name
               //   id = id.replace("qty_",'');	 
                  var query = $('#'+id).val();
                  var idd = $('#'+id).attr('id');
                   
                  if(query != '')
                    {
                   var _token = $('input[name="_token"]').val();
                   $.ajax({
                    url:"{{ route('knittedfabric.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                      $('#idcountryList1').fadeIn();  
                      $(idd).html(data);
                      $(idd).val($(this).text());  
                      $('#idcountryList1').fadeOut();  
                    }
                   });
                  }

             
              };//s
          
              
          
          });
          </script>


      <script>
          $(document).ready(function(){
            $(document).on('keyup', "[id^=idcountry_name]", function(){
            var query = $('div[id^="idcountry_name"]');
            var id = $(this).attr('id');   
            //  var query =$("div[id^='idcountry_name']");
             // $('#test').attr('id')
             // var query = $("div[id^='idcountry_name']").attr('id');
              // var query = $(this).attr('id');
             // alert(id);  
              calculateTotal(id); 
	           
           });  
           function calculateTotal(id){
                 
                //  var query = $(id).val();//idcountry_name
               //   id = id.replace("qty_",'');	 
                  var query = $('#'+id).val();
                  var idd = $('#'+id).attr('id');
                   
                  if(query != '')
                    {
                   var _token = $('input[name="_token"]').val();
                   $.ajax({
                    url:"{{ route('knittedfabric.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                      $('#idcountryList1').fadeIn();  
                      $(idd).html(data);
                      $(idd).val($(this).text());  
                      $('#idcountryList1').fadeOut();  
                    }
                   });
                  }

              ////////////////////////
              $(document).on('click', 'li', function(){  
              
                  $(idd).val($(this).text());  
                  $('#idcountryList1').fadeOut();  
              });  
              //////////////////////////    
              };//s
          
              
          
          });
          </script>
    
      
 
    <script >
    
 

//to check all checkboxes
$(document).on('change','#check_all',function(){	
	$('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});

//deletes the selected table rows
$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
	$('#check_all').prop("checked", false); 
	calculateTotal();
});

//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
   
	type = $(this).data('type');
	
	if(type =='productCode' )autoTypeNo=0;
	if(type =='productName' )autoTypeNo=1; 	
	
	$(this).autocomplete({
		source: function( request, response ) {
			$.ajax({
        url:"{{ route('knittedfabric.fetch') }}", 
				dataType: "json",
				method: 'post',
				data: {
				   name_startsWith: request.term,
				   type: type
				},
				 success: function( data ) {
					 response( $.map( data, function( item ) {
					 	var code = item.split("|");
						return {
							label: code[autoTypeNo],
							value: code[autoTypeNo],
							data : item
						}
					}));
				}
			});
		},
		autoFocus: true,	      	
		minLength: 0,
		select: function( event, ui ) {
			var names = ui.item.data.split("|");						
			id_arr = $(this).attr('id');
	  		id = id_arr.split("_");
			$('#itemNo_'+id[1]).val(names[0]);
			$('#itemName_'+id[1]).val(names[1]);
			$('#quantity_'+id[1]).val(1);
			$('#price_'+id[1]).val(names[2]);
			$('#total_'+id[1]).val( 1*names[2] );
			calculateTotal();
		}		      	
	});
});

//price change
$(document).on('change keyup blur','.changesNo',function(){

	id_arr = $(this).attr('id');
	id = id_arr.split("_");
	quantity = $('#quantity_'+id[1]).val();
	price = $('#price_'+id[1]).val();
	if( quantity!='' && price !='' ) $('#total_'+id[1]).val( (parseFloat(price)*parseFloat(quantity)).toFixed(2) );	
	calculateTotal();
});

$(document).on('change keyup blur','#tax',function(){
	calculateTotal();
});

//total price calculation 
function calculateTotal(){
	subTotal = 0 ; total = 0; 
	$('.totalLinePrice').each(function(){
		if($(this).val() != '' )subTotal += parseFloat( $(this).val() );
	});
	$('#subTotal').val( subTotal.toFixed(2) );
	tax = $('#tax').val();
	if(tax != '' && typeof(tax) != "undefined" ){
		taxAmount = subTotal * ( parseFloat(tax) /100 );
		$('#taxAmount').val(taxAmount.toFixed(2));
		total = subTotal + taxAmount;
	}else{
		$('#taxAmount').val(0);
		total = subTotal;
	}
	$('#totalAftertax').val( total.toFixed(2) );
	calculateAmountDue();
}

$(document).on('change keyup blur','#amountPaid',function(){
	calculateAmountDue();
});

//due amount calculation
function calculateAmountDue(){
	amountPaid = $('#amountPaid').val();
	total = $('#totalAftertax').val();
	if(amountPaid != '' && typeof(amountPaid) != "undefined" ){
		amountDue = parseFloat(total) - parseFloat( amountPaid );
		$('.amountDue').val( amountDue.toFixed(2) );
	}else{
		total = parseFloat(total).toFixed(2);
		$('.amountDue').val( total );
	}
}


//It restrict the non-numbers
var specialKeys = new Array();
specialKeys.push(8,46); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode;
    console.log( keyCode );
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
}

//datepicker
$(function () {
    //$('#invoiceDate').datepicker({});
});
    </script>
  
 
 @endsection