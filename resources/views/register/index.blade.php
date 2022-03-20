@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">

        <main class="form-register">
            <img class="mb-2 mt-3 mx-auto d-block" src="img/logo.png" alt="Backpacker Logo" width="78" height="90">
            <h1 class="h3 mb-3 fw-normal text-center">Daftar disini</h1>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                <label for="name">Nama Lengkap</label>

                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}"> 
                <label for="username">Username</label>

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="contoh@gmail.com" required value="{{ old('email') }}">
                <label for="email">Alamat Email</label>

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

              </div>
        
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
              <small class="d-block text-center mt-2">Sudah punya akun? <a href="/login">Login Sekarang!</a></small>
            </form>

        </main>
    </div>
</div>

<footer><p class="mt-5 text-muted text-center" style="padding-top:20px">&copy;HalloBackpacker.id 2022</p></footer>

  
@endsection