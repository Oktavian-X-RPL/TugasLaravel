<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream - Platform Gaming Terpopuler</title>
    <style>
        /* Reset dan font dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #1b2838;
            color: #c6d4df;
        }
        
        /* Header styles */
        header {
            background-color: #171a21;
            padding: 10px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .logo {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            margin-right: 20px;
        }
        
        .main-nav {
            display: flex;
        }
        
        .main-nav a {
            color: #c6d4df;
            text-decoration: none;
            padding: 0 15px;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        .main-nav a:hover {
            color: #fff;
        }
        
        .auth-nav {
            display: flex;
            align-items: center;
        }
        
        .auth-nav a {
            color: #c6d4df;
            text-decoration: none;
            margin-left: 15px;
            font-size: 12px;
        }
        
        .auth-nav a:hover {
            color: #fff;
        }
        
        .install-button {
            background-color: #5c7e10;
            color: #fff;
            padding: 5px 15px;
            border-radius: 2px;
            font-weight: bold;
        }
        
        .install-button:hover {
            background-color: #8db83e;
        }
        
        /* Search bar */
        .search-container {
            background-color: #316282;
            border-radius: 3px;
            display: flex;
            align-items: center;
            padding: 5px;
            margin-left: 15px;
        }
        
        .search-container input {
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 5px;
            width: 200px;
            outline: none;
        }
        
        .search-container button {
            background-color: #5398c3;
            border: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 2px;
            cursor: pointer;
        }
        
        /* Main content */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 16px;
        }
        
        /* Secondary navigation */
        .secondary-nav {
            background-color: #2a475e;
            padding: 10px 0;
        }
        
        .secondary-nav .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            padding: 0 16px;
        }
        
        .secondary-nav a {
            color: #c6d4df;
            text-decoration: none;
            font-size: 13px;
            padding: 0 10px;
        }
        
        .secondary-nav a:hover {
            color: #fff;
        }
        
        /* Hero section */
        .hero-section {
            margin-top: 20px;
            position: relative;
            height: 350px;
            background: url('/api/placeholder/1200/350') center center;
            background-size: cover;
            border-radius: 3px;
            display: flex;
            align-items: flex-end;
        }
        
        .hero-content {
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            width: 100%;
            padding: 20px;
        }
        
        .hero-title {
            font-size: 24px;
            color: #fff;
            margin-bottom: 10px;
        }
        
        .hero-price {
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        .hero-button {
            background-color: #5c7e10;
            color: #fff;
            padding: 10px 20px;
            border-radius: 2px;
            font-weight: bold;
            display: inline-block;
            text-decoration: none;
        }
        
        .hero-button:hover {
            background-color: #8db83e;
        }
        
        /* Featured & Recommended */
        .section-title {
            margin: 30px 0 15px 0;
            font-size: 18px;
        }
        
        .game-carousel {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding-bottom: 10px;
        }
        
        .game-card {
            min-width: 280px;
            background-color: #2a475e;
            border-radius: 3px;
            overflow: hidden;
        }
        
        .game-image {
            width: 100%;
            height: 150px;
            background-color: #000;
            object-fit: cover;
        }
        
        .game-info {
            padding: 10px;
        }
        
        .game-title {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .game-price {
            font-size: 13px;
            color: #acdbf5;
        }
        
        .discount-tag {
            background-color: #4c6b22;
            color: #a4d007;
            padding: 2px 5px;
            border-radius: 2px;
            font-size: 12px;
            margin-right: 5px;
        }
        
        /* Special Offers */
        .special-offers {
            margin-top: 30px;
        }
        
        .offers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 15px;
        }
        
        /* Categories */
        .categories {
            margin-top: 30px;
        }
        
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 15px;
        }
        
        .category-card {
            height: 100px;
            background-color: #2a475e;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            background-position: center;
            background-size: cover;
            position: relative;
        }
        
        .category-card::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            top: 0;
            left: 0;
            z-index: 1;
        }
        
        .category-card span {
            position: relative;
            z-index: 2;
        }
        
        /* Footer */
        footer {
            background-color: #171a21;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
        }
        
        .footer-logo {
            margin-bottom: 20px;
        }
        
        .footer-links {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .footer-links a {
            color: #c6d4df;
            text-decoration: none;
            margin-right: 15px;
            margin-bottom: 8px;
            font-size: 13px;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .footer-copyright {
            font-size: 12px;
            color: #8f98a0;
            border-top: 1px solid #363c44;
            padding-top: 20px;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
        }
        
        .modal-content {
            background-color: #1b2838;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #2a475e;
            width: 400px;
            max-width: 90%;
            border-radius: 3px;
        }
        
        .modal-title {
            margin-bottom: 20px;
            font-size: 18px;
            color: #fff;
            text-align: center;
        }
        
        .modal-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #32404e;
            border: 1px solid #4e5f6f;
            color: #fff;
            border-radius: 2px;
        }
        
        .modal-form button {
            width: 100%;
            padding: 10px;
            background-color: #5c7e10;
            border: none;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            border-radius: 2px;
        }
        
        .modal-form button:hover {
            background-color: #8db83e;
        }
        
        .modal-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
        }
        
        .modal-footer a {
            color: #67c1f5;
            text-decoration: none;
        }
        
        .modal-footer a:hover {
            color: #fff;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .close:hover {
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <div class="logo">STREAM</div>
            <nav class="main-nav">
                <a href="#">Toko</a>
                <a href="#">Perpustakaan</a>
                <a href="#">Komunitas</a>
                <a href="#">Tentang</a>
                <a href="#">Dukungan</a>
            </nav>
        </div>
        <div class="auth-nav">
            <div class="search-container">
                <input type="text" placeholder="Cari game...">
                <button>Cari</button>
            </div>
            <a href="#" id="loginBtn">Masuk</a>
            <a href="#" class="install-button">Pasang Stream</a>
        </div>
    </header>
    
    <div class="secondary-nav">
        <div class="container">
            <div>
                <a href="#">Beranda</a>
                <a href="#">Penemuan</a>
                <a href="#">Daftar Keinginan</a>
                <a href="#">Poin Toko</a>
                <a href="#">Berita</a>
                <a href="#">Stats</a>
            </div>
            <div>
                <a href="#">Dompet: Rp 250.000</a>
                <a href="#">Notifikasi</a>
            </div>
        </div>
    </div>
    
    <div class="main-container">
        <div class="hero-section">
            <div class="hero-content">
                <img src="IMAGES/Horizon.jpg" alt="">
                <h2 class="hero-title">Game of the Year: Horizon Forbidden Dawn</h2>
                <div class="hero-price">Rp 729.000 <span class="discount-tag">-25%</span> Rp 547.500</div>
                <a href="#" class="hero-button">Beli Sekarang</a>
            </div>
        </div>
        
        <h2 class="section-title">UNGGULAN & REKOMENDASI</h2>
        <div class="game-carousel">
            <div class="game-card">
                <img src="IMAGES/Grand_Theft_Auto_V.png" alt="Game 1" class="game-image">
                <div class="game-info">
                    <h3 class="game-title">Grand Theft Auto V</h3>
                    <div class="game-price"><span class="discount-tag">-70%</span> Rp 165.000</div>
                </div>
            </div>
            <div class="game-card">
                <img src="IMAGES/Cyberpunk.webp" alt="Game 2" class="game-image">
                <div class="game-info">
                    <h3 class="game-title">Cyberpunk 2077</h3>
                    <div class="game-price"><span class="discount-tag">-33%</span> Rp 459.000</div>
                </div>
            </div>
            <div class="game-card">
                <img src="IMAGES/RDR2.jpg" alt="Game 3" class="game-image">
                <div class="game-info">
                    <h3 class="game-title">Red Dead Redemption 2</h3>
                    <div class="game-price"><span class="discount-tag">-50%</span> Rp 324.500</div>
                </div>
            </div>
            <div class="game-card">
                <img src="IMAGES/Elden ring.avif" alt="Game 4" class="game-image">
                <div class="game-info">
                    <h3 class="game-title">Elden Ring</h3>
                    <div class="game-price">Rp 599.000</div>
                </div>
            </div>
            <div class="game-card">
                <img src="/api/placeholder/280/150" alt="Game 5" class="game-image">
                <div class="game-info">
                    <h3 class="game-title">God of War</h3>
                    <div class="game-price"><span class="discount-tag">-40%</span> Rp 329.000</div>
                </div>
            </div>
        </div>
        
        <div class="special-offers">
            <h2 class="section-title">PENAWARAN SPESIAL</h2>
            <div class="offers-grid">
                <div class="game-card">
                    <img src="/api/placeholder/280/150" alt="Game Offer 1" class="game-image">
                    <div class="game-info">
                        <h3 class="game-title">Assassin's Creed Valhalla</h3>
                        <div class="game-price"><span class="discount-tag">-60%</span> Rp 239.600</div>
                    </div>
                </div>
                <div class="game-card">
                    <img src="/api/placeholder/280/150" alt="Game Offer 2" class="game-image">
                    <div class="game-info">
                        <h3 class="game-title">FIFA 25</h3>
                        <div class="game-price"><span class="discount-tag">-20%</span> Rp 639.000</div>
                    </div>
                </div>
                <div class="game-card">
                    <img src="/api/placeholder/280/150" alt="Game Offer 3" class="game-image">
                    <div class="game-info">
                        <h3 class="game-title">Resident Evil Village</h3>
                        <div class="game-price"><span class="discount-tag">-45%</span> Rp 346.000</div>
                    </div>
                </div>
                <div class="game-card">
                    <img src="/api/placeholder/280/150" alt="Game Offer 4" class="game-image">
                    <div class="game-info">
                        <h3 class="game-title">DOOM Eternal</h3>
                        <div class="game-price"><span class="discount-tag">-75%</span> Rp 137.500</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="categories">
            <h2 class="section-title">JELAJAHI BERDASARKAN KATEGORI</h2>
            <div class="category-grid">
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Aksi</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Petualangan</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>RPG</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Strategi</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Olahraga & Balapan</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Indie</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Multipemain</span>
                </a>
                <a href="#" class="category-card" style="background-image: url('/api/placeholder/280/150')">
                    <span>Free to Play</span>
                </a>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="footer-content">
            <div class="footer-logo">STREAM</div>
            <div class="footer-links">
                <a href="#">Tentang Steam</a>
                <a href="#">Hubungi Kami</a>
                <a href="#">Karir</a>
                <a href="#">Kartu Hadiah Steam</a>
                <a href="#">Steam News Hub</a>
                <a href="#">Pusat Bantuan</a>
                <a href="#">Perjanjian Langganan Steam</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Kebijakan Refund Steam</a>
                <a href="#">Cookie Settings</a>
            </div>
            <div class="footer-copyright">
                © 2024 Valve Corporation. Semua hak cipta dilindungi. Semua merek dagang adalah properti dari pemiliknya di A.S. dan negara lain. Semua harga termasuk PPN (jika berlaku).
            </div>
        </div>
    </footer>
    
    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeLoginModal">&times;</span>
            <h2 class="modal-title">MASUK</h2>
            <form class="modal-form">
                <input type="text" placeholder="Nama Pengguna Stream" required>
                <input type="password" placeholder="Kata Sandi" required>
                <button type="submit">Masuk</button>
            </form>
            <div class="modal-footer">
                <p>Tidak punya akun? <a href="#" id="showRegisterModal">Buat akun baru</a></p>
                <p><a href="#">Lupa detail masuk Anda?</a></p>
            </div>
        </div>
    </div>
    
    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeRegisterModal">&times;</span>
            <h2 class="modal-title">BUAT AKUN BARU</h2>
            <form class="modal-form">
                <input type="email" placeholder="Alamat Email" required>
                <input type="email" placeholder="Konfirmasi Alamat Email" required>
                <input type="text" placeholder="Nama Pengguna" required>
                <input type="password" placeholder="Kata Sandi" required>
                <input type="password" placeholder="Konfirmasi Kata Sandi" required>
                <button type="submit">Buat Akun</button>
            </form>
            <div class="modal-footer">
                <p>Sudah punya akun? <a href="#" id="showLoginModal">Masuk</a></p>
            </div>
        </div>
    </div>
    
    <script>
        // Modal functionality
        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');
        const loginBtn = document.getElementById('loginBtn');
        const closeLoginModal = document.getElementById('closeLoginModal');
        const closeRegisterModal = document.getElementById('closeRegisterModal');
        const showRegisterModal = document.getElementById('showRegisterModal');
        const showLoginModal = document.getElementById('showLoginModal');
        
        loginBtn.onclick = function() {
            loginModal.style.display = 'block';
        }
        
        closeLoginModal.onclick = function() {
            loginModal.style.display = 'none';
        }
        
        closeRegisterModal.onclick = function() {
            registerModal.style.display = 'none';
        }
        
        showRegisterModal.onclick = function() {
            loginModal.style.display = 'none';
            registerModal.style.display = 'block';
        }
        
        showLoginModal.onclick = function() {
            registerModal.style.display = 'none';
            loginModal.style.display = 'block';
        }
        
        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = 'none';
            }
            if (event.target == registerModal) {
                registerModal.style.display = 'none';
            }
        }
    </script>
</body>
</html>