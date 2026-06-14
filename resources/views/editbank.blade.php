@extends('template')
@section('title', 'Data Bank')
@section('konten')

<a href="/bank" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($bank as $b)

    <div class="card">
        <div class="card-header">
            Form Edit Data Bank
        </div>

        <div class="card-body">
            <form action="/Bank/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $b->kodebank }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Bank</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" required value="{{ $b->merkbank }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Bank</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required value="{{ $b->jumlah }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia (Y/N)</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $b->tersedia == 'Y' ? 'selected' : '' }}>Y (Ya, Tersedia)</option>
                            <option value="N" {{ $b->tersedia == 'N' ? 'selected' : '' }}>N (Tidak Tersedia)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endforeach

@endsection
