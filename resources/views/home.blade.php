<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Dr. Aya Aulia</title>
    <style>
        /* Styling Umum */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5efe6, #e6d5c3); /* Gradasi Putih ke Coklat Muda */
            color: #333;
        }

        /* Navigasi */
        nav {
            background-color: #d3b8a1; /* Coklat Muda */
            padding: 15px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            margin: 0 20px;
            padding: 12px 20px;
            border-radius: 30px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            background-color: #c6a289; /* Warna Coklat Muda lebih gelap saat hover */
            transform: scale(1.1);
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            padding: 80px 20px;
            background: linear-gradient(to bottom, #e6d5c3, #f5efe6); /* Gradasi Coklat Muda ke Putih */
            color: #5a4033; /* Warna coklat gelap untuk teks */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            position: relative;
        }

        header h1 {
            margin: 0;
            font-size: 48px;
            font-weight: 700;
            text-transform: uppercase;
            line-height: 1.5; /* Menampilkan dalam dua baris */
        }

        header p {
            margin-top: 15px;
            font-size: 24px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .header-image {
            max-width: 35%; /* Menyesuaikan ukuran gambar */
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Konten Utama */
        .content {
            padding: 50px 20px;
            text-align: center;
        }

        .content h2 {
            font-size: 36px;
            color: #c6a289; /* Coklat Muda lebih gelap */
            font-weight: 700;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 20px;
            line-height: 1.6;
            color: #555;
            margin-top: 20px;
        }

        /* Footer */
        footer {
            background-color: #5a4033; /* Warna coklat gelap */
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            position: relative;
            bottom: 0;
            width: 100%;
            border-top: 2px solid #e6d5c3; /* Batas Halus dengan Coklat Muda */
        }

        footer p {
            margin: 0;
        }

        /* Responsif untuk Tampilan Lebih Kecil */
        @media (max-width: 768px) {
            header h1 {
                font-size: 36px;
            }

            header p {
                font-size: 20px;
            }

            .content h2 {
                font-size: 30px;
            }

            .content p {
                font-size: 18px;
            }

            nav a {
                font-size: 16px;
                margin: 0 10px;
            }

            header {
                flex-direction: column;
                text-align: center;
            }

            .header-image {
                margin-top: 20px;
                max-width: 70%;
            }
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <nav>
        <a href="http://127.0.0.1:8000/">Home</a>
        <a href="http://127.0.0.1:8000/profile">Profile</a>
        <a href="http://127.0.0.1:8000/about">About</a>
        <a href="http://127.0.0.1:8000/contact">Contact</a>
    </nav>

    <!-- Header -->
    <header>
        <div>
            <h1>Care Your Skin,<br>Care Your Beauty</h1>
            <p>Perawatan kulit terbaik untuk kecantikan alami Anda dengan produk unggulan kami.</p>
        </div>
        <img src="{{ asset('img aya/beauty.jpg') }}" alt="beauty" class="header-image">
    </header>

    <!-- Konten Utama -->
    <div class="content">
        <h2>Perawatan Kulit Terbaik</h2>
        <p>Kami menawarkan berbagai layanan perawatan kulit yang dirancang khusus untuk memenuhi kebutuhan kulit Anda. Dengan menggunakan teknologi canggih dan produk berkualitas tinggi, Dr. Aya Aulia memastikan Anda mendapatkan perawatan terbaik untuk hasil yang maksimal.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Skincare Dr. Aya Aulia | Semua hak dilindungi</p>
    </footer>

</body>
</html>
