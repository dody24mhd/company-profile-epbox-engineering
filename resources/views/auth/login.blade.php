<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPBOX ENGINEERING - Login</title>
    <!-- Linking the CSS files -->
    <link href="{{ asset('vendor/fontawesome-free/css/svg-with-js.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        :root {
            --navy: #0F1C3F;
            --dark-navy: #0A1128;
            --sky-blue: #1E90FF;
        }

        .bg-login-image {
            position: relative;
            overflow: hidden;
            background: url("{{ asset('img/logo white.png') }}") center/55% auto no-repeat,
            radial-gradient(1200px 600px at -10% 10%, rgba(30, 144, 255, 0.12), transparent 60%),
            radial-gradient(800px 400px at 110% 90%, rgba(0, 191, 255, 0.12), transparent 60%),
            linear-gradient(135deg, var(--dark-navy) 0%, var(--navy) 70%);
        }

        .bg-login-image::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(200px 200px at 20% 30%, rgba(255, 255, 255, 0.06), transparent 60%),
                radial-gradient(300px 300px at 80% 70%, rgba(255, 255, 255, 0.04), transparent 60%);
            pointer-events: none;
        }

        .bg-login-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(120deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px),
                linear-gradient(60deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px, 40px 40px;
            opacity: .35;
            mix-blend-mode: overlay;
            pointer-events: none;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--dark-navy) 0%, var(--navy) 70%);
        }

        .form-control-user {
            border-radius: 10rem;
            padding: 1.25rem 1rem;
        }

        .btn-user {
            border-radius: 10rem;
            padding: 0.75rem 1rem;
        }

        /* brand the primary button to match reference palette */
        .btn-primary {
            background-color: var(--sky-blue);
            border-color: var(--sky-blue);
        }

        .btn-primary:hover {
            background-color: #187ae6;
            border-color: #187ae6;
        }

        /* animated light-blue zigzag pattern outside the card */
        .zigzag-layer {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            opacity: .12;
            background-size: 40px 20px, 40px 20px, 40px 20px, 40px 20px;
            background-image:
                linear-gradient(135deg, rgba(30, 144, 255, .6) 25%, transparent 25%),
                linear-gradient(225deg, rgba(30, 144, 255, .6) 25%, transparent 25%),
                linear-gradient(315deg, rgba(30, 144, 255, .6) 25%, transparent 25%),
                linear-gradient(45deg, rgba(30, 144, 255, .6) 25%, transparent 25%);
            background-position: 0 0, 20px 0, 20px -10px, 0 10px;
            animation: zigzagMove 20s linear infinite;
            mix-blend-mode: screen;
        }

        @keyframes zigzagMove {
            0% {
                background-position: 0 0, 20px 0, 20px -10px, 0 10px;
            }

            100% {
                background-position: 40px 0, 60px 0, 60px -10px, 40px 10px;
            }
        }

        .login-container {
            position: relative;
            z-index: 1;
        }

        @media (max-width: 991.98px) {

            /* hide image on tablets and below */
            .bg-login-image {
                display: none;
            }
        }

        @media (max-width: 575.98px) {

            /* tighten paddings on phones */
            .card .p-5 {
                padding: 1.25rem !important;
            }

            .form-control-user {
                padding: 1rem .9rem;
            }
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="zigzag-layer"></div>
    <div class="container login-container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="mb-4 d-lg-none">
                                            <img src="{{ asset('img/logo epbox.svg') }}" alt="EPBOX ENGINEERING" style="height:48px">
                                        </div>
                                        <h1 class="h4 text-gray-900 mb-1">Welcome Back!</h1>
                                        <div class="small text-muted mb-4">beyond boundaries, we command control</div>
                                    </div>

                                    <!-- Session Status -->
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <form method="POST" action="{{ route('login') }}" class="user">
                                        @csrf

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}"
                                                placeholder="Enter Email Address..." required autofocus>
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="password" name="password"
                                                placeholder="Password" required>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                                <label class="custom-control-label" for="remember_me">Remember Me</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                        <hr>
                                        <div class="text-center small text-muted">
                                            Trouble signing in? Please contact your super admin.
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>