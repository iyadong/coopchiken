<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kandang Pintar - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #28a745; /* ubah warna background menjadi hijau */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background-color: white; /* ubah warna card menjadi putih */
        }
        .login-card:hover {
            transform: scale(1.05);
        }
        .card-header, .card-footer {
            border-radius: 15px 15px 0 0;
            background-color: #198754; /* ubah warna header card menjadi hijau tua */
            color: white;
        }
        .card-footer {
            border-radius: 0 0 15px 15px;
        }
        .btn-primary {
            border-radius: 25px;
            transition: background-color 0.3s ease-in-out;
            background-color: #198754; /* ubah warna tombol menjadi hijau tua */
            border-color: #198754; /* ubah warna border tombol menjadi hijau tua */
        }
        .btn-primary:hover {
            background-color: #155724; /* ubah warna tombol menjadi hijau tua lebih gelap saat hover */
            border-color: #155724; /* ubah warna border tombol menjadi hijau tua lebih gelap saat hover */
        }
        .form-control {
            border-radius: 10px;
            transition: box-shadow 0.3s ease-in-out;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25); /* ubah shadow input saat focus menjadi hijau tua */
        }
        .form-check-label {
            padding-left: 1.25rem;
        }
    </style>
</head>
<body>
    <div class="col-md-4">
        <div class="card login-card">
            <div class="card-header text-center">
                <h3>Kandang Pintar - Login</h3>
            </div>
            <div class="card-body">
                <form id="login-form" action="{{url('/auth/login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="text-white">Forgot password?</a><br>
                <span>Don't have an account? <a href="#" class="text-white">Sign up</a></span>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
