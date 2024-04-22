@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{ route('experience.index') }}" class="btn btn-secondary">
            << kembali</a>
    </div>
    <form action="{{ route('experience.store')}}" method="POST">
        @csrf
        <input type="hidden" name="tipe" value="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">Posisi</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Posisi" 
                value="{{ Session::get('judul') }}"
            />
        </div>

        <div class="mb-3">
            <label for="info1" class="form-label">Acara</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Acara" 
                value="{{ Session::get('info1') }}"
            />
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" 
                    class="form-control form control-sm" 
                    name="tgl_mulai" 
                    placeolder="dd/mm/yyyy"
                    value="{{ Session::get('tgl_mulai') }}"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" 
                    class="form-control form control-sm" 
                    name="tgl_akhir" 
                    placeolder="dd/mm/yyyy"
                    value="{{ Session::get('tgl_akhir') }}"></div>
            </div>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{Session::get('isi')}}</textarea>
        </div>
        
        <div class="pb-3">
            <button class="btn btn-primary text-dark">Simpan</button>
        </div>
    </form>
@endsection