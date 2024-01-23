@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-building"></i> Fasilitas</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="col-lg-12 mb-2">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Fasilitas
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Fasilitas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/facility" method="post" class="mb-5" enctype="multipart/form-data">
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
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Fasilitas</label>
                <input type="text" name="nama" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Post Title" autofocus value="{{ old('title') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div> 
                @enderror
              </div>
              <div class="mb-3">
                <label for="body" class="form-label">Keterangan :</label>
                <textarea name="body" id="body" cols="30" rows="20"></textarea>
                {{-- <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Post Title" autofocus value="{{ old('title') }}"> --}}
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
        @foreach ($fasilitas as $item)
        <div class="card m-2" style="width: 18rem;">
          <img src="/storage/{{ $item->image }}" class="card-img-top" alt="..." style="max-height: 180px; object-fit:cover;" >
          <div class="card-body">
            <h5 class="card-title">{{ $item->nama }}</h5>
            <p class="card-text">{!! $item->body !!}</p>
            <a href="/dashboard/facility/{{ $item->id }}/edit" class="btn btn-primary"><i class="bi bi-pencil"></i> UBAH</a>
            <form action="/dashboard/facility/{{ $item->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> HAPUS</button>
                   {{-- <a href="" class="badge text-bg-danger"></a> --}}
            </form>
          </div>
        </div>
        @endforeach
      </div>
@endsection