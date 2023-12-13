{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
    alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Register</h1>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control"
                                name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 06:45:29 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('reg/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reg/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reg/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reg/css/iofrm-theme2.css') }}">
</head>

<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
            <img src="{{ asset('img/footer.png') }}" alt="Logo Fashion">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Kelola data Website mu.</h3>
                        <p>Lakukan registrasi jika belum mempunyai akun.</p>
                        <div class="page-links">
                            <a href="/login">Login</a><a href="/register" class="active">Register</a>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="name" id="name"
                                placeholder="Masukkan Nama" required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <input class="form-control" type="email" name="email" id="email"
                                placeholder="Alamat E-mail" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <input class="form-control" type="password" name="password" id="password"
                                placeholder="Password" required autofocus>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('reg/js/jquery.min.js') }}"></script>
    <script src="{{ asset('reg/js/popper.min.js') }}"></script>
    <script src="{{ asset('reg/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('reg/js/main.js') }}"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 06:45:29 GMT -->

</html>
