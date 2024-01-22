<?php

namespace App\Models;

class Barang extends Model
{
    private $idBarang;
    private $namaBarang;
    private $keterangan;
    private $satuan;

    public function getIdBarang()
    {
        return $this->idBarang;
    }

    public function setIdBarang($idBarang): void
    {
        $this->idBarang = $idBarang;
    }

    public function getNamaBarang()
    {
        return $this->namaBarang;
    }

    public function setNamaBarang($namaBarang): void
    {
        $this->namaBarang = $namaBarang;
    }

    public function getKeterangan()
    {
        return $this->keterangan;
    }

    public function setKeterangan($keterangan): void
    {
        $this->keterangan = $keterangan;
    }

    public function getSatuan()
    {
        return $this->satuan;
    }

    public function setSatuan($satuan): void
    {
        $this->satuan = $satuan;
    }
}
