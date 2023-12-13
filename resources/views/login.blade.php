</html>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 06:42:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('reg/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('reg/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('reg/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('reg/css/iofrm-theme2.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="#">
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
                <span class="d-flex m-3"><a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                  </svg></a></span>
                <div class="form-content">
                    <div class="form-items">
                        <h3>Kelola data Website mu</h3>
                        <p>Silahkan login terlebih dahulu sebelum mengelola data anda.</p>
                        <div class="page-links">
                            <a href="/login" class="active">Login</a><a href="/register">Register</a>
                        </div>
                        @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                        @elseif (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}     
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                            <input class="form-control" type="text" name="email" placeholder="Alamat E-mail" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <input type="checkbox" id="chk1"><label for="chk1">Rememeber me</label>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget2.html">Forget password?</a>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('reg/js/jquery.min.js')}}"></script>
<script src="{{asset('reg/js/popper.min.js')}}"></script>
<script src="{{asset('reg/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reg/js/main.js')}}"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 06:42:55 GMT -->
</html>
