@extends('layouts.dashboard')

@section('title')
    pendaftaran
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">pendaftaran</h1>
    <p>Periode : 2020-2021</p>

    <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary" >Tambah Data</a>
</div>

<!-- Content Row -->
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th class="text-center">Aksi</th>
            </tr>
            @forelse ($pendaftaran as $row)
                <tr>
                    <th>{{ $row->id_pasien }}</th>
                    <th class="text-center">
                        <a href="{{ route('pendaftaran.show', $row->id_pendaftaran) }}" class="btn btn-primary">Detail</a> | 
                        <form action="{{ route('pendaftaran.destroy', $row->id_pendaftaran) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Hapus
                            </button>

                        </form>
                    </th>
                </tr>
            @empty
                
            @endforelse
        </table>
    </div>
</div>
@endsection