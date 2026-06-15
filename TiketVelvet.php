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

    public function hitungTotalHarga() {
        // Misal kelas Velvet ada tambahan biaya fasilitas premium Rp 50.000 per pesanan
        $biayaFasilitasMewah = 50000;
        return ($this->hargaDasarTiket * $this->jumlah_kursi) + $biayaFasilitasMewah;
    }

    public function tampilkanInfoFasilitas() {
        $bantal = $this->bantalSelimutPack ? "Tersedia" : "Tidak Ada";
        $butler = $this->layananButler ? "Aktif" : "Tidak Aktif";
        return "Studio Velvet - Bantal & Selimut: " . $bantal . ", Layanan Butler: " . $butler;
    }
}
?>