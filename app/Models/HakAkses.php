<?php

namespace App\Models;

class HakAkses extends Model
{
    private $idAkses;
    private $namaAkses;
    private $keterangan;

    public function getIdAkses()
    {
        return $this->idAkses;
    }

    public function setIdAkses($idAkses): void
    {
        $this->idAkses = $idAkses;
    }

    public function getNamaAkses()
    {
        return $this->namaAkses;
    }

    public function setNamaAkses($namaAkses): void
    {
        $this->namaAkses = $namaAkses;
    }

    public function getKeterangan()
    {
        return $this->keterangan;
    }

    public function setKeterangan($keterangan): void
    {
        $this->keterangan = $keterangan;
    }

    public function all()
    {
        $query = "SELECT * FROM HakAkses ORDER BY NamaAkses ASC";
        $prepareDB = $this->conn->prepare($query);
        $prepareDB->execute();
        return $prepareDB->fetchAll();
    }

    public function add()
    {
        try {
            $query = "INSERT INTO roles(`IdHakAkses`, `NamaAkses`, `Keterangan`) VALUES (?, ?, ?)";
            $prepareDB = $this->conn->prepare($query);
            $sqlAddRoles = $prepareDB->execute([$this->idAkses, $this->namaAkses, $this->keterangan]);
            return $sqlAddRoles;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function findById($id)
    {
        try {
            $query = "SELECT * FROM Roles WHERE IdHakAkses = ?";
            $prepareDB = $this->conn->prepare($query);
            $prepareDB->execute([$id]);
            return $prepareDB->fetchAll();
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public function update()
    {
        try {
            $query = "UPDATE Roles SET NamaRoles = ? WHERE IdAkses = ?";
            $prepareDB = $this->conn->prepare($query);
            return $prepareDB->execute([$this->namaAkses, $this->idAkses]);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $query = "DELETE FROM Roles WHERE IdAkses = ?";
            $prepareDB = $this->conn->prepare($query);
            return $prepareDB->execute([$id]);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
