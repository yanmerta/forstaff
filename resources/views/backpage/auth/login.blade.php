<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background: url('{{ asset('assets/template_admin/images/gb.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Admin</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/template_admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template_admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template_admin/dist/css/loading.css') }}">
    <link href="{{ asset('assets/template_admin/dist/img/logocom.png') }}" rel="icon"
        media="(prefers-color-scheme: light)" />
    <link href="{{ asset('assets/template_admin/dist/img/logocom.png') }}" rel="icon"
        media="(prefers-color-scheme: dark)" />

    <link rel="mask-icon" href="{{ asset('assets/template_admin/dist/img/logocom.png') }}" color="#000000">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">
                <img src="{{ asset('assets/template_user/assets/img/hub-pasien/logo2.png') }}" class="img-fluid"
                    width="150" height="auto">

                <br>
                {{-- <img src="{{ asset('assets/template_admin/dist/img/logo-sistem-atk.png') }}" class="img-fluid"> --}}
            </a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Selamat Datang, silahkan login akun Admin anda!
                </p>
                <!-- Form -->
                <form action="{{ route('login.proses') }}" method="post" class="form-send">
                    @method('POST')
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Password" />
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class='container-loading d-none'>
        <div class='loader'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--text'></div>
            <div class='loader--desc'></div>
        </div>
    </div>

    <script src="{{ asset('assets/template_admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/template_admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/template_admin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/template_admin/dist/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire('Success', '{{ $message }}', 'success');
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('Failed', '{{ $message }}', 'error');
        </script>
    @endif

</body>

</html>
