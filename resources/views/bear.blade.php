@extends('layouts.master')

@section('title')
@stop
@section('styles')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
@stop
@section('content')
	<div class="container">
		<div class="card">
			<h2 style="text-align:center;color:teal">
				Bear List</br><hr>
			</h2>
		</div>
		<div class="card z-depth-3 hoverable">
			<table class="table table-hover" id="#example">
				<thead>
					<tr>
						<th>Bear ID</th>
						<th>Bear Name</th>
						<th>Bear Type</th>
						<th>Danger Level</th>
						
					</tr>
				</thead>
				<tbody >
					<?php $i=1?>
						@foreach( $bears as $bear )
							<tr>
								<td>{{ $bear->id }}</td>
								<td>{{ $bear->name }}</td>
								<td>{{ $bear->type }}</td>
								<td>{{ $bear->danger_level }}</td>
								
							</tr>
						@endforeach
					<?php $i=$i+1?>
				</tbody>
			</table>
		</div>
	</div>
@stop
@section('scripts')
	<!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script src="https:////cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
	    		$('#example').DataTable();
		} );
	</script> -->
@stop