<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Steam - Steam</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #1b2838;
            color: #c7d5e0;
        }
        
        a {
            text-decoration: none;
            color: #c7d5e0;
        }
        
        /* Header Styles */
        header {
            background-color: #171a21;
            padding: 10px 0;
            width: 100%;
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .logo img {
            height: 40px;
        }
        
        .header-nav {
            display: flex;
        }
        
        .header-nav a {
            padding: 0 15px;
            font-size: 14px;
        }
        
        .header-nav a:hover {
            color: #66c0f4;
        }
        
        /* Main Content */
        main {
            max-width: 940px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .register-container {
            background-color: #171a21;
            border-radius: 4px;
            padding: 20px;
            margin-top: 20px;
        }
        
        .page-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }
        
        .register-info {
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 1.5;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #67c1f5;
        }
        
        .form-control {
            width: 100%;
            background-color: #32353c;
            border: 1px solid #4e5157;
            border-radius: 3px;
            padding: 8px 12px;
            color: #e9e9e9;
            font-size: 14px;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #67c1f5;
        }
        
        .form-hint {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #8f98a0;
        }
        
        .form-error {
            display: none;
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }
        
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .checkbox-input {
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .checkbox-label {
            font-size: 13px;
            line-height: 1.5;
        }
        
        .btn-primary {
            background-color: #2a475e;
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .btn-primary:hover {
            background-color: #3b6185;
        }
        
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 30px 0;
        }
        
        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #3a4554;
        }
        
        .separator::before {
            margin-right: 10px;
        }
        
        .separator::after {
            margin-left: 10px;
        }
        
        .login-prompt {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
        }
        
        .login-prompt a {
            color: #67c1f5;
        }
        
        .login-prompt a:hover {
            text-decoration: underline;
        }
        
        .disclaimer {
            font-size: 12px;
            color: #8f98a0;
            margin-top: 30px;
            line-height: 1.6;
        }
        
        .captcha-container {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .captcha-box {
            background-color: #32353c;
            border: 1px solid #4e5157;
            border-radius: 3px;
            width: 300px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }
        
        /* Footer */
        footer {
            background-color: #171a21;
            padding: 20px 0;
            margin-top: 50px;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .footer-links a {
            margin: 0 10px;
            font-size: 12px;
        }
        
        .footer-links a:hover {
            color: #66c0f4;
        }
        
        .footer-info {
            text-align: center;
            font-size: 12px;
            color: #8f98a0;
            line-height: 1.6;
        }
        
        .footer-logo img {
            height: 30px;
            margin-bottom: 10px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            main {
                padding: 20px 15px;
            }
            
            .captcha-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.html"><img src="/api/placeholder/140/40" alt="Steam Logo"></a>
            </div>
            <nav class="header-nav">
                <a href="index.html">Toko</a>
                <a href="#">Komunitas</a>
                <a href="#">Tentang</a>
                <a href="#">Dukungan</a>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main>
        <h1 class="page-title">Buat Akun Steam Baru</h1>
        
        <div class="register-container">
            <div class="register-info">
                <p>Steam adalah tempat terbaik untuk memainkan game PC, MacOS dan Linux. Bergabunglah dengan lebih dari 100 juta pengguna hari ini, dan akses lebih dari 25.000 judul game di perpustakaan kami.</p>
            </div>
            
            <form id="register-form" action="#" method="post">
                <div class="form-group">
                    <label class="form-label" for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <span class="form-hint">Anda akan menerima email konfirmasi di alamat ini</span>
                    <span class="form-error" id="email-error">Silakan masukkan alamat email yang valid</span>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="confirm-email">Konfirmasi Alamat Email</label>
                    <input type="email" id="confirm-email" name="confirm-email" class="form-control" required>
                    <span class="form-error" id="confirm-email-error">Alamat email tidak cocok</span>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="country">Negara/Wilayah Residensi</label>
                    <select id="country" name="country" class="form-control" required>
                        <option value="">-- Pilih negara/wilayah --</option>
                        <option value="ID">Indonesia</option>
                        <option value="MY">Malaysia</option>
                        <option value="SG">Singapura</option>
                        <option value="US">Amerika Serikat</option>
                        <option value="GB">Inggris</option>
                        <option value="JP">Jepang</option>
                        <!-- Tambahkan negara lainnya -->
                    </select>
                    <span class="form-hint">Negara residensi Anda menentukan tarif pajak dan mata uang yang digunakan</span>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="username">Nama Pengguna Steam</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                    <span class="form-hint">Nama pengguna ini akan ditampilkan di profil dan toko Steam Anda</span>
                    <span class="form-error" id="username-error">Nama pengguna ini sudah digunakan</span>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <span class="form-hint">Password harus minimal 8 karakter dengan kombinasi huruf dan angka</span>
                    <span class="form-error" id="password-error">Password tidak memenuhi syarat keamanan</span>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="confirm-password">Konfirmasi Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="form-control" required>
                    <span class="form-error" id="confirm-password-error">Password tidak cocok</span>
                </div>
                
                <div class="captcha-container">
                    <label class="form-label">Verifikasi Keamanan</label>
                    <div class="captcha-box">
                        <img src="/api/placeholder/200/60" alt="CAPTCHA">
                    </div>
                    <span class="form-hint">Masukkan karakter yang Anda lihat dalam gambar di atas</span>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="agree-terms" name="agree-terms" class="checkbox-input" required>
                    <label for="agree-terms" class="checkbox-label">Saya berusia 13 tahun ke atas dan menyetujui <a href="#">Perjanjian Pelanggan Steam</a> dan <a href="#">Kebijakan Privasi Steam</a>.</label>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter" name="newsletter" class="checkbox-input">
                    <label for="newsletter" class="checkbox-label">Saya ingin menerima email tentang produk, acara, dan penawaran dari Steam.</label>
                </div>
                
                <button type="submit" class="btn-primary">Buat Akun</button>
            </form>
            
            <div class="separator">Atau</div>
            
            <div class="login-prompt">
                <p>Sudah memiliki akun? <a href="#">Masuk ke akun Steam Anda</a></p>
            </div>
            
            <div class="disclaimer">
                <p>Dengan membuat akun ini, Anda setuju untuk mematuhi Perjanjian Pelanggan Steam dan Kebijakan Privasi Steam kami. Anda juga menyetujui penggunaan cookie kami seperti yang dijelaskan dalam Kebijakan Privasi.</p>
                <p>Semua merek dagang adalah properti dari pemiliknya masing-masing di AS dan negara lain. Semua hak dilindungi undang-undang.</p>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="/api/placeholder/160/40" alt="Valve Logo">
            </div>
            <div class="footer-links">
                <a href="#">Tentang Valve</a>
                <a href="#">Dukungan</a>
                <a href="#">Perjanjian Legal</a>
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Karir</a>
                <a href="#">Pemasangan Steam</a>
                <a href="#">Steam Works</a>
            </div>
            <div class="footer-info">
                <p>© 2025 Valve Corporation. Semua hak dilindungi undang-undang. Semua merek dagang adalah properti dari pemiliknya di AS dan negara lain.</p>
                <p>Harga termasuk PPN di mana berlaku. <a href="#">Kebijakan Privasi</a> | <a href="#">Perjanjian Legal</a> | <a href="#">Perlindungan Konsumen</a></p>
            </div>
        </div>
    </footer>
    
    <script>
        // Form validation
        document.getElementById('register-form').addEventListener('submit', function(e) {
            let isValid = true;
            
            // Validate email
            const email = document.getElementById('email').value;
            const confirmEmail = document.getElementById('confirm-email').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailRegex.test(email)) {
                document.getElementById('email-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('email-error').style.display = 'none';
            }
            
            if (email !== confirmEmail) {
                document.getElementById('confirm-email-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('confirm-email-error').style.display = 'none';
            }
            
            // Validate username
            // In a real application, you would check if the username is unique
            const username = document.getElementById('username').value;
            if (username.length < 3) {
                document.getElementById('username-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('username-error').style.display = 'none';
            }
            
            // Validate password
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            
            if (!passwordRegex.test(password)) {
                document.getElementById('password-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('password-error').style.display = 'none';
            }
            
            if (password !== confirmPassword) {
                document.getElementById('confirm-password-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('confirm-password-error').style.display = 'none';
            }
            
            if (!isValid) {
                e.preventDefault();
            } else {
                // This is where you would typically submit the form via AJAX
                alert('Formulir berhasil dikirim! Silakan periksa email Anda untuk konfirmasi.');
                
                // Redirect to homepage after successful registration
                // In a real application, this would happen after email verification
                setTimeout(() => {
                    window.location.href = 'index.html';  // Redirect to homepage
                }, 2000);
                
                e.preventDefault(); // Prevent actual form submission for this demo
            }
        });
    </script>
</body>
</html>