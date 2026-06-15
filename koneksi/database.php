 <?php

class Database {
    // Properti untuk menyimpan konfigurasi database
    private $host     = "localhost";
    private $username = "root";     // Sesuaikan dengan username MySQL kamu
    private $password = "";         // Sesuaikan dengan password MySQL kamu
    private $db_name  = "db_latihan_pbo_ti1c_dindarinduprastya";
    public  $connection;

    // Konstruktor: Otomatis berjalan saat objek Class Database dibuat
    public function __construct() {
        // Membuat koneksi ke MySQL menggunakan OOP mysqli
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        // Memeriksa apakah koneksi mengalami error
        if ($this->connection->connect_error) {
            die("Koneksi database gagal: " . $this->connection->connect_error);
        } else {
            // Menampilkan pesan sukses jika berhasil terhubung
            echo "<div style='color: green; font-weight: bold;'>Pesan: Sukses terhubung ke basis data db_latihan_pbo_ti1c_dindarinduprastya!</div><br>";
        }
    }
}

// Cara inisialisasi untuk tes koneksi langsung (bisa dihapus/dikomentari jika di-include ke file lain)
$db = new Database();

?>