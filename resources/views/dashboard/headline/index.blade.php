@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-archway"></i> Headline</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
    <div class="col-lg-12 d-flex justify-content-around flex-wrap">
      @foreach ($headlines as $head)
      <div class="card" style="width: 18rem;">
        <img src="/storage/{{ $head->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" >{{ $head->title }}</h5>
          <p class="card-text" >{{ $head->body }}</p>
          <a href="#" class="btn btn-primary"><i class="bi bi-pencil"></i> UBAH</a>
        </div>
      </div>
      @endforeach
        {{-- <div class="card" style="width: 18rem;">
          <img src="/storage/images/slider2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Headline 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary"><i class="bi bi-pencil"></i> UBAH</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="/storage/images/slider3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Headline 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary"><i class="bi bi-pencil"></i> UBAH</a>
          </div>
        </div> --}}
      </div>
@endsection