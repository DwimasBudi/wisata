@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-megaphone"></i> About</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
  <form action="/dashboard/about/{{ $about->id }}" method="post" class="mb-5" enctype="multipart/form-data">
    @method("put")  
    @csrf
    <div class="mb-3">
          <label for="image" class="form-label">image :</label>
          <input type="hidden" name="oldImage" value="{{ $about->image }}"> 
          <img src="{{ asset('storage/'.$about->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
          <div class="invalid-feedback">
              {{$message}}
          </div> 
      @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Post Title" value="{{ old('title',$about->title) }}">
      @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div> 
      @enderror
    </div>
    <div class="mb-3">
      <label for="video" class="form-label">Youtube Link:</label>
      <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" id="title" placeholder="New Post Title" value="{{ old('title',$about->video) }}">
      @error('video')
          <div class="invalid-feedback">
              {{$message}}
          </div> 
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body : </label>
      @error('sambutan')
          <p class="text-danger">
              {{$message}}
          </p> 
      @enderror
          <textarea name="body" id="body" cols="1" rows="1" required>
            {{ old("visi",$about->body) }}
          </textarea>
    </div>


    <button type="submit" class="btn btn-primary mt-3">Update About</button>
  </form>
</div>
@endsection