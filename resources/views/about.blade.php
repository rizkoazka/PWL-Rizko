@extends('layouts.main')

@section('container')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">About Us</h1>
        <p class="col-lg-10 fs-4">HelloBackpacker.id merupakan sebuah pendekatan kreatif berupa website & blog,  HelloBackpacker.id dapat memberikan solusi bagi para traveller dalam merancang rencana destinasi serta dapat menjadi website influencer yang menarik dengan berbagai fitur keren didalamnya. </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
            <p class="fw-bold lh-1 mb-3">Contact Us :</p>
          <div class=" mb-3">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
          </div>
          <div class=" mb-3">
            <input type="emailemail" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class=" mb-3">
            <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan anda ?" rows="3"></textarea>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">KIRIM</button>
      </div>
    </div>
    <footer><p class="mt-4 text-muted text-center">&copy;HalloBackpacker.id 2022</p></footer>
</div>


@endsection


    