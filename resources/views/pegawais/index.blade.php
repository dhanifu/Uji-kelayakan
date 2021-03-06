@extends('layouts.main')
@section('title', 'Petugas | Inventaris')
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
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Pegawai</h4>
					<p class="card-description"></p>
					<form action="/pegawais" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
									<div class="col-sm-9">
										<input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control @error('nama_pegawai') is-invalid @enderror" value="{{ old('nama_pegawai') }}" autofocus autocomplete="off">
										@error('nama_pegawai')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nip" class="col-sm-3 col-form-label">NIP</label>
									<div class="col-sm-9">
										<input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" autofocus autocomplete="off">
										@error('nip')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-9">
										<textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" autofocus autocomplete="off"></textarea>
										@error('alamat')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Pegawai</h4>
					<p class="card-description">tabel data-data pegawai</p>
					<div class="table-responsive mb-4">
						<table class="table table-striped table-bordered">
							<thead align="center">
								<tr>
									<th>#</th>
									<th>Nama Pegawai</th>
									<th>NIP</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody align="center">
								@foreach($pegawais as $pegawai)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $pegawai->nama_pegawai }}</td>
										<td>{{ $pegawai->nip }}</td>
										<td>{{ $pegawai->alamat }}</td>
										<td>
											<form action="/pegawais/{{ $pegawai->id_pegawai }}" method="POST">
												<a href="/pegawais/edit/{{ $pegawai->id_pegawai }}" class="btn btn-sm btn-fw btn-rounded btn-info">Edit</a>
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
					{!! $pegawais->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection