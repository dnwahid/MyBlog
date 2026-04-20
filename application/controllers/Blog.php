<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * Data artikel statis dalam bentuk array
     */
    private function get_articles()
    {
        return [
            [
                'id'      => 1,
                'slug'    => 'pengenalan-codeigniter',
                'judul'   => 'Pengenalan CodeIgniter',
                'isi'     => 'CodeIgniter adalah framework PHP yang ringan dan powerful untuk membangun aplikasi web dengan cepat. Framework ini menggunakan pola desain MVC (Model-View-Controller) yang membuat kode lebih terstruktur dan mudah dipelihara. Dengan CodeIgniter, Anda dapat membuat aplikasi web yang scalable dan maintainable dengan mudah.',
                'penulis' => 'Ahmad Wijaya',
                'tanggal' => '2026-04-10'
            ],
            [
                'id'      => 2,
                'slug'    => 'mvc-dalam-codeigniter',
                'judul'   => 'Memahami MVC dalam CodeIgniter',
                'isi'     => 'Model-View-Controller (MVC) adalah pola desain yang memisahkan aplikasi menjadi tiga komponen utama. Model menangani logika bisnis dan data, View menangani presentasi data kepada user, dan Controller menangani alur logika aplikasi. Pemisahan ini membuat kode lebih terorganisir dan mudah untuk dikembangkan lebih lanjut.',
                'penulis' => 'Siti Nurhaliza',
                'tanggal' => '2026-04-12'
            ],
            [
                'id'      => 3,
                'slug'    => 'membuat-controller-di-codeigniter',
                'judul'   => 'Cara Membuat Controller di CodeIgniter',
                'isi'     => 'Controller adalah kelas PHP yang menangani permintaan dari user dan menentukan apa yang harus ditampilkan. Untuk membuat controller, Anda cukup membuat file PHP di folder application/controllers/. Controller harus mewarisi class CI_Controller untuk dapat mengakses semua library dan helper CodeIgniter yang tersedia.',
                'penulis' => 'Budi Santoso',
                'tanggal' => '2026-04-15'
            ],
            [
                'id'      => 4,
                'slug'    => 'template-view-codeigniter',
                'judul'   => 'Template dan View di CodeIgniter',
                'isi'     => 'View adalah file yang berisi kode HTML dan PHP untuk menampilkan data kepada user. CodeIgniter memudahkan Anda membuat template yang reusable. Anda dapat membuat header, footer, dan navigasi sebagai view terpisah, kemudian menggunakannya kembali di berbagai halaman untuk menjaga konsistensi tampilan website.',
                'penulis' => 'Rina Dewi',
                'tanggal' => '2026-04-18'
            ],
            [
                'id'      => 5,
                'slug'    => 'routing-codeigniter',
                'judul'   => 'Routing dalam CodeIgniter',
                'isi'     => 'Routing adalah proses pengarahan URL ke controller dan method yang tepat. CodeIgniter menggunakan file routes.php untuk mendefinisikan routing aplikasi. Dengan routing yang tepat, URL aplikasi Anda akan lebih sederhana dan SEO-friendly. Anda juga dapat membuat custom route untuk kebutuhan spesifik aplikasi Anda.',
                'penulis' => 'Dedi Kurniawan',
                'tanggal' => '2026-04-20'
            ]
        ];
    }

    /**
     * Halaman Home - menampilkan daftar artikel
     */
    public function index()
    {
        $data['title']    = 'Home - Blog Personal';
        $data['articles'] = $this->get_articles();

        $this->load->view('home', $data);
    }

    /**
     * Halaman Detail Artikel
     */
    public function detail($slug = null)
    {
        if ($slug === null) {
            show_404();
        }

        $articles = $this->get_articles();
        $article = null;

        // Cari artikel berdasarkan slug
        foreach ($articles as $item) {
            if ($item['slug'] === $slug) {
                $article = $item;
                break;
            }
        }

        // Jika artikel tidak ditemukan
        if ($article === null) {
            show_404();
        }

        $data['title']   = $article['judul'] . ' - Blog Personal';
        $data['article'] = $article;
        $data['articles'] = $articles; // Untuk sidebar artikel lainnya

        $this->load->view('detail_artikel', $data);
    }

    /**
     * Halaman Tentang Website
     */
    public function tentang()
    {
        $data['title'] = 'Tentang - Blog Personal';

        $this->load->view('tentang', $data);
    }

    /**
     * Halaman Form Tambah Artikel (Simulasi)
     */
    public function tambah()
    {
        $data['title'] = 'Tambah Artikel - Blog Personal';

        $this->load->view('form_tambah_artikel', $data);
    }

    /**
     * Method untuk menangani submit form (simulasi)
     */
    public function simpan_artikel()
    {
        // Ini hanya simulasi, data tidak disimpan ke database
        $judul = $this->input->post('judul');
        $isi   = $this->input->post('isi');
        $penulis = $this->input->post('penulis');

        if (empty($judul) || empty($isi) || empty($penulis)) {
            $data['title'] = 'Tambah Artikel - Blog Personal';
            $data['error'] = 'Semua field harus diisi!';
            $this->load->view('form_tambah_artikel', $data);
        } else {
            $data['title'] = 'Sukses - Blog Personal';
            $data['message'] = 'Form telah disubmit! (Data simulasi, tidak disimpan ke database)';
            $data['judul']   = $judul;
            $data['isi']     = $isi;
            $data['penulis'] = $penulis;
            
            $this->load->view('success_tambah', $data);
        }
    }
}
