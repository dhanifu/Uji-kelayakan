@extends('layouts.main')
@section('title', 'Edit Ruang | Inventaris')
@section('content')

<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Ruang</h4>
					<p class="card-description"></p>
					<form action="/ruangs/{{ $ruang->id_ruang }}" method="POST" class="form-sample">
						@csrf
						@method('patch')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_ruang" class="col-sm-3 col-form-label">Nama ruang</label>
									<div class="col-sm-9">
										<input type="text" id="nama_ruang" name="nama_ruang" class="form-control @error('nama_ruang') is-invalid @enderror" value="{{ $ruang->nama_ruang }}" autofocus autocomplete="off">
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
									<label for="kode_ruang" class="col-sm-3 col-form-label">Kode ruang</label>
									<div class="col-sm-9">
										<input type="text" id="kode_ruang" name="kode_ruang" class="form-control @error('kode_ruang') is-invalid @enderror" value="{{ $ruang->kode_ruang }}" readonly autocomplete="off">
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
										<input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $ruang->keterangan }}" autocomplete="off">
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