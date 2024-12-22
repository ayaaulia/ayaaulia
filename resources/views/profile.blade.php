<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Skincare</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #fffaf2, #f7ebe1); /* Gradasi putih ke coklat muda */
        }

        header {
            background: linear-gradient(to right, #d4b8a8, #f1e3d3); /* Kombinasi coklat muda */
            color: #5a4033; /* Coklat gelap untuk teks */
            padding: 40px 0;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        footer {
            background-color: #d4b8a8; /* Coklat muda */
            color: #5a4033; /* Coklat gelap */
            text-align: center;
            padding: 15px 0;
        }

        .product-image {
            height: 150px;
            object-fit: cover;
        }

        .card-body h5 {
            color: #9b6d4e; /* Coklat lebih gelap untuk judul */
        }

        .card-body p {
            color: #555; /* Abu-abu gelap untuk deskripsi */
        }

        .container h2 {
            color: #9b6d4e; /* Coklat lebih gelap untuk heading */
        }

        .list-unstyled li {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .list-unstyled li p {
            margin: 0;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Styling untuk profil */
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-text {
            margin-top: 20px;
        }

        .profile-image {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #9b6d4e;
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.1);
        }

    </style>
</head>
<body>

    <header class="text-center">
        <h1>Profil Skincare</h1>
        <p class="lead">Kami percaya pada kecantikan alami yang dirawat dengan cinta dan produk berkualitas.</p>
    </header>

    <div class="container my-5">
        <!-- Tentang Kami -->
        <div class="row mb-5">
            <div class="col-md-12 profile-container">
                <div class="profile-image">
                    <img src="{{ asset('img aya/profil.jpg') }}" alt="Profil" class="img-fluid rounded-circle profile-image">
                </div>
                <div class="profile-text">
                    <h2>Selamat Datang!</h2>
                    <p>Hai! Nama saya <strong>Aya Aulia</strong>. Saya memiliki pengalaman dalam industri skincare sebagai <strong>Dokter Kecantikan</strong>. Saya senang membantu orang menemukan produk yang sesuai dengan kebutuhan kulit mereka.</p>
                </div>
            </div>
        </div>

        <!-- Riwayat Pendidikan -->
        <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Riwayat Pendidikan</h2>
                <ul class="list-unstyled">
                    <li><strong>2014 - 2018:</strong> Sarjana Kedokteran, Universitas Indonesia</li>
                    <li><strong>2018 - 2020:</strong> Spesialis Dermatologi, Universitas Gadjah Mada</li>
                    <li><strong>2020 - 2022:</strong> Pelatihan Dokter Kecantikan, Klinik XYZ</li>
                </ul>
            </div>
        </div>

        <!-- Produk Unggulan -->
        <h2 class="text-center mb-4">Produk Unggulan Kami</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img aya/produk 1.jpeg') }}" alt="Produk 1" class="product-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Serum Wajah</h5>
                        <p class="card-text">Memberikan kelembapan ekstra dan membantu meratakan warna kulit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img aya/produk 2.jpeg') }}" alt="Produk 2" class="product-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Moisturizer</h5>
                        <p class="card-text">Mengunci kelembapan kulit Anda sepanjang hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img aya/produk 3.jpeg') }}" alt="Produk 3" class="product-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Tabir Surya</h5>
                        <p class="card-text">Melindungi kulit Anda dari paparan sinar UV berbahaya.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimoni Pelanggan -->
        <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Testimoni Pelanggan</h2>
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"Produk serum wajah dari Profil Skincare benar-benar membuat kulit saya lebih halus dan bercahaya. Saya merasa lebih percaya diri!"</p>
                            <footer class="blockquote-footer">Sarah Wijaya, <cite title="Source Title">Pelanggan Setia</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"Moisturizer dari Profil Skincare sangat cocok untuk kulit kering saya. Kulit terasa lembap dan tidak berminyak sepanjang hari!"</p>
                            <footer class="blockquote-footer">Rina Permata, <cite title="Source Title">Pelanggan Setia</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sertifikat dan Penghargaan -->
        <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Sertifikat dan Penghargaan</h2>
                <ul class="list-unstyled">
                    <li><strong>2022:</strong> Sertifikat Dokter Kecantikan Terakreditasi, Lembaga Kecantikan Nasional</li>
                    <li><strong>2023:</strong> Penghargaan "Inovator Terbaik" dalam Perawatan Kulit, SkinCare Expo 2023</li>
                    <li><strong>2023:</strong> Sertifikat Produk Skincare Aman dan Teruji, Badan Pengawas Obat dan Makanan (BPOM)</li>
                </ul>
            </div>
        </div>

        <!-- Visi dan Misi -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>Visi Kami</h2>
                <p class="fst-italic mt-3">
                    "Menjadi pemimpin dalam menyediakan solusi perawatan kulit yang efektif dan aman, dengan pendekatan yang mengutamakan kecantikan alami dan kesehatan kulit, serta memberikan pengalaman terbaik bagi setiap individu."
                </p>
                
                <h2 class="mt-5">Misi Kami</h2>
                <ul class="list-unstyled text-start mx-auto mt-3" style="max-width: 800px; line-height: 1.8;">
                    <li><strong>1. Produk Berkualitas:</strong> Memberikan produk perawatan kulit yang aman dan teruji secara klinis, menggunakan bahan-bahan alami yang bermanfaat untuk kulit.</li>
                    <li><strong>2. Pelayanan Terbaik:</strong> Menyediakan pelayanan yang ramah dan profesional kepada setiap pelanggan, serta memberikan konsultasi kecantikan yang disesuaikan dengan kebutuhan individu.</li>
                    <li><strong>3. Edukasi Kecantikan:</strong> Meningkatkan pengetahuan masyarakat mengenai perawatan kulit yang tepat dan efektif melalui berbagai seminar, workshop, dan materi edukatif.</li>
                    <li><strong>4. Inovasi Berkelanjutan:</strong> Selalu berinovasi untuk menghasilkan produk-produk terbaru dengan teknologi terkini yang dapat memberikan solusi kecantikan terbaik.</li>
                    <li><strong>5. Keberlanjutan dan Ramah Lingkungan:</strong> Memastikan bahwa setiap produk kami ramah lingkungan dan proses produksinya berkelanjutan, dengan menggunakan kemasan yang dapat didaur ulang dan ramah lingkungan.</li>
                </ul>
