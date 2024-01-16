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
<a href="/dashboard/facility/create" class="btn btn-primary mb-3">Tambah Fasilitas</a>
    <div class="col-lg-12 d-flex justify-content-around flex-wrap">
        @foreach ($fasilitas as $item)
        <div class="card m-2" style="width: 18rem;">
          <img src="/storage/{{ $item->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ $item->body }}</p>
            <a href="/dashboard/facility/{{ $item->id }}/edit" class="btn btn-primary"><i class="bi bi-pencil"></i> UBAH</a>
            <a href="" class="btn btn-danger"><i class="bi bi-trash"></i> HAPUS</a>
          </div>
        </div>
        @endforeach
      </div>
@endsection