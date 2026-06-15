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

    public function hitungTotalHarga() {
        // Misal ada tambahan biaya teknologi IMAX Rp 25.000 per kursi
        $biayaTambahanIMAX = 25000;
        return ($this->hargaDasarTiket + $biayaTambahanIMAX) * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        $info3d = $this->kacamata3dId ? "Ya (ID: " . $this->kacamata3dId . ")" : "Tidak";
        return "Studio IMAX - Fitur: " . $this->efekGerakFitur . ", Kacamata 3D: " . $info3d;
    }
}
?>