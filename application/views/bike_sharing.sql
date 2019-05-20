
CREATE DATABASE bike_sharing;

CREATE TABLE bike_sharing.acara (
    id_acara varchar(10) NOT NULL,
    judul varchar(100) NOT NULL,
    deskripsi text,
    tgl_mulai date NOT NULL,
    tgl_akhir date NOT NULL,
    is_free boolean NOT NULL
);

CREATE TABLE bike_sharing.acara_stasiun (
    id_stasiun varchar(10) NOT NULL,
    id_acara varchar(10) NOT NULL
);

CREATE TABLE bike_sharing.anggota (
    no_kartu varchar(10) NOT NULL,
    saldo int,
    points integer,
    ktp varchar(20) NOT NULL
);

CREATE TABLE bike_sharing.laporan (
    id_laporan varchar(10) NOT NULL,
    no_kartu_anggota varchar(10) NOT NULL,
    datetime_pinjam timestamp NOT NULL,
    nomor_sepeda varchar(10) NOT NULL,
    id_stasiun varchar(10) NOT NULL,
    status varchar(20) NOT NULL
);

CREATE TABLE bike_sharing.peminjaman (
    no_kartu_anggota varchar(10) NOT NULL,
    datetime_pinjam timestamp  NOT NULL,
    nomor_sepeda varchar(10) NOT NULL,
    id_stasiun varchar(10) NOT NULL,
    datetime_kembali timestamp ,
    biaya int,
    denda int
);

CREATE TABLE bike_sharing.penugasan (
    ktp varchar(20) NOT NULL,
    start_datetime timestamp  NOT NULL,
    id_stasiun varchar(10) NOT NULL,
    end_datetime timestamp  NOT NULL
);


CREATE TABLE bike_sharing.person (
    ktp varchar(20) NOT NULL,
    email varchar(50) NOT NULL,
    nama varchar(50) NOT NULL,
    alamat text,
    tgl_lahir date NOT NULL,
    no_telp varchar(20)
);


CREATE TABLE bike_sharing.petugas (
    ktp varchar(20) NOT NULL,
    gaji int NOT NULL
);


CREATE TABLE bike_sharing.sepeda (
    nomor varchar(10) NOT NULL,
    merk varchar(10) NOT NULL,
    jenis varchar(50) NOT NULL,
    status boolean NOT NULL,
    id_stasiun varchar(10) NOT NULL,
    no_kartu_penyumbang varchar(20)
);

CREATE TABLE bike_sharing.stasiun (
    id_stasiun varchar(10) NOT NULL,
    alamat text NOT NULL,
    latitude decimal,
    longitude decimal,
    nama varchar(50) NOT NULL
);

CREATE TABLE bike_sharing.transaksi (
    no_kartu_anggota varchar(10) NOT NULL,
    date_time timestamp NOT NULL,
    jenis varchar(20) NOT NULL,
    nominal int NOT NULL
);

CREATE TABLE bike_sharing.transaksi_khusus_peminjaman (
    no_kartu_anggota varchar(10) NOT NULL,
    date_time timestamp  NOT NULL,
    no_kartu_peminjam varchar(10),
    datetime_pinjam timestamp ,
    no_sepeda varchar(10),
    id_stasiun varchar(10)
);

CREATE TABLE bike_sharing.voucher (
    id_voucher varchar(10) NOT NULL,
    nama varchar(255) NOT NULL,
    kategori varchar(255) NOT NULL,
    nilai_poin int NOT NULL,
    deskripsi text,
    no_kartu_anggota varchar(10)
);


ALTER TABLE bike_sharing.acara
    ADD CONSTRAINT PRIMARY KEY (id_acara);

ALTER TABLE bike_sharing.acara_stasiun
    ADD CONSTRAINT PRIMARY KEY (id_stasiun, id_acara);

ALTER TABLE bike_sharing.anggota
    ADD CONSTRAINT PRIMARY KEY (no_kartu);

ALTER TABLE  bike_sharing.laporan
    ADD CONSTRAINT laporan_ PRIMARY KEY (id_laporan, no_kartu_anggota, datetime_pinjam, nomor_sepeda, id_stasiun);

ALTER TABLE  bike_sharing.peminjaman
    ADD CONSTRAINT peminjaman_ PRIMARY KEY (no_kartu_anggota, datetime_pinjam, nomor_sepeda, id_stasiun);

ALTER TABLE  bike_sharing.penugasan
    ADD CONSTRAINT penugasan_ PRIMARY KEY (ktp, start_datetime, id_stasiun);

ALTER TABLE  bike_sharing.person
    ADD CONSTRAINT UNIQUE (email);

ALTER TABLE  bike_sharing.person
    ADD CONSTRAINT PRIMARY KEY (ktp);

ALTER TABLE  bike_sharing.petugas
    ADD CONSTRAINT petugas_ PRIMARY KEY (ktp);

ALTER TABLE  bike_sharing.sepeda
    ADD CONSTRAINT sepeda_ PRIMARY KEY (nomor);

ALTER TABLE  bike_sharing.stasiun
    ADD CONSTRAINT stasiun_ PRIMARY KEY (id_stasiun);

ALTER TABLE  bike_sharing.transaksi_khusus_peminjaman
    ADD CONSTRAINT transaksi_khusus_peminjaman_ PRIMARY KEY (no_kartu_anggota, date_time);

ALTER TABLE  bike_sharing.transaksi
    ADD CONSTRAINT PRIMARY KEY (no_kartu_anggota, date_time);

ALTER TABLE  bike_sharing.voucher
    ADD CONSTRAINT PRIMARY KEY (id_voucher);

ALTER TABLE  bike_sharing.acara_stasiun
    ADD CONSTRAINT FOREIGN KEY (id_acara) REFERENCES bike_sharing.acara(id_acara) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.acara_stasiun
    ADD CONSTRAINT FOREIGN KEY (id_stasiun) REFERENCES bike_sharing.stasiun(id_stasiun) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.anggota
    ADD CONSTRAINT FOREIGN KEY (ktp) REFERENCES bike_sharing.person(ktp) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.laporan
    ADD CONSTRAINT FOREIGN KEY (no_kartu_anggota, datetime_pinjam, nomor_sepeda, id_stasiun) REFERENCES bike_sharing.peminjaman(no_kartu_anggota, datetime_pinjam, nomor_sepeda, id_stasiun) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.peminjaman
    ADD CONSTRAINT FOREIGN KEY (id_stasiun) REFERENCES bike_sharing.stasiun(id_stasiun) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.peminjaman
    ADD CONSTRAINT FOREIGN KEY (no_kartu_anggota) REFERENCES bike_sharing.anggota(no_kartu) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.peminjaman
    ADD CONSTRAINT FOREIGN KEY (nomor_sepeda) REFERENCES bike_sharing.sepeda(nomor) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.penugasan
    ADD CONSTRAINT FOREIGN KEY (id_stasiun) REFERENCES bike_sharing.stasiun(id_stasiun) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.penugasan
    ADD CONSTRAINT FOREIGN KEY (ktp) REFERENCES bike_sharing.petugas(ktp);

ALTER TABLE  bike_sharing.petugas
    ADD CONSTRAINT FOREIGN KEY (ktp) REFERENCES bike_sharing.person(ktp) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.sepeda
    ADD CONSTRAINT FOREIGN KEY (id_stasiun) REFERENCES bike_sharing.stasiun(id_stasiun) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.sepeda
    ADD CONSTRAINT FOREIGN KEY (no_kartu_penyumbang) REFERENCES bike_sharing.anggota(no_kartu) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.transaksi_khusus_peminjaman
    ADD CONSTRAINT FOREIGN KEY (no_kartu_anggota, date_time) REFERENCES bike_sharing.transaksi(no_kartu_anggota, date_time) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.transaksi_khusus_peminjaman
    ADD CONSTRAINT FOREIGN KEY (no_kartu_peminjam, datetime_pinjam, no_sepeda, id_stasiun) REFERENCES bike_sharing.peminjaman(no_kartu_anggota, datetime_pinjam, nomor_sepeda, id_stasiun) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.transaksi
    ADD CONSTRAINT FOREIGN KEY (no_kartu_anggota) REFERENCES bike_sharing.anggota(no_kartu) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE  bike_sharing.voucher
    ADD CONSTRAINT FOREIGN KEY (no_kartu_anggota) REFERENCES bike_sharing.anggota(no_kartu) ON UPDATE CASCADE ON DELETE CASCADE;


