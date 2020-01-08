@extends('layouts.main')
@section('title', 'Ruang | Inventaris')
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
					<h4 class="card-title">Ruang</h4>
					<p class="card-description"></p>
					<form action="/ruangs" method="POST" class="form-sample">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_ruang" class="col-sm-3 col-form-label">Nama Ruang</label>
									<div class="col-sm-9">
										<input type="text" id="nama_ruang" name="nama_ruang" class="form-control @error('nama_ruang') is-invalid @enderror" value="{{ old('nama_ruang') }}" autofocus autocomplete="off">
										@error('nama_ruang')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="kode_ruang" class="col-sm-3 col-form-label">Kode Ruang</label>
									<div class="col-sm-9">
										<?php 
										$conn = mysqli_connect('localhost', 'root', '', 'laravel_peminjaman');
										$query = mysqli_query($conn, 'SELECT max(kode_ruang) AS maxKode FROM ruangs');
										$data = mysqli_fetch_array($query);
										$kodeRuang = $data['maxKode'];

										$noUrut = (int) substr($kodeRuang, 3, 3);
										$noUrut++;

										$char = "RUA";
										$newID = $char . sprintf("%03s", $noUrut);
									?>
										<input type="text" id="kode_ruang" name="kode_ruang" class="form-control @error('kode_ruang') is-invalid @enderror" value="{{ $newID }}" readonly autocomplete="off">
										@error('kode_ruang')
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
					<h4 class="card-title">Ruang</h4>
					<p class="card-description">Tabel dari data-data Ruang</p>
					<div class="table-responsive mb-4">
						<table class="table table-striped table-bordered">
							<thead align="center">
								<tr>
									<th>#</th>
									<th>Nama Ruang</th>
									<th>Kode Ruang</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($ruangs as $ruang)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $ruang->nama_ruang }}</td>
										<td>{{ $ruang->kode_ruang }}</td>
										<td>{{ $ruang->keterangan }}</td>
										<td>
											<form action="/ruangs/{{ $ruang->id_ruang }}" method="POST">
												<a href="/ruangs/edit/{{ $ruang->id_ruang }}" class="btn btn-sm btn-fw btn-rounded btn-info">Edit</a>
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
					{!! $ruangs->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection