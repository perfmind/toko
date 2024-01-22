<?php

namespace App\Models;

class Pembelian extends Model {
    private $idPembelian;
    private $jumlahPembelian;
    private $harga;
    private $idBarang;

    public function getIdPembelian()
    {
        return $this->idPembelian;
    }

    public function setIdPembelian($idPembelian): void
    {
        $this->idPembelian = $idPembelian;
    }

    public function getJumlahPembelian()
    {
        return $this->jumlahPembelian;
    }

    public function setJumlahPembelian($jumlahPembelian): void
    {
        $this->jumlahPembelian = $jumlahPembelian;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setHarga($harga): void
    {
        $this->harga = $harga;
    }

    public function getIdBarang()
    {
        return $this->idBarang;
    }

    public function setIdBarang($idBarang): void
    {
        $this->idBarang = $idBarang;
    }

}