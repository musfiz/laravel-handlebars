@extends('welcome')
@section('content')
<div class="row mb-2 item">
	<div class="col-md-12">		
		<div class="card border-info">
			<p class="badge badge-info" style="border-radius: 0;text-align: left;padding:7px">District List</p>
			<div class="card-body d-flex flex-column align-items-start">
				<table class="table-bordered" width="100%">
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
					<tbody>
						@foreach($districts as $d)
						<tr>
							<td>{{$d->id}}</td>
							<td>{{$d->name}}</td>
							<td>{{$d->bn_name}}</td>
							<td>{{$d->lat}}</td>
							<td>{{$d->lon}}</td>
							<td>{{$d->website}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection