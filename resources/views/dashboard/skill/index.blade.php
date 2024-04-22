@extends('dashboard.layout')

@section('konten')

    <form action="{{ route('skill.update')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">PROGRAMMING LANGUAGES & TOOLS</label>
            <input
                type="text"
                class="form-control form-control-sm skill"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Programming Languages & Tools" 
                value="{{ Session::get('_languages') }}"
            />
        </div>

        <div class="mb-3">
            <label for="_otherskills" class="form-label">OTHER SKILLS</label>
            <textarea class="form-control summernote" rows="5" name="_otherskills" required>{{ Session::get('_otherskills') }}</textarea>
        </div>
        
        
        <div class="pb-3">
            <button class="btn btn-primary text-dark">Simpan</button>
        </div>
    </form>
@endsection