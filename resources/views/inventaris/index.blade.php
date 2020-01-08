@extends('layouts.main')
@section('title', 'Inventaris | Inventaris')
@section('tambah')
<li class="nav-item dropdown d-lg-flex d-none">
    <a href="/inventaris/create" class="btn btn-info font-weight-bold">+ Buat Data Baru</a>
</li>
@endsection
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
					<p class="card-description">tabel data-data inventaris</p>
					<div class="table-responsive mb-4">
						<table class="table table-striped table-bordered">
							<thead align="center">
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Kondisi</th>
									<th>Keterangan</th>
									<th>Jumlah</th>
									<th>ID Jenis</th>
									<th>Tgl. Register</th>
									<th>ID Ruang</th>
									<th>Kode Inventaris</th>
									<th>ID Petugas</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody align="center">
								@foreach($inventaris as $inven)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $inven->nama }}</td>
										<td>{{ $inven->kondisi }}</td>
										<td>{{ $inven->keterangan }}</td>
										<td>{{ $inven->jumlah }}</td>
										<td>{{ $inven->id_jenis }}</td>
										<td>{{ $inven->tanggal_register }}</td>
										<td>{{ $inven->id_ruang }}</td>
										<td>{{ $inven->kode_inventaris }}</td>
										<td>{{ $inven->id_petugas }}</td>
										<td>
											<form action="/pegawais/{{ $inven->id_inventaris }}" method="POST">
												<a href="/pegawais/edit/{{ $inven->id_inventaris }}" class="btn btn-sm btn-fw btn-rounded btn-info">Edit</a>
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
					{!! $inventaris->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection