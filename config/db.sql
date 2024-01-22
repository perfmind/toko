CREATE TABLE `HakAkses`
(
    `IdAkses`    INT         NOT NULL AUTO_INCREMENT,
    `NamaAkses`  VARCHAR(10) NOT NULL,
    `Keterangan` VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`IdAkses`)
);

CREATE TABLE `Pengguna`
(
    `IdPengguna`   INT         NOT NULL AUTO_INCREMENT,
    `NamaPengguna` VARCHAR(20) NOT NULL,
    `Password`     VARCHAR(50) NOT NULL,
    `NamaDepan`    VARCHAR(50) NOT NULL,
    `NamaBelakang` VARCHAR(50) DEFAULT NULL,
    `NoHP`         VARCHAR(14) DEFAULT NULL,
    `IdAkses`      INT         NOT NULL,
    PRIMARY KEY (`IdPengguna`),
    FOREIGN KEY (`IdAkses`) REFERENCES HakAkses (`IdAkses`) ON DELETE CASCADE
);

CREATE TABLE `Barang`
(
    `IdBarang` INT NOT NULL AUTO_INCREMENT,
    `NamaBarang` VARCHAR(50) NOT NULL,
    `Keterangan` TEXT,
    `Satuan` VARCHAR(50)
);

CREATE TABLE `Penjualan`
(
    `IdPenjualan` INT NOT NULL AUTO_INCREMENT,
    `JumlahPenjualan` INT NOT NULL,
    `HargaJual` DECIMAL(10,2) NOT NULL,
    `IdBarang` INT NOT NULL,
    PRIMARY KEY (`IdPenjualan`),
    FOREIGN KEY (`IdBarang`) REFERENCES HakAkses (`IdAkses`) ON DELETE CASCADE
);

CREATE TABLE `Pembelian`
(
    `IdPembelian` INT NOT NULL AUTO_INCREMENT,
    `JumlahPembelian` INT NOT NULL,
    `HargaBeli` DECIMAL(10,2) NOT NULL,
    `IdBarang` INT NOT NULL,
    PRIMARY KEY (`IdPembelian`),
    FOREIGN KEY (`IdBarang`) REFERENCES HakAkses (`IdAkses`) ON DELETE CASCADE
);

CREATE TABLE `Pelanggan`
(
    `IdPelanggan`   INT          NOT NULL AUTO_INCREMENT,
    `NamaPelanggan` VARCHAR(100) NOT NULL,
    `NoTelp`        VARCHAR(15)  NOT NULL,
    `Alamat`        TEXT,
    PRIMARY KEY (`IdPelanggan`)
);

CREATE TABLE `Supplier`
(
    `IdSupplier`   INT          NOT NULL AUTO_INCREMENT,
    `NamaSupplier` VARCHAR(100) NOT NULL,
    `NoTelp`       VARCHAR(15)  NOT NULL,
    `Alamat`       TEXT,
    PRIMARY KEY (`IdSupplier`)
);
