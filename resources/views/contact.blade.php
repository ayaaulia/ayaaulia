<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f1e2c6, #f8f1e4); /* Gradasi coklat muda dan putih */
            color: white;
        }

        /* Header */
        header {
            text-align: center;
            padding: 50px 20px;
            background: #f1e2c6; /* Coklat Muda */
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            margin: 0;
            font-size: 42px;
            color: #5a3d31; /* Coklat Gelap */
        }

        header p {
            margin: 15px 0 0;
            font-size: 20px;
            color: #d8c7b9; /* Coklat Soft */
            font-weight: 300;
        }

        /* Formulir Kontak */
        .contact-form {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background: #ffffff; /* Putih bersih */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #5a3d31; /* Coklat Gelap */
        }

        .contact-form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f1e2c6; /* Coklat Muda */
            color: #333;
            font-size: 16px;
        }

        .contact-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #5a3d31; /* Coklat Gelap */
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #3e2b1c; /* Coklat lebih gelap saat hover */
        }

        /* Kembali ke Home Button */
        .back-home {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #5a3d31; /* Coklat Gelap */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .back-home:hover {
            background-color: #3e2b1c; /* Coklat lebih gelap saat hover */
        }

        /* Footer */
        footer {
            text-align: center;
            background: #f8f1e4; /* Putih Pudar */
            color: #5a3d31; /* Coklat Gelap */
            padding: 15px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu Anda, kapan saja!</p>
    </header>

    <!-- Formulir Kontak -->
    <div class="contact-form">
        <h2>Formulir Kontak</h2>
        <form action="#" method="post">
            <label for="name">Nama Anda:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            
            <label for="email">Email Anda:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            
            <label for="message">Pesan Anda:</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>
            
            <button type="submit">Kirim Pesan</button>
        </form>

        <!-- Tombol Kembali ke Home -->
        <a href="http://127.0.0.1:8000" class="back-home">Kembali ke Home</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Dr. Ayaaulia. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
