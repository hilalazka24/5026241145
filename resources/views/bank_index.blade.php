@extends('template')
@section('title', 'Data Bank')
@section('konten')
    <a href="/bank/tambah" class="btn btn-primary">Tambah Bank Baru</a>

    <br />
    <br />

	<form action="/bank/cari" method="GET">
		<div class="form-group">
			<label>Cari Data Bank :</label>
			<input type="text" name="cari" placeholder="Cari Merk Bank .." class="form-control">
			<input type="submit" value="CARI" class="btn btn-light">
		</div>
	</form>

	<br/>

    <table border="table" class="table table-bordered table-striped table-hover">
        <tr>
            <th>Merk Bank</th>
            <th>Jumlah Bank</th>
            <th>Tersedia (Y/N)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bank as $b)
            <tr>
                <td>{{ $b->merkbank }}</td>
                <td>{{ $b->jumlahbank }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/bank/edit/{{ $b->kodebank }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/bank/hapus/{{ $b->kodebank }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $bank->links() }}
@endsection
