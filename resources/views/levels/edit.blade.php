@extends('layouts.main')
@section('title', 'Edit Level | Inventaris')
@section('content')

<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Level</h4>
					<p class="card-description"></p>
					<form action="/levels/{{ $level->id_level }}" method="POST" class="form-sample">
						@csrf
						@method('patch')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_level" class="col-sm-4 col-form-label">Nama Level/Jabatan</label>
									<div class="col-sm-6">
										<input type="text" id="nama_level" name="nama_level" class="form-control @error('nama_level') is-invalid @enderror" value="{{ $level->nama_level }}" autofocus autocomplete="off">
										@error('nama_level')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" style="height: 45px;">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection