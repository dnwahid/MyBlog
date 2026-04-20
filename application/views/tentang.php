<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigasi */
        nav {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            border-radius: 8px;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .brand {
            font-size: 24px;
            font-weight: bold;
            color: #667eea;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #667eea;
        }

        nav a.active {
            color: #667eea;
            border-bottom: 2px solid #667eea;
            padding-bottom: 5px;
        }

        /* Content Card */
        .card {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .card h1 {
            color: #667eea;
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
        }

        .card h2 {
            color: #333;
            font-size: 24px;
            margin: 30px 0 15px 0;
            border-left: 4px solid #667eea;
            padding-left: 15px;
        }

        .card p {
            color: #555;
            line-height: 1.8;
            font-size: 16px;
            margin-bottom: 15px;
            text-align: justify;
        }

        .card ul {
            list-style-position: inside;
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .card li {
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        /* Features */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .feature-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .feature-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 14px;
            color: rgba(255,255,255,0.9);
            text-align: center;
        }

        /* Team Section */
        .team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .team-member {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .team-member h3 {
            color: #667eea;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .team-member p {
            color: #999;
            font-size: 14px;
        }

        /* Back Button */
        .back-link {
            display: inline-block;
            margin: 30px 0 0 0;
            padding: 10px 20px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-link:hover {
            background: #764ba2;
        }

        /* Footer */
        footer {
            background: white;
            padding: 20px 0;
            margin-top: 40px;
            text-align: center;
            color: #666;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        footer p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            nav ul {
                gap: 15px;
            }

            .card {
                padding: 20px;
            }

            .card h1 {
                font-size: 28px;
            }

            .card h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigasi -->
    <nav>
        <div class="container">
            <a href="<?php echo base_url('blog'); ?>" class="brand">📝 MyBlog</a>
            <ul>
                <li><a href="<?php echo base_url('blog'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('blog/tentang'); ?>" class="active">Tentang</a></li>
                <li><a href="<?php echo base_url('blog/tambah'); ?>">Tambah Artikel</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Header Card -->
        <div class="card">
            <h1>ℹ️ Tentang MyBlog</h1>

            <h2>Apa itu MyBlog?</h2>
            <p>
                MyBlog adalah sebuah platform blog personal yang dibangun menggunakan framework CodeIgniter versi 3. 
                Website ini dirancang untuk mendemonstrasikan penggunaan pola desain MVC (Model-View-Controller) dalam 
                mengembangkan aplikasi web yang terstruktur, mudah dipahami, dan mudah dikembangkan lebih lanjut.
            </p>

            <h2>Tujuan Website Ini</h2>
            <p>
                Website ini dibuat dengan tujuan untuk:
            </p>
            <ul>
                <li>Mendemonstrasikan konsep MVC dalam CodeIgniter</li>
                <li>Menampilkan cara membuat controller dan view yang efektif</li>
                <li>Memberikan contoh routing dan navigasi antar halaman</li>
                <li>Menunjukkan cara menampilkan data statis dari controller ke view</li>
                <li>Menyediakan template dasar untuk aplikasi blog sederhana</li>
            </ul>

            <h2>Fitur-Fitur Utama</h2>
            <div class="features">
                <div class="feature-card">
                    <h3>📰 Daftar Artikel</h3>
                    <p>Menampilkan semua artikel dalam bentuk card yang menarik dengan ringkasan konten.</p>
                </div>
                <div class="feature-card">
                    <h3>📄 Detail Artikel</h3>
                    <p>Menampilkan konten lengkap artikel dengan informasi penulis dan tanggal publikasi.</p>
                </div>
                <div class="feature-card">
                    <h3>➕ Form Tambah Artikel</h3>
                    <p>Interface sederhana untuk simulasi penambahan artikel baru (belum terintegrasi database).</p>
                </div>
                <div class="feature-card">
                    <h3>🧭 Navigasi Mudah</h3>
                    <p>Menu navigasi yang intuitif untuk memudahkan user berpindah antar halaman.</p>
                </div>
            </div>

            <h2>Struktur File CodeIgniter</h2>
            <p>
                Aplikasi ini menggunakan struktur folder standar CodeIgniter 3:
            </p>
            <ul>
                <li><strong>application/controllers/Blog.php</strong> - Controller utama untuk menangani logika blog</li>
                <li><strong>application/views/home.php</strong> - View untuk menampilkan daftar artikel</li>
                <li><strong>application/views/detail_artikel.php</strong> - View untuk menampilkan detail artikel</li>
                <li><strong>application/views/tentang.php</strong> - View untuk halaman tentang (file ini)</li>
                <li><strong>application/views/form_tambah_artikel.php</strong> - View untuk form tambah artikel</li>
            </ul>

            <h2>Data Artikel</h2>
            <p>
                Semua data artikel disimpan dalam bentuk array statis di dalam controller Blog.php. Setiap artikel 
                memiliki properti: id, slug, judul, isi, penulis, dan tanggal. Dalam pengembangan lebih lanjut, 
                data ini dapat diintegrasikan dengan database.
            </p>

            <h2>Teknologi yang Digunakan</h2>
            <ul>
                <li>CodeIgniter 3 - Web Framework PHP</li>
                <li>HTML 5 - Markup untuk struktur halaman</li>
                <li>CSS 3 - Styling dan responsive design</li>
                <li>PHP 7+ - Server-side scripting language</li>
            </ul>

            <h2>Tentang Pengembang</h2>
            <p>
                Aplikasi ini adalah hasil pembelajaran mendalam tentang konsep MVC dan best practices dalam 
                web development. Setiap komponen dirancang untuk memberikan pemahaman yang jelas tentang alur 
                data dari controller ke view.
            </p>

            <div class="team">
                <div class="team-member">
                    <h3>👨‍💻 Developer</h3>
                    <p>Tim Pengembang</p>
                </div>
                <div class="team-member">
                    <h3>📅 Tahun</h3>
                    <p>2026</p>
                </div>
                <div class="team-member">
                    <h3>🔧 Framework</h3>
                    <p>CodeIgniter 3</p>
                </div>
            </div>

            <h2>Hubungi Kami</h2>
            <p>
                Jika Anda memiliki pertanyaan atau saran tentang website ini, silakan hubungi kami melalui:
            </p>
            <ul>
                <li>Email: info@myblog.com</li>
                <li>Website: www.myblog.com</li>
                <li>GitHub: github.com/myblog</li>
            </ul>

            <a href="<?php echo base_url('blog'); ?>" class="back-link">← Kembali ke Home</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2026 MyBlog - Blog Personal</p>
            <p>Dibuat dengan ❤️ menggunakan CodeIgniter</p>
        </div>
    </footer>
</body>
</html>
