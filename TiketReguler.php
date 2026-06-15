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

    // Mengimplementasikan metode abstrak hitungTotalHarga 
    public function hitungTotalHarga() { 
        return $this->hargaDasarTiket * $this->jumlah_kursi; 
    } 

    // Mengimplementasikan metode abstrak tampilkanInfoFasilitas 
    public function tampilkanInfoFasilitas() { 
        return "Studio Regular - Audio: " . $this->tipeAudio . ", Baris: " . $this->lokasiBaris; 
    } 
}
?>