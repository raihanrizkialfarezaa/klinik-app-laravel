@extends('layouts.dashboard')

@section('title')
    edit admin
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit admin</h1>
    <p>Periode : 2020-2021</p>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah admin</div>
						<a href="{{ route('admin.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
						@csrf
                        <div class="form-group">
							<label for="judul">Email</label>
							<input type="text" value="{{ $admin->email }}" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="judul">Nama</label>
							<input type="text" value="{{ $admin->name }}" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label for="judul">Password</label>
							<input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
@endsection