@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<center><h1>K a t e g o r i</h1></center>
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('kategori.create') }}"><i class="fa fa-plus"></i>Add Data</a>
				</div>
			</div>
<div class="panel-body">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	@include('sweet::alert')
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($kategori as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama }} </td>
		
		
	<td>
		<a class="btn btn-primary" href=" {{ route('kategori.edit',$data->id)}} "><i class="fa fa-edit"></i>Edit </a>
	</td>
	
	<td>
							<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus </button>
								
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection