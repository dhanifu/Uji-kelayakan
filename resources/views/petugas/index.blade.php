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
					<h4 class="card-title">Petugas</h4>
					<p class="card-description"></p>
					<form action="/petugas" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="username" class="col-sm-3 col-form-label">Username</label>
									<div class="col-sm-9">
										<input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus autocomplete="off">
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
									<label for="password" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autofocus autocomplete="off">
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
										<input type="text" id="nama_petugas" name="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ old('nama_petugas') }}" autofocus autocomplete="off">
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
									<label for="id_level" class="col-sm-3 col-form-label">Nama Jenis</label>
									<div class="col-sm-9">
										<select name="id_level" id="id_level" class="form-control js-example-basic-single @error('id_level') is-invalid @enderror">
											<option selected disabled>--ID Level--</option>
											@foreach($levels as $level)
												<option value="{{ $level->id_level }}">{{ $level->id_level }} - {{ $level->nama_level }}</option>
											@endforeach
										</select>
										@error('id_level')
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
					<h4 class="card-title">Petugas</h4>
					<p class="card-description">tabel data-data petugas</p>
					<div class="table-responsive mb-4">
						<table class="table table-striped table-bordered">
							<thead align="center">
								<tr>
									<th>#</th>
									<th>Username</th>
									<th>Nama Petugas</th>
									<th>ID Level</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($petugas as $pet)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $pet->username }}</td>
										<td>{{ $pet->nama_petugas }}</td>
										<td>{{ $pet->id_level }}</td>
										<td>
											<form action="/petugas/{{ $pet->id_petugas }}" method="POST">
												<a href="/petugas/edit/{{ $pet->id_petugas }}" class="btn btn-sm btn-fw btn-rounded btn-info">Edit</a>
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
					{!! $petugas->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection