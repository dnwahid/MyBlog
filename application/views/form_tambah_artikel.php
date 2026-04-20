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

        /* Form Card */
        .form-card {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .form-card h1 {
            color: #667eea;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .form-card p {
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
        }

        /* Error Alert */
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-error {
            background: #fee;
            color: #c33;
            border: 1px solid #fcc;
        }

        .alert-success {
            background: #efe;
            color: #3c3;
            border: 1px solid #cfc;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 16px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 200px;
            line-height: 1.5;
        }

        /* Help Text */
        .help-text {
            font-size: 13px;
            color: #999;
            margin-top: 5px;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        button,
        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-submit {
            background: #667eea;
            color: white;
        }

        .btn-submit:hover {
            background: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-reset {
            background: #e0e0e0;
            color: #333;
        }

        .btn-reset:hover {
            background: #d0d0d0;
        }

        .btn-cancel {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-cancel:hover {
            background: #667eea;
            color: white;
        }

        /* Info Box */
        .info-box {
            background: #f0f5ff;
            border-left: 4px solid #667eea;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 30px;
            color: #555;
            line-height: 1.6;
        }

        .info-box strong {
            color: #667eea;
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

            .form-card {
                padding: 20px;
            }

            .form-card h1 {
                font-size: 24px;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions button,
            .form-actions .btn {
                width: 100%;
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
                <li><a href="<?php echo base_url('blog/tentang'); ?>">Tentang</a></li>
                <li><a href="<?php echo base_url('blog/tambah'); ?>" class="active">Tambah Artikel</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Form Card -->
        <div class="form-card">
            <h1>✍️ Tambah Artikel Baru</h1>
            <p>Isi form di bawah untuk menambahkan artikel baru ke blog</p>

            <!-- Error Alert -->
            <?php if (isset($error)): ?>
                <div class="alert alert-error">
                    ⚠️ <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <!-- Info Box -->
            <div class="info-box">
                <strong>ℹ️ Catatan:</strong> Form ini adalah simulasi dan data tidak akan disimpan ke database. 
                Untuk implementasi penuh dengan penyimpanan ke database, Anda perlu menambahkan Model dan database.
            </div>

            <!-- Form Tambah Artikel -->
            <form method="POST" action="<?php echo base_url('blog/simpan_artikel'); ?>">

                <!-- Judul Artikel -->
                <div class="form-group">
                    <label for="judul">Judul Artikel *</label>
                    <input 
                        type="text" 
                        id="judul" 
                        name="judul" 
                        placeholder="Masukkan judul artikel" 
                        required
                        value="<?php echo isset($_POST['judul']) ? htmlspecialchars($_POST['judul']) : ''; ?>"
                    >
                    <div class="help-text">Judul harus unik dan deskriptif (min. 5 karakter)</div>
                </div>

                <!-- Penulis -->
                <div class="form-group">
                    <label for="penulis">Nama Penulis *</label>
                    <input 
                        type="text" 
                        id="penulis" 
                        name="penulis" 
                        placeholder="Masukkan nama penulis" 
                        required
                        value="<?php echo isset($_POST['penulis']) ? htmlspecialchars($_POST['penulis']) : ''; ?>"
                    >
                    <div class="help-text">Nama lengkap penulis artikel</div>
                </div>

                <!-- Email Penulis -->
                <div class="form-group">
                    <label for="email">Email Penulis</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Masukkan email penulis"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                    >
                    <div class="help-text">Email penulis (opsional)</div>
                </div>

                <!-- Tanggal Publikasi -->
                <div class="form-group">
                    <label for="tanggal">Tanggal Publikasi</label>
                    <input 
                        type="date" 
                        id="tanggal" 
                        name="tanggal"
                        value="<?php echo isset($_POST['tanggal']) ? $_POST['tanggal'] : date('Y-m-d'); ?>"
                    >
                    <div class="help-text">Tanggal publikasi artikel (default: hari ini)</div>
                </div>

                <!-- Isi Artikel -->
                <div class="form-group">
                    <label for="isi">Isi Artikel *</label>
                    <textarea 
                        id="isi" 
                        name="isi" 
                        placeholder="Tulis konten artikel di sini..." 
                        required
                    ><?php echo isset($_POST['isi']) ? htmlspecialchars($_POST['isi']) : ''; ?></textarea>
                    <div class="help-text">Konten artikel (min. 50 karakter, Anda dapat menggunakan HTML dasar)</div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">📝 Kirim Artikel</button>
                    <button type="reset" class="btn-reset">🔄 Clear Form</button>
                    <a href="<?php echo base_url('blog'); ?>" class="btn btn-cancel">← Batal</a>
                </div>

            </form>
        </div>

        <!-- Tips Card -->
        <div class="form-card" style="background: #f9f9f9; border-top: 4px solid #667eea;">
            <h2 style="color: #667eea; margin-top: 0;">💡 Tips Menulis Artikel</h2>
            <ul style="margin-left: 20px; color: #555; line-height: 1.8;">
                <li><strong>Judul yang Menarik:</strong> Gunakan judul yang catchy dan relevan dengan konten</li>
                <li><strong>Isi Berkualitas:</strong> Pastikan konten Anda informatif dan mudah dipahami</li>
                <li><strong>Struktur Paragraf:</strong> Pisahkan dengan paragraf untuk memudahkan pembacaan</li>
                <li><strong>Call to Action:</strong> Ajak pembaca untuk memberikan komentar atau berbagi</li>
                <li><strong>Spell Check:</strong> Periksa kembali ejaan dan tata bahasa sebelum mempublikasi</li>
            </ul>
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
