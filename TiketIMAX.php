<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }


    public function tampilkanInfoFasilitas() {
        $info3d = $this->kacamata3dId ? "Ya (ID: " . $this->kacamata3dId . ")" : "Tidak";
        return "Studio IMAX - Fitur: " . $this->efekGerakFitur . ", Kacamata 3D: " . $info3d;
    }

    // ==========================================
    // FUNGSI BARU: QUERY SELECT WHERE
    // ==========================================
    /**
     * Mengambil data tiket IMAX dari database berdasarkan fitur efek gerak tertentu.
     * Diasumsikan properti koneksi database bernama '$connection' diwarisi dari class induk (Tiket)
     */
    public function ambilTiketIMAXBerdasarEfek($efek) {
        // Mengamankan input dari SQL Injection
        $efekAman = $this->connection->real_escape_string($efek);
        
        // Query SQL dengan klausa WHERE
        $query = "SELECT * FROM tabel_tiket where jenis_studio = 'IMAX'";
        
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