@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Hello Backpackers, enjoy in our website</h1>
            <p class="lead">HalloBackpacker.id merupakan website yang akan menyajikan informasi-informasi seputar Trip, Holliday, Traveller dan sebagainya. Kamu juga bisa bergabung menjadi author dari blog website ini dengan melakukan Sign in terlebih dahulu. Semuanya bisa kamu dapatkan secara gratis lho.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="/login" class="btn btn-primary btn-lg px-4 me-md-2">LOGIN</a>
              <a href="/register" class="btn btn-outline-secondary btn-lg px-4">SIGN IN</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/img/home.png" class="img ban-img img-fluid" style="height: 450px; padding-top: 10px;" alt="Gambar Pertama" />
          </div>
    </div>
</div>
  
<footer><p class="mt-5 text-muted text-center" style="padding-top:50px">&copy;HalloBackpacker.id 2022</p></footer>

@endsection

