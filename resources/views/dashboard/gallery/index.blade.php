@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-image-plus"></i> Gallery</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="col-lg-12 mx-5 mb-2">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Gambar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gambar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/gallery" method="post" class="mb-5" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                    <label for="image" class="form-label">Gambar :</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div> 
                @enderror
              </div>
              {{-- <button type="submit" class="btn btn-primary mt-3">Tambah Gambar</button> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="col-lg-12 d-flex justify-content-around flex-wrap">
      @foreach ($gallery as $item)
      <div class="card" style="width: 20rem; margin:5px;">
        <img src="/storage/{{ $item->image }}" class="card-img-top" alt="..." style="max-height: 150px; object-fit:cover;">
        <div class="card-body">
            {{-- <h5 class="card-title">Headline 1</h5> --}}
            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> HAPUS</a>
          </div>
        </div>
        @endforeach
      </div>
@endsection