<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentalyuk</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        nav {
            background: #F5F5DC; /* Warna krem */
            padding: 12px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
        }
        .logo {
            display: flex;
            align-items: center;
            font-size: 22px;
            font-weight: 600;
        }
        .logo img {
            height: 80px;
            margin-right: 10px;
        }
        .logo a {
            color: #333;
            text-decoration: none;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 5px; /* Jarak antar menu diperkecil */
            margin: 0;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: #28A745; /* Warna hijau */
            text-decoration: none;
            font-weight: 600;
            padding: 8px 10px;
            font-size: 15px;
            transition: 0.3s;
        }
        nav ul li a:hover {
            background: rgba(40, 167, 69, 0.2);
            border-radius: 5px;
        }
        .search-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .search-container input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .search-container button {
            background: #333;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .search-container button:hover {
            background: #555;
        }
        .btn-booking {
            background: #25D366;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            transition: 0.3s;
        }
        .btn-booking i {
            font-size: 18px;
        }
        .btn-booking:hover {
            background: #1DA851;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('image/logorentalmobil-removebg-preview.png') }}" alt="Logo">
            <a href="{{ route('home') }}">Rental Mobil</a>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
            <li><a href="{{ route('cars.index') }}">Rental Mobil</a></li>
            <li><a href="{{ route('gallery') }}">Galeri</a></li>
            <li><a href="{{ route('artikel') }}">Artikel</a></li>
            <li><a href="{{ route('contact') }}">Kontak</a></li>
        </ul>
        <div class="search-container">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Cari mobil..." required>
                <button type="submit">🔍</button>
            </form>
            <a href="https://wa.me/6281234567890" class="btn-booking" target="_blank">
                <i class="fab fa-whatsapp"></i> Booking Sekarang!
            </a>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
