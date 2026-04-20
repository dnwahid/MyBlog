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

        /* Header */
        .header {
            background: white;
            padding: 40px 30px;
            border-radius: 8px;
            margin-bottom: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .header h1 {
            color: #667eea;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 18px;
        }

        /* Daftar Artikel */
        .articles-section {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .articles-section h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }

        .article-card {
            border: 1px solid #e0e0e0;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            transition: all 0.3s;
            background: white;
        }

        .article-card:hover {
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.2);
            transform: translateY(-2px);
            border-color: #667eea;
        }

        .article-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
            font-size: 14px;
            color: #999;
        }

        .article-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .article-card h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .article-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .article-card a {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .article-card a:hover {
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

        .btn-tambah {
            background: #764ba2;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .btn-tambah:hover {
            background: #667eea;
        }

        @media (max-width: 768px) {
            nav ul {
                gap: 15px;
            }

            .header h1 {
                font-size: 24px;
            }

            .articles-section {
                padding: 20px;
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
                <li><a href="<?php echo base_url('blog'); ?>" class="active">Home</a></li>
                <li><a href="<?php echo base_url('blog/tentang'); ?>">Tentang</a></li>
                <li><a href="<?php echo base_url('blog/tambah'); ?>">Tambah Artikel</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Selamat Datang di Blog Personal</h1>
            <p>Berbagi pengetahuan tentang CodeIgniter dan Web Development</p>
        </div>

        <!-- Daftar Artikel -->
        <div class="articles-section">
            <h2>📚 Daftar Artikel Terbaru</h2>
            <a href="<?php echo base_url('blog/tambah'); ?>" class="btn-tambah">+ Tambah Artikel Baru</a>

            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="article-card">
                        <div class="article-meta">
                            <span>✍️ Penulis: <?php echo $article['penulis']; ?></span>
                            <span>📅 Tanggal: <?php echo date('d M Y', strtotime($article['tanggal'])); ?></span>
                        </div>
                        <h3><?php echo $article['judul']; ?></h3>
                        <p><?php echo substr($article['isi'], 0, 150) . '...'; ?></p>
                        <a href="<?php echo base_url('blog/detail/' . $article['slug']); ?>">
                            Baca Selengkapnya →
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align: center; color: #999;">Belum ada artikel.</p>
            <?php endif; ?>
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
