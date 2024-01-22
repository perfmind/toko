<?php

namespace App\Models;

class Pengguna extends Model {
    private $idPengguna;
    private $namaPengguna;
    private $password;
    private $namaDepan;
    private $namaBelakang;
    private $noHp;
    private $alamat;
    private $idAkses;

    public function getIdPengguna()
    {
        return $this->idPengguna;
    }

    public function setIdPengguna($idPengguna): void
    {
        $this->idPengguna = $idPengguna;
    }

    public function getNamaPengguna()
    {
        return $this->namaPengguna;
    }

    public function setNamaPengguna($namaPengguna): void
    {
        $this->namaPengguna = $namaPengguna;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getNamaDepan()
    {
        return $this->namaDepan;
    }

    public function setNamaDepan($namaDepan): void
    {
        $this->namaDepan = $namaDepan;
    }

    public function getNamaBelakang()
    {
        return $this->namaBelakang;
    }

    public function setNamaBelakang($namaBelakang): void
    {
        $this->namaBelakang = $namaBelakang;
    }

    public function getNoHp()
    {
        return $this->noHp;
    }

    public function setNoHp($noHp): void
    {
        $this->noHp = $noHp;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function setAlamat($alamat): void
    {
        $this->alamat = $alamat;
    }

    public function getIdAkses()
    {
        return $this->idAkses;
    }

    public function setIdAkses($idAkses): void
    {
        $this->idAkses = $idAkses;
    }
}
