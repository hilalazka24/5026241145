@extends('template')
@section('title', 'Daftar Nilai Peserta')
@section('konten')
    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Peserta Baru</a>
    <br /><br />

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peserta as $c)
                @php
                    $rata = ($c->nilaiteori + $c->nilaipraktek) / 2;
                    $status = $rata >= 75 ? 'Lulus' : 'Gagal';
                    $bgColor = $status == 'Lulus' ? 'success' : 'danger';
                @endphp
                <tr>
                    <td>{{ $c->ID }}</td>
                    <td>{{ $c->nopeserta }}</td>
                    <td>{{ $c->nilaiteori }}</td>
                    <td>{{ $c->nilaipraktek }}</td>
                    <td>{{ number_format($rata, 2) }}</td>
                    <td class="bg-{{ $bgColor }} text-white">{{ $status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $peserta->links() }}
@endsection
