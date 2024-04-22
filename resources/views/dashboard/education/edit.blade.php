@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{ route('education.index') }}" class="btn btn-secondary">
            << kembali</a>
    </div>
    <form action="{{ route('education.update', $data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="tipe" value="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">Nama Universitas</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Nama Universitas" 
                value="{{ $data->judul }}"
            />
        </div>

        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Nama Fakultas" 
                value="{{ $data->info1 }}"
            />
        </div>

        <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info2"
                id="info2"
                aria-describedby="helpId"
                placeholder="Nama Prodi" 
                value="{{ $data->info2 }}"
            />
        </div>

        <div class="mb-3">
            <label for="info3" class="form-label">IPK</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info3"
                id="info3"
                aria-describedby="helpId"
                placeholder="Nama Prodi" 
                value="{{ $data->info3 }}"
            />
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" 
                    class="form-control form control-sm" 
                    name="tgl_mulai" 
                    placeolder="dd/mm/yyyy"
                    value="{{ $data->tgl_mulai }}"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" 
                    class="form-control form control-sm" 
                    name="tgl_akhir" 
                    placeolder="dd/mm/yyyy"
                    value="{{ $data->tgl_akhir }}"></div>
            </div>
        </div>
        <div class="pb-3">
            <button class="btn btn-primary text-dark">Simpan</button>
        </div>
    </form>
@endsection