@extends('layouts.main')
@section('title', 'Jenis | Inventaris')
@section('content')

<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin">
			@if ($message = Session::get('status'))
			<div class="alert alert-success" style="height: 40px">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong>{{ $message }}</strong>
			</div>
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Jenis</h4>
					<p class="card-description"></p>
					<form action="/jenis" method="POST" class="form-sample">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_jenis" class="col-sm-3 col-form-label">Nama Jenis</label>
									<div class="col-sm-9">
										<input type="text" id="nama_jenis" name="nama_jenis" class="form-control @error('nama_jenis') is-invalid @enderror" value="{{ old('nama_jenis') }}" autofocus autocomplete="off">
										@error('nama_jenis')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="kode_jenis" class="col-sm-3 col-form-label">Kode Jenis</label>
									<div class="col-sm-9">
										<?php 
										$conn = mysqli_connect('localhost', 'root', '', 'laravel_peminjaman');
										$query = mysqli_query($conn, 'SELECT max(kode_jenis) AS maxKode FROM jenis');
										$data = mysqli_fetch_array($query);
										$kodeJenis = $data['maxKode'];

										$noUrut = (int) substr($kodeJenis, 3, 3);
										$noUrut++;

										$char = "JNS";
										$newID = $char . sprintf("%03s", $noUrut);
									?>
										<input type="text" id="kode_jenis" name="kode_jenis" class="form-control @error('kode_jenis') is-invalid @enderror" value="{{ $newID }}" readonly autocomplete="off">
										@error('kode_jenis')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
									<div class="col-sm-9">
										<input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" autocomplete="off">
										@error('keterangan')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
						</div>
							<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Jenis</h4>
					<p class="card-description">Tabel dari data-data jenis</p>
					<div class="table-responsive mb-4">
						<table class="table table-striped table-bordered">
							<thead align="center">
								<tr>
									<th>#</th>
									<th>Nama Jenis</th>
									<th>Kode Jenis</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($jeniss as $jenis)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $jenis->nama_jenis }}</td>
										<td>{{ $jenis->kode_jenis }}</td>
										<td>{{ $jenis->keterangan }}</td>
										<td>
											<form action="/jenis/{{ $jenis->id_jenis }}" method="POST">
												<a href="/jenis/edit/{{ $jenis->id_jenis }}" class="btn btn-sm btn-fw btn-rounded btn-info">Edit</a>
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-sm btn-fw btn-rounded btn-danger">Delete</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{!! $jeniss->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection