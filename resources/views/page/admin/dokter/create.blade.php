@extends('layouts.dashboard')

@section('title')
    dokter
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah dokter</h1>
    <p>Periode : 2020-2021</p>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah dokter</div>
						<a href="{{ route('dokter.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('dokter.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="form-group">
							<label for="judul">username</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label for="judul">Password</label>
							<input type="text" class="form-control" name="password">
                        </div>
						<div class="form-group">
							<label for="judul">nama dokter</label>
							<input type="text" class="form-control" name="nama_dokter">
                        </div>
						<div class="form-group">
							<label for="judul">spesialis</label>
							<input type="text" class="form-control" name="spesialis">
                        </div>
						<div class="form-group">
							<label for="judul">nama dokter</label>
							<select name="poli_id" id="">
								@foreach ($poli as $row)
									<option value="{{ $row->id_poli }}">{{ $row->nama_poli }}</option>
								@endforeach
							</select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
@endsection