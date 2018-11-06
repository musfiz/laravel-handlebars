@extends('welcome')
@section('content')
<style>
	.dropdown-menu>.active>a,
	.dropdown-menu>.active>a:focus, 
	.dropdown-menu>.active>a:hover {
	    color: #fff;
	    text-decoration: none;
	    background-color: #17a2b8;
	    outline: 0;
	}
</style>
<div class="row mb-2 item">
	<div class="col-md-12">
		<div class="card border-info">
			<div class="card-body">
				<div class="row">					
					<div class="form-group col-md-6">
						<label for="">Add all district from district table</label>
						<br>
						<button id="add_district" class="btn btn-success btn-sm">Add All District</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="row mb-2 item">
	<div class="col-md-12">
		<div class="card border-info">			
				<p class="badge badge-info" style="padding: 7px;border-radius:0;text-align: left">
				District List</p>			
			<div class="card-body">
				<div class="row">
					<table id="district_table" class="table-bordered" width="100%">
					<thead>
						<tr>
							<th>SN</th>
							<th>District Name(EN)</th>
							<th>District Name(BN)</th>
							<th>Latitude</th>
							<th>Longitude</th>
							<th>Website</th>
						</tr>
					</thead>
					<tbody id="addRow">
						
					</tbody>
				</table>
				</div>				
			</div>
		</div>
	</div>
</div>

{{-- Handlebar template for All District row add --}}
<script id="district-row-template" type="text/x-handlebars-template">
	@{{#each this}}
	<tr>		
		<td>@{{id}}</td>
		<td>@{{name}}</td>
		<td>@{{bn_name}}</td>
		<td>@{{lat}}</td>
		<td>@{{lon}}</td>
		<td>@{{website}}</td>
	</tr>
	@{{/each}}
</script>

<script type="text/javascript">
	$(function(){
	    //Add district data to table row 
	    $('#add_district').on('click',function(){
	    	var id=$('#search-input').attr('data-id');
	    	var url="{{route('district.json')}}";
	    	$.ajax({
	    		'url':url,
	    		'type':'get',
	    		'dataType':'json',
	    		'success':function(response){
	    			console.log(response);	    		

	    			//handlebar add district data row dynamically 	    			
	    			var source   = $("#district-row-template").html();
	    			var template = Handlebars.compile(source);	    			
	    			$("#addRow").append(template(response));
	    		
	    		}
	    	})
	    });
	})   
</script>

@endsection