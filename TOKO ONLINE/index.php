<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link rel="stylesheet" href="bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css" >
    <style>
        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="bg-dark text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3">Warung Pienxy</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="#home" class="nav-link text-white">HOME</a></li>
                    <li class="nav-item"><a href="#products" class="nav-link text-white">PRODUCT</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link text-white">ABOUT</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link text-white">CONTACT</a></li>
                    <li class="nav-item"><a href="#cart" class="nav-link text-white">CART</a></li>
                    <li class="nav-item"><a href="#register" class="nav-link text-white">LOGIN</a></li>
                </ul>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="py-5 bg-light">
        <div class="container text-center"> 
            <h2>Selamat Datang di Warung Kami!</h2>
            <p>Dapatkan makanan terbaik dengan harga terbaik.</p>
        </div>
    </section>

    <!-- Product Section -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Kami</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card product-item">
                        <img src="images/ayam.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ayam Goreng</h5>
                            <p class="card-text">Rp 10.000</p>
                            <button class="btn btn-success add-to-cart" data-name="Produk 1" data-price="100000">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-item">
                        <img src="images/esteh.jpeg" class="card-img-top" alt="Produk 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Es Teh</h5>
                            <p class="card-text">Rp 3.000</p>
                            <button class="btn btn-success add-to-cart" data-name="Produk 2" data-price="200000">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-item">
                        <img src="images/Nasi padang.png" class="card-img-top" alt="Produk 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nasi Padang</h5>
                            <p class="card-text">Rp 20.000</p>
                            <button class="btn btn-success add-to-cart" data-name="Produk 3" data-price="300000">Tambahkan ke Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Tentang Kami</h2>
            <p class="text-center">Kami adalah toko online terpercaya yang menyediakan berbagai produk makanan lezat dan bergizi dengan harga terbaik. Kepuasan pelanggan adalah prioritas utama kami.</p>
        </div>
    </section>  

    <section id="alamat" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Alamat Kami</h2>
            <p class="text-center">Jika anda ingin mengunjungi warung kami silahkan datang ke Jln Buduran No.2</p>
        </div>
    </section>  

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Kontak Kami</h2>
            <p class="text-center">Hubungi kami melalui email di <strong>warungpienxy.com</strong> atau telepon di <strong>+62 812 3456 7890</strong>.</p>
        </div>
    </section>

    <!-- Cart Section -->
    <section id="cart" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">CART list</h2>
            <ul id="cart-items" class="list-group mb-3"></ul>
            <h5>Total: Rp <span id="cart-total">0</span></h5>
            <div class="text-center">
                <button class="btn btn-primary" id="checkout-btn">Checkout</button>
            </div>
        </div>
    </section>

    <script>
        const cart = [];

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const name = button.dataset.name;
                const price = parseInt(button.dataset.price);
                const existingProduct = cart.find(product => product.name === name);

                if (existingProduct) {
                    existingProduct.quantity++;
                } else {
                    cart.push({ name, price, quantity: 1 });
                }

                updateCart();
            });
        });

        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');

            cartItems.innerHTML = '';
            let total = 0;

            cart.forEach(product => {
                const item = document.createElement('li');
                item.className = 'list-group-item d-flex justify-content-between align-items-center';
                item.innerHTML = `
                    ${product.name} (x${product.quantity})
                    <span>Rp ${product.price * product.quantity}</span>
                    <button class="btn btn-sm btn-danger ms-2" onclick="removeItem('${product.name}')">Hapus</button>
                `;
                cartItems.appendChild(item);
                total += product.price * product.quantity;
            });

            cartTotal.textContent = total;
        }

        function removeItem(name) {
            const index = cart.findIndex(product => product.name === name);
            if (index !== -1) {
                cart.splice(index, 1);
                updateCart();
            }
        }

        document.getElementById('checkout-btn').addEventListener('click', () => {
            if (cart.length === 0) {
                alert('CART kosong!');
            } else {
                alert('Checkout berhasil!');
                cart.length = 0;
                updateCart();
            }
        });
    </script>

    <script src="bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqxarZp5j8eGt1pq5zAMBOenv9JbLfzz9zSPrR33jklwF2H5DkLtS3qm9Ekf"></script>
</body>
</html>
