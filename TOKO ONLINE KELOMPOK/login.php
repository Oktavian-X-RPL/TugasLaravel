<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Game Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #1b2838 url('https://community.akamai.steamstatic.com/public/images/v6/colored_body_top2.png') center top no-repeat;
            color: #c6d4df;
            font-family: 'Motiva Sans', Arial, Helvetica, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-container {
            background: #171a21;
            border-radius: 4px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 0;
            max-width: 800px;
            overflow: hidden;
        }
        .login-form {
            padding: 30px;
        }
        .login-sidebar {
            background: #1b2838;
            padding: 30px;
            text-align: center;
        }
        .login-sidebar img {
            width: 100%;
            max-width: 220px;
            margin-bottom: 20px;
        }
        h2, h4 {
            color: #fff;
            font-weight: 300;
        }
        .form-control {
            background: #32353c;
            border: 1px solid #26282e;
            color: #e9e9e9;
            border-radius: 2px;
            padding: 10px 15px;
            margin-bottom: 15px;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            background: #32353c;
            color: #e9e9e9;
            border-color: #4c9acc;
            box-shadow: 0 0 0 2px rgba(76, 154, 204, 0.3);
        }
        .form-floating > label {
            color: #a3a3a3;
            padding: 10px 15px;
        }
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            color: #c6d4df;
            background: #32353c;
            padding: 0 5px;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-check-input {
            background-color: #32353c;
            border-color: #4c9acc;
        }
        .form-check-input:checked {
            background-color: #4c9acc;
            border-color: #4c9acc;
        }
        .form-check-label {
            color: #c6d4df;
        }
        .btn-login {
            background: linear-gradient(to right, #47bfff, #1a44c2);
            border: none;
            font-weight: 500;
            padding: 10px 15px;
            width: 100%;
            border-radius: 2px;
            transition: all 0.3s;
        }
        .btn-login:hover {
            background: linear-gradient(to right, #5cc9ff, #2152d0);
        }
        .social-login {
            margin-top: 30px;
        }
        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        .social-btn:hover {
            transform: scale(1.1);
            color: white;
        }
        .text-muted {
            color: #8f98a0 !important;
        }
        .text-primary, a {
            color: #1999ff !important;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
            color: #66c0f4 !important;
        }
        .alert {
            background: rgba(0, 0, 0, 0.4);
            color: #ff6363;
            border: 1px solid #ff6363;
            border-radius: 2px;
        }
        .qr-login {
            background: rgba(0, 0, 0, 0.2);
            padding: 15px;
            border-radius: 4px;
            text-align: center;
            margin-top: 20px;
        }
        .qr-login img {
            max-width: 120px;
            margin: 10px auto;
        }
        .forgot-password {
            color: #8f98a0;
        }
        .forgot-password:hover {
            color: #1999ff;
        }
        .login-divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .login-divider::before,
        .login-divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #4d5255;
        }
        .login-divider span {
            padding: 0 10px;
            color: #8f98a0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card login-container">
                    <div class="row g-0">
                        <div class="col-md-5 login-sidebar">
                            <img src="images/Steam.png" alt="Logo" class="mb-4">
                            <h4 class="mb-3">Welcome to Steam</h4>
                            <p class="text-muted mb-4">The ultimate destination for playing, discussing, and creating games.</p>
                            
                            <div class="qr-login">
                                <p class="text-muted mb-2">Quick login with QR code</p>
                                <img src="/api/placeholder/120/120" alt="QR Code">
                                <p class="text-muted mt-2" style="font-size: 0.8rem;">Scan with the <br>Steam Mobile App</p>
                            </div>
                            
                            <div class="login-divider mt-4">
                                <span>OR</span>
                            </div>
                            
                            <div class="social-login mt-3">
                                <p class="text-muted mb-3">Login with</p>
                                <a href="#" class="social-btn" style="background: #3b5998;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-btn" style="background: #db4437;">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-btn" style="background: #5865f2;">
                                    <i class="fab fa-discord"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 login-form">
                            <h2 class="mb-4">Sign In</h2>
                            <?php if(isset($error)): ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php endif; ?>
                            <form method="POST" action="login.php">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username or Email" required>
                                    <label for="username">Username or Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <a href="#" class="forgot-password">Forgot your password?</a>
                                </div>
                                <button type="submit" class="btn btn-primary btn-login">Sign In</button>
                                
                                <div class="login-divider mt-4 mb-4">
                                    <span>New to Steam?</span>
                                </div>
                                
                                <p class="text-center mb-2">
                                    <a href="register.php" class="text-primary">Create a new account</a>
                                </p>
                                <p class="text-center text-muted" style="font-size: 0.8rem;">
                                    By signing in, you agree to our <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>