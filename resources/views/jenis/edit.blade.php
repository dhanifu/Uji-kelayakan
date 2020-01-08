@extends('layouts.main')
@section('title', 'Edit Jenis | Inventaris')
@section('content')

<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Jenis</h4>
					<p class="card-description"></p>
					<form action="/jenis/{{ $jenis->id_jenis }}" method="POST" class="form-sample">
						@csrf
						@method('patch')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_jenis" class="col-sm-3 col-form-label">Nama Jenis</label>
									<div class="col-sm-9">
										<input type="text" id="nama_jenis" name="nama_jenis" class="form-control @error('nama_jenis') is-invalid @enderror" value="{{ $jenis->nama_jenis }}" autofocus autocomplete="off">
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
										<input type="text" id="kode_jenis" name="kode_jenis" class="form-control @error('kode_jenis') is-invalid @enderror" value="{{ $jenis->kode_jenis }}" readonly autocomplete="off">
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
										<input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $jenis->keterangan }}" autocomplete="off">
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
</div>

@endsection