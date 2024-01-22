<?php

namespace App\Models;

class Penjualan extends Model
{
    private $idPenjualan;
    private $jumlahPenjualan;
    private $harga;
    private $idBarang;

    public function getIdPenjualan()
    {
        return $this->idPenjualan;
    }

    public function setIdPenjualan($idPenjualan): void
    {
        $this->idPenjualan = $idPenjualan;
    }

    public function getJumlahPenjualan()
    {
        return $this->jumlahPenjualan;
    }

    public function setJumlahPenjualan($jumlahPenjualan): void
    {
        $this->jumlahPenjualan = $jumlahPenjualan;
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