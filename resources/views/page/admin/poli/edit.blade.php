@extends('layouts.dashboard')
@section('title', 'Edit Suara')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Kandidat</h1>
    <p>Periode : 2020-2021</p>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit Voters</div>
						<a href="{{ route('voters.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('voters.update', $voters->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
							<label for="foto">Status</label>
							<select name="status" class="form-control">
                                @foreach ($status as $row)
									@if ($row->id == $voters->status)
									<option value="{{ $row->id }}" selected>{{ $row->nama }}</option>
									@else
									<option value="{{ $row->id }}">{{ $row->nama }}</option>
									@endif
                                @endforeach
                            </select>
						</div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
@endsection