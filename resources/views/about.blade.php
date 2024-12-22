<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tentang - Perawatan Dokter Kecantikan</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f7e4d4, #ffffff); /* Gradasi Coklat Muda ke Putih */
            color: #4a3628; /* Coklat tua untuk teks */
            text-align: center;
        }

        /* Header */
        header {
            padding: 60px 20px;
            background: linear-gradient(to right, #d9bfa3, #f7e4d4); /* Gradasi coklat muda */
            color: #4a3628; /* Coklat tua */
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        header h1 {
            font-size: 50px;
            margin: 0;
            font-weight: bold;
        }

        /* Konten */
        .content {
            padding: 40px 20px;
        }

        .content h2 {
            font-size: 36px;
            color: #a67a55; /* Coklat medium */
            font-weight: bold;
        }

        .content p {
            font-size: 18px;
            margin-top: 20px;
            line-height: 1.6;
            text-align: justify;
        }

        /* Treatment Cards */
        .treatment-card {
            display: inline-block;
            width: 30%;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* Putih */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .treatment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .treatment-img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .treatment-card h4 {
            font-size: 24px;
            color: #a67a55; /* Coklat medium */
            margin-bottom: 10px;
        }

        .treatment-card p {
            font-size: 16px;
            color: #4a3628; /* Coklat tua */
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #b45f04; /* Oranye gelap */
            margin-top: 10px;
        }

        /* Manfaat Section */
        .manfaat {
            background-color: #f7e4d4; /* Coklat muda */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .manfaat h3 {
            font-size: 28px;
            color: #a67a55;
            font-weight: bold;
        }

        .manfaat ul {
            text-align: left;
            font-size: 18px;
        }

        .manfaat li {
            margin: 10px 0;
        }

        /* Hubungi Kami Section */
        .contact-section {
            background-color: #a67a55; /* Coklat medium */
            color: white;
            padding: 40px 20px;
            margin-top: 40px;
            border-radius: 15px;
        }

        .contact-section h3 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-link {
            display: inline-block;
            padding: 15px 30px;
            background-color: #b45f04; /* Oranye gelap */
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .contact-link:hover {
            background-color: #8c4603; /* Oranye lebih gelap */
        }

        /* Footer */
        footer {
            text-align: center;
            background-color: #d9bfa3; /* Coklat muda */
            color: #4a3628; /* Coklat tua */
            padding: 25px;
            margin-top: 50px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }

        footer p {
            font-size: 14px;
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Perawatan Dokter Kecantikan</h1>
        <p>Solusi Kecantikan Alami dengan Teknologi Terbaik</p>
    </header>

    <!-- Konten -->
    <div class="content">
        <h2>Perawatan dan Facial Kami</h2>
        <p>Di bawah ini adalah beberapa perawatan yang kami tawarkan dengan harga terjangkau dan hasil terbaik, dilakukan oleh profesional medis kecantikan:</p>

        <!-- Treatment Cards -->
        <div class="treatment-card">
            <img src="{{ asset('img aya/laser.jpeg') }}" alt="laser" class="img-fluid rounded">
            <h4>Laser Treatment</h4>
            <p>Perawatan laser untuk mengatasi berbagai masalah kulit, termasuk noda hitam, bekas jerawat, dan kerutan. Proses ini membantu meremajakan kulit secara menyeluruh tanpa rasa sakit.</p>
            <p class="price">Harga: Rp 160.000</p>
        </div>

        <div class="treatment-card">
            <img src="{{ asset('img aya/whitening.jpeg') }}" alt="whitening" class="img-fluid rounded">
            <h4>Whitening Treatment</h4>
            <p>Perawatan untuk mencerahkan kulit, mengurangi noda hitam, dan membuat kulit lebih bersih dan bercahaya. Cocok untuk kulit kusam dan tidak merata warnanya.</p>
            <p class="price">Harga: Rp 95.000</p>
        </div>

        <div class="treatment-card">
            <img src="{{ asset('img aya/phoresis.jpg') }}" alt="Phoresis" class="img-fluid rounded">
            <h4>Phoresis Facial Treatment</h4>
            <p>Facial yang menggunakan teknologi phoresis untuk memperkenalkan bahan aktif ke dalam kulit, menutrisi dan meremajakan kulit dengan hasil yang terlihat instan.</p>
            <p class="price">Harga: Rp 100.000</p>
        </div>

        <!-- Manfaat Section -->
        <div class="manfaat">
            <h3>Manfaat Perawatan Kami:</h3>
            <ul>
                <li><strong>Laser Treatment:</strong> Mengurangi kerutan, noda hitam, dan bekas jerawat.</li>
                <li><strong>Whitening Treatment:</strong> Mencerahkan kulit dan mengurangi pigmentasi.</li>
                <li><strong>Phoresis Facial:</strong> Memberi nutrisi lebih dalam untuk kulit segar.</li>
                <li><strong>IPL Active Acne:</strong> Membantu atasi jerawat aktif.</li>
            </ul>
        </div>

        <!-- Hubungi Kami Section -->
        <div class="contact-section">
            <h3>Hubungi Kami</h3>
            <p>Klik tombol di bawah untuk informasi lebih lanjut:</p>
            <a href="http://127.0.0.1:8000/contact" class="contact-link">Hubungi Kami</a>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>Perawatan terbaik untuk kulit sehat dan cantik. Hubungi kami untuk informasi lebih lanjut.</p>
    </footer>

</body>
</html>
