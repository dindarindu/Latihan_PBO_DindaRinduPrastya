<?php
// 1. Wajib panggil file induknya agar class Tiket dikenali
require_once 'Tiket.php'; 

// 2. Baru tulis class anaknya
class TiketRegular extends Tiket { 
    private $tipeAudio; 
    private $lokasiBaris; 

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $tipeAudio, $lokasiBaris) { 
        // Memanggil constructor dari class induk (Tiket) 
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket); 
        $this->tipeAudio = $tipeAudio; 
        $this->lokasiBaris = $lokasiBaris; 
    } 

    // Mengimplementasikan metode abstrak tampilkanInfoFasilitas 
    public function tampilkanInfoFasilitas() { 
        return "Studio Regular - Audio: " . $this->tipeAudio . ", Baris: " . $this->lokasiBaris; 
    } 

    public function hitungTotalHarga() { 
    return $this->jumlah_kursi * $this->hargaDasarTiket; 
}

    // ==========================================
    // FUNGSI: QUERY SELECT WHERE
    // ==========================================
    /**
     * Mengambil data tiket reguler dari database berdasarkan tipe audio tertentu.
     * Diasumsikan properti koneksi database bernama '$connection' ada di class induk (Tiket)
     */
    public function ambilTiketReguler() {
        // Mengamankan input dari SQL Injection
        $audioAman = $this->connection->real_escape_string($audio);
        
        // Query SQL dengan klausa WHERE
        $query = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'Regular'";;
        
        $result = $this->connection->query($query);
        
        // Return hasil berupa array data
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