<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function tampilkanInfoFasilitas() {
        $bantal = $this->bantalSelimutPack ? "Tersedia" : "Tidak Ada";
        $butler = $this->layananButler ? "Aktif" : "Tidak Aktif";
        return "Studio Velvet - Bantal & Selimut: " . $bantal . ", Layanan Butler: " . $butler;
    }

    // ==========================================
    // FUNGSI BARU: QUERY SELECT WHERE
    // ==========================================
    /**
     * Mengambil data tiket Velvet dari database berdasarkan status layanan butler.
     * Diasumsikan properti koneksi database bernama '$connection' diwarisi dari class induk (Tiket)
     */
    public function ambilTiketVelvetBerdasarButler($statusButler) {
        // Mengamankan input dari SQL Injection
        $butlerAman = $this->connection->real_escape_string($statusButler);
        
        // Query SQL dengan klausa WHERE
        $query = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'Velvet'";
        
        $result = $this->connection->query($query);
        
        // Menyimpan hasil ke dalam array data tiket
        $dataTiket = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dataTiket[] = $row;
            }
        }
        return $dataTiket;
    }
}
?>