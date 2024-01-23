@extends('dashboard.layouts.main')
@section('container')
@if (session()->has('success'))
<div class="mt-3 pt-3">
    <div class="alert alert-success col-lg-10 mt-5" role="alert">
    {{ session('success') }}
    </div>
</div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="uil uil-megaphone"></i> Fasilitas</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/facility/{{ $fasilitas->id }}" method="post" class="mb-5" enctype="multipart/form-data">
    @method("put")
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Fasilitas :</label>
    <input type="text" name="nama" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Headline Title" autofocus value="{{ old('title',$fasilitas->nama) }}">
    @error('nama')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
        <label for="image" class="form-label">image :</label>
        <input type="hidden" name="oldImage" value="{{ $fasilitas->image }}"> 
        <img src="{{ asset('storage/'.$fasilitas->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
   </div>
    
  <div class="mb-3">
    <label for="body" class="form-label">Text : </label>
    @error('body')
        <p class="text-danger">
            {{$message}}
        </p> 
    @enderror
        <textarea name="body" id="body" cols="1" rows="1" required>
          {{ old("body",$fasilitas->body) }}
        </textarea>
  </div>


  <button type="submit" class="btn btn-primary mt-3">Update Headline</button>
</form>
</div>
@endsection