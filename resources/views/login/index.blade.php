@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">

      @if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <main class="form-signin">
            <img class="mb-2 mt-3 mx-auto d-block" src="img/logo.png" alt="Backpacker Logo" width="78" height="90">
            <h1 class="h3 mb-3 fw-normal text-center">Login disini</h1>

            <form action="/login" method="post">

              @csrf

              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <small class="d-block text-center mt-2">Belum punya akun? <a href="/register">Daftar Sekarang!</a></small>
            </form>

        </main>
    </div>
</div>

<footer><p class="mt-5 text-muted text-center" style="padding-top:20px">&copy;HalloBackpacker.id 2022</p></footer>

  
@endsection