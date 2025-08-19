<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPBOX ENGINEERING - Verify Email</title>
    <!-- Linking the CSS files -->
    <link href="{{ asset('vendor/fontawesome-free/css/svg-with-js.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .bg-login-image { background: url('{{ asset("img/undraw_profile.svg") }}') center / cover no-repeat; }
        .bg-gradient-primary { background: linear-gradient(135deg, #4e73df 0%, #224abe 100%); }
        .form-control-user { border-radius: 10rem; padding: 1.25rem 1rem; }
        .btn-user { border-radius: 10rem; padding: 0.75rem 1rem; }
        @media (max-width: 991.98px) { .bg-login-image { display:none; } }
        @media (max-width: 575.98px) { .card .p-5 { padding: 1.25rem !important; } }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container">
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
                                        <h1 class="h4 text-gray-900 mb-4">Verify Your Email</h1>
                                        <p class="text-gray-600">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?</p>
                                    </div>

                                    @if (session('status') == 'verification-link-sent')
                                        <div class="alert alert-success" role="alert">
                                            A new verification link has been sent to the email address you provided during registration.
                                        </div>
                                    @endif

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('verification.send') }}" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Resend Verification Email
                                            </button>
                                        </form>

                                        <hr>
                                        <div class="text-center">
                                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-secondary btn-user btn-block">
                                                    Log Out
                                                </button>
                                            </form>
                                        </div>
                                    </div>
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
