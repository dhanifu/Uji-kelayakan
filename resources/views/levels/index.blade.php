@extends('layouts.main')
@section('title', 'Level | Inventaris')
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
					<h4 class="card-title">Level</h4>
					<p class="card-description"></p>
					<form action="/levels" method="POST" class="form-sample">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nama_level" class="col-sm-4 col-form-label">Nama Level/Jabatan</label>
									<div class="col-sm-6">
										<input type="text" id="nama_level" name="nama_level" class="form-control @error('nama_level') is-invalid @enderror" value="{{ old('nama_level') }}" autofocus autocomplete="off">
										@error('nama_level')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" style="height: 45px;">Submit</button>
						</div>
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
									<th>ID Level</th>
									<th>Nama Level</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody align="center">
								@foreach($levels as $level)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $level->id_level }}</td>
										<td>{{ $level->nama_level }}</td>
										<td>
											<a href="/levels/edit/{{ $level->id_level }}" class="btn btn-sm btn-fw btn-rounded btn-info">Edit</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{!! $levels->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection