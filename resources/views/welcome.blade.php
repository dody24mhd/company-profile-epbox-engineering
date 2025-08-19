<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPBOX ENGINEERING - Control Panel System Specialist</title>
    <link href="{{ asset('vendor/fontawesome-free/css/svg-with-js.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
            <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            text-align: center;
            color: white;
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .btn-hero {
            border-radius: 10rem;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            margin: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-hero:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .company-logo {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .company-tagline {
            font-size: 1.2rem;
            margin-bottom: 1.25rem;
            opacity: 0.95;
        }

        .company-description {
            font-size: 1.05rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.25rem;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            height: 100%;
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 0.75rem;
            color: #ffd700;
        }

        .feature-title {
            font-size: 1.05rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .feature-desc {
            font-size: 0.95rem;
            opacity: 0.9;
            margin: 0;
        }

        @media (min-width: 768px) {
            .company-logo {
                font-size: 3.25rem;
            }

            .company-tagline {
                font-size: 1.25rem;
            }

            .company-description {
                font-size: 1.1rem;
            }

            .feature-icon {
                font-size: 2.25rem;
            }
        }

        @media (min-width: 992px) {
            .company-logo {
                font-size: 3.5rem;
            }

            .company-tagline {
                font-size: 1.35rem;
            }
        }
            </style>
    </head>

<body class="bg-gradient-primary">
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="company-logo">EPBOX ENGINEERING</div>
                <div class="company-tagline">Control Panel System Specialist</div>
                <p class="company-description">
                    Leading provider of innovative control panel solutions for industrial automation,
                    electrical systems, and smart building management. We deliver cutting-edge technology
                    with reliability and precision.
                </p>

                <div class="row g-3 g-md-4 mb-4">
                    <div class="col-12 col-md-4">
                        <div class="feature-item h-100">
                            <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                            <div class="feature-title">Industrial Automation</div>
                            <p class="feature-desc">Advanced control systems for manufacturing</p>
                        </div>
                                </div>
                    <div class="col-12 col-md-4">
                        <div class="feature-item h-100">
                            <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                            <div class="feature-title">Electrical Control</div>
                            <p class="feature-desc">Power distribution & protection systems</p>
                                        </div>
                                    </div>
                    <div class="col-12 col-md-4">
                        <div class="feature-item h-100">
                            <div class="feature-icon"><i class="fas fa-building"></i></div>
                            <div class="feature-title">Smart Buildings</div>
                            <p class="feature-desc">Building management & automation</p>
                        </div>
                    </div>
                </div>

                @auth
                <a href="{{ route('admin.dashboard') }}" class="btn btn-light btn-hero">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    Go to Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="btn btn-light btn-hero">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Login to Admin Panel
                </a>
                @endauth
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    </body>

</html>