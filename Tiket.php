<?php

abstract class Tiket {
    // Properti terenkapsulasi
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $hargaDasarTiket;

    // Constructor untuk memetakan nilai dari kolom database
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->hargaDasarTiket = $hargaDasarTiket;
    }

    // ==========================================
    // GETTER (Enkapsulasi)
    // ==========================================
    public function getIdTiket() {
        return $this->id_tiket;
    }

    public function getNamaFilm() {
        return $this->nama_film;
    }

    public function getJadwalTayang() {
        return $this->jadwal_tayang;
    }

    public function getJumlahKursi() {
        return $this->jumlah_kursi;
    }

    public function getHargaDasarTiket() {
        return $this->hargaDasarTiket;
    }

    // ==========================================
    // METODE ABSTRAK (Tanpa Isi / Body)
    // Wajib diimplementasikan oleh setiap class anak
    // ==========================================
    

    // Digunakan untuk menampilkan fasilitas spesifik yang didapatkan dari jenis studio
    abstract public function tampilkanInfoFasilitas();
}