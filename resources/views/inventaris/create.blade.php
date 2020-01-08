@extends('layouts.main')
@section('title', 'Create Inventaris | Inventaris')
@section('content')

<div class="content-wrapper">
	
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Inventaris</h4>
					<p class="card-description"></p>
					<form action="/inventaris" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autofocus autocomplete="off">
										@error('nama')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="kondisi" class="col-sm-3 col-form-label">Kondisi</label>
									<div class="col-sm-9">
										<input type="number" id="kondisi" name="kondisi" class="form-control @error('kondisi') is-invalid @enderror" value="{{ old('kondisi') }}" autofocus autocomplete="off">
										@error('kondisi')
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
										<input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" autofocus autocomplete="off">
										@error('keterangan')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
									<div class="col-sm-9">
										<input type="number" id="jumlah" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" autofocus autocomplete="off">
										@error('jumlah')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="id_jenis" class="col-sm-3 col-form-label">ID Jenis</label>
									<div class="col-sm-9">
										<input type="text" id="id_jenis" name="id_jenis" class="form-control @error('id_jenis') is-invalid @enderror" value="{{ old('id_jenis') }}" autofocus autocomplete="off">
										@error('id_jenis')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="tanggal_register" class="col-sm-3 col-form-label">Tgl. Register</label>
									<div class="col-sm-9">
										<input type="date" id="tanggal_register" name="tanggal_register" class="form-control @error('tanggal_register') is-invalid @enderror" value="{{ old('tanggal_register') }}" autofocus autocomplete="off">
										@error('tanggal_register')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="id_ruang" class="col-sm-3 col-form-label">ID Ruang</label>
									<div class="col-sm-9">
										<input type="text" id="id_ruang" name="id_ruang" class="form-control @error('id_ruang') is-invalid @enderror" value="{{ old('id_ruang') }}" autofocus autocomplete="off">
										@error('id_ruang')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="kode_inventaris" class="col-sm-3 col-form-label">Kode Inventaris</label>
									<div class="col-sm-9">
										<input type="text" id="kode_inventaris" name="kode_inventaris" class="form-control @error('kode_inventaris') is-invalid @enderror" value="{{ old('kode_inventaris') }}" autofocus autocomplete="off">
										@error('kode_inventaris')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="id_petugas" class="col-sm-3 col-form-label">ID Petugas</label>
									<div class="col-sm-9">
										<input type="text" id="id_petugas" name="id_petugas" class="form-control @error('id_petugas') is-invalid @enderror" value="{{ old('id_petugas') }}" autofocus autocomplete="off">
										@error('id_petugas')
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
</div>

@endsection