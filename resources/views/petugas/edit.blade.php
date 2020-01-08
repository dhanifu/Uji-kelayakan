@extends('layouts.main')
@section('title', 'Edit Petugas | Inventaris')
@section('content')

<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Petugas</h4>
					<p class="card-description"></p>
					<form action="/petugas/{{$petugas->id_petugas}}" method="POST" class="form-sample">
						@csrf
						@method('patch')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="username" class="col-sm-3 col-form-label">Username</label>
									<div class="col-sm-9">
										<input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $petugas->username }}" autofocus autocomplete="off">
										@error('username')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<div class="col-sm-9">
										<input type="hidden" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ $petugas->password }}" autocomplete="off">
										@error('password')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_petugas" class="col-sm-3 col-form-label">Nama Petugas</label>
									<div class="col-sm-9">
										<input type="text" id="nama_petugas" name="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ $petugas->nama_petugas }}" autocomplete="off">
										@error('nama_petugas')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label for="id_level" class="col-sm-3 col-form-label">ID Level</label>
									<div class="col-sm-4">
										<select name="id_level" id="id_level" class="form-control js-example-basic-single">
											<option value="{{ $petugas->id_level }}" selected disabled>
												@if($petugas->id_level == "1")
													{{ $petugas->id_level }} - Admin
												@elseif($petugas->id_level == "2")
													{{ $petugas->id_level }} - Operator
												@endif
											</option>
											@foreach($levels as $level)
												<option value="{{ $level->id_level }}">
													{{ $level->id_level }} - {{ $level->nama_level }}
												</option>
											@endforeach
										</select>
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
							<a href="/petugas" class="btn btn-warning">Kembali</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection