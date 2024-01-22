CREATE TABLE `HakAkses` (
  `IdAkses` INT NOT NULL AUTO_INCREMENT,
  `NamaAkses` VARCHAR(10) NOT NULL,
  `Keterangan` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`IdAkses`)
);

CREATE TABLE `Pengguna` (
  `IdPengguna` INT NOT NULL AUTO_INCREEMENT,
  `NamaPengguna` VARCHAR(20) NOT NULL,
  `Password` VARCHAR(50) NOT NULL,
  `NamaDepan` VARCHAR(50) NOT NULL, 
  `NamaBelakang` VARCHAR(50) DEFAULT NULL,
  `NoHP` VARCHAR(14) DEFAULT NULL,
  PRIMARY KEY (`IdPengguna`)
)

CREATE TABLE `Pelanggan` (
    `IdPelanggan` INT NOT NULL AUTO_INCREMENT,
    `NamaPelanggan` VARCHAR NOT NULL,
    `NoTelp` VARCHAR(15) NOT NULL,
    `Alamat` TEXT,
    PRIMARY KEY (`IdPelanggan`)
);

CREATE TABLE `Supplier` (
    `IdSupplier` INT NOT NULL AUTO_INCREMENT,
    `NamaSupplier` VARCHAR NOT NULL,
    `NoTelp` VARCHAR(15) NOT NULL,
    `Alamat` TEXT,
    PRIMARY KEY (`IdSupplier`)
);
