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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Success Card */
        .success-card {
            background: white;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .success-icon {
            font-size: 80px;
            margin-bottom: 20px;
            animation: bounce 0.6s;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .success-card h1 {
            color: #667eea;
            font-size: 36px;
            margin-bottom: 15px;
        }

        .success-card p {
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Info Box */
        .info-section {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin: 30px 0;
            text-align: left;
        }

        .info-section h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .info-item {
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #ddd;
        }

        .info-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .info-label {
            color: #999;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .info-value {
            color: #333;
            font-size: 16px;
            word-break: break-word;
        }

        /* Buttons */
        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background: #667eea;
            color: white;
        }

        .btn-primary:hover {
            background: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #667eea;
            color: white;
        }

        /* Note */
        .note {
            background: #fff9e6;
            border-left: 4px solid #ffc107;
            padding: 15px;
            border-radius: 5px;
            margin-top: 30px;
            color: #666;
            line-height: 1.6;
        }

        .note strong {
            color: #ff9800;
        }

        @media (max-width: 768px) {
            .success-card {
                padding: 30px;
            }

            .success-icon {
                font-size: 60px;
            }

            .success-card h1 {
                font-size: 28px;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Success Card -->
        <div class="success-card">
            <div class="success-icon">✅</div>
            <h1>Selamat!</h1>
            <p><?php echo $message; ?></p>

            <!-- Info Submitted -->
            <div class="info-section">
                <h3>📋 Data yang Disubmit:</h3>
                <div class="info-item">
                    <div class="info-label">Judul Artikel:</div>
                    <div class="info-value"><?php echo htmlspecialchars($judul); ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Penulis:</div>
                    <div class="info-value"><?php echo htmlspecialchars($penulis); ?></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Isi Artikel (Preview):</div>
                    <div class="info-value"><?php echo substr(htmlspecialchars($isi), 0, 100) . '...'; ?></div>
                </div>
            </div>

            <!-- Note -->
            <div class="note">
                <strong>⚠️ Catatan Penting:</strong> Ini adalah simulasi. Data yang Anda kirimkan tidak disimpan ke database. 
                Untuk mengimplementasikan penyimpanan data, Anda perlu menambahkan Model dan database.
            </div>

            <!-- Buttons -->
            <div class="button-group">
                <a href="<?php echo base_url('blog'); ?>" class="btn btn-primary">← Kembali ke Home</a>
                <a href="<?php echo base_url('blog/tambah'); ?>" class="btn btn-secondary">Tambah Artikel Lagi</a>
            </div>
        </div>
    </div>
</body>
</html>
