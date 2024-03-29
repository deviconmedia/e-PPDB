<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <section class="hero" style="background-color: #002147;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5">
                <div class="logo-header text-center">
                  <img src="{{ asset('frontend/img/smklogo.png') }}" alt="Logo" width="120px">
                  <h3 class="mb-5 text-center">Register</h3>
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success" role="alert">
                      <div class="alert-body">
                          <strong>{{ $message }}</strong>
                      </div>
                  </div>
                  @elseif ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                </div>
                <form action="{{ route('auth.register') }}" method="POST" class="needs-validation" novalidate>
                  @csrf
                  <div class="form-outline mb-4">
                    <label class="form-label" for="fname">Nama Lengkap</label>
                    <input type="text" id="fname" name="fname" class="form-control form-control-lg @error('fname') is-invalid @enderror" value="{{ old('fname') }}" autofocus />
                    @error('fname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus />
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror 
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="passConf">Konfirmasi Password</label>
                    <input type="password" id="passConf" name="passConf" class="form-control form-control-lg @error('passConf') is-invalid @enderror"/>
                    @error('passConf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror 
                  </div>
                  <button class="btn btn-lg btn-block" style="background: #002147; color:white;" type="submit">Register</button>
                  <div class="footer-text text-center mt-3">
                    <p>Sudah punya akun? <a href="{{ route('auth.login') }}">Masuk!</a></p> <br>
                    <p>© <?=date('Y') ?> SMK Negeri 2 Cibinong</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>