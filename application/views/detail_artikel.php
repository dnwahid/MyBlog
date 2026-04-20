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

        /* Layout utama */
        .content-wrapper {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Konten Artikel */
        .article-content {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .article-header {
            margin-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 20px;
        }

        .article-header h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .article-meta {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            color: #999;
            font-size: 14px;
        }

        .article-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .article-body {
            color: #555;
            line-height: 1.8;
            font-size: 16px;
        }

        .article-body p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
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

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .sidebar-box h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 18px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }

        .sidebar-articles {
            list-style: none;
        }

        .sidebar-articles li {
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f0f0f0;
        }

        .sidebar-articles li:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .sidebar-articles a {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .sidebar-articles a:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .sidebar-info {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px !important;
        }

        .sidebar-info h3 {
            color: white !important;
            border-bottom-color: white !important;
        }

        .sidebar-info p {
            line-height: 1.6;
            font-size: 14px;
        }

        /* Footer */
        footer {
            background: white;
            padding: 20px 0;
            text-align: center;
            color: #666;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        footer p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .article-content {
                padding: 20px;
            }

            .article-header h1 {
                font-size: 24px;
            }

            nav ul {
                gap: 15px;
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
                <li><a href="<?php echo base_url('blog/tambah'); ?>">Tambah Artikel</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Layout Utama -->
        <div class="content-wrapper">
            <!-- Konten Artikel -->
            <div class="article-content">
                <div class="article-header">
                    <h1><?php echo $article['judul']; ?></h1>
                    <div class="article-meta">
                        <span>✍️ <?php echo $article['penulis']; ?></span>
                        <span>📅 <?php echo date('d F Y', strtotime($article['tanggal'])); ?></span>
                        <span>🏷️ <?php echo $article['slug']; ?></span>
                    </div>
                </div>

                <div class="article-body">
                    <?php echo $article['isi']; ?>
                </div>

                <a href="<?php echo base_url('blog'); ?>" class="back-link">← Kembali ke Home</a>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Info Blog -->
                <div class="sidebar-box sidebar-info">
                    <h3>ℹ️ Tentang Blog Ini</h3>
                    <p>Blog personal yang membahas tentang CodeIgniter, PHP, dan Web Development. Semoga konten di sini bermanfaat untuk Anda.</p>
                </div>

                <!-- Artikel Lainnya -->
                <div class="sidebar-box">
                    <h3>📖 Artikel Lainnya</h3>
                    <ul class="sidebar-articles">
                        <?php 
                        $count = 0;
                        foreach ($articles as $other_article): 
                            if ($other_article['id'] !== $article['id'] && $count < 5):
                        ?>
                            <li>
                                <a href="<?php echo base_url('blog/detail/' . $other_article['slug']); ?>">
                                    <?php echo $other_article['judul']; ?>
                                </a>
                            </li>
                        <?php 
                            $count++;
                            endif;
                        endforeach; 
                        ?>
                    </ul>
                </div>

                <!-- Kategori (Dummy) -->
                <div class="sidebar-box">
                    <h3>🏷️ Kategori</h3>
                    <ul class="sidebar-articles">
                        <li><a href="#">CodeIgniter</a> (5)</li>
                        <li><a href="#">PHP</a> (3)</li>
                        <li><a href="#">Web Development</a> (4)</li>
                        <li><a href="#">Database</a> (2)</li>
                    </ul>
                </div>
            </div>
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
