drop database rs_sejahtera;
create database rs_sejahtera;
use rs_sejahtera;

CREATE TABLE ruang (
	no_ruang char (18) not null PRIMARY KEY,
	nama_ruang char (18)
);

DROP TABLE pasien;

create table pasien(
	id_pasien char (10) not null primary key,
	nama_pasien char (50),
	jk_pasien char (1),
	tgl_pasien date,
	alamat_pasien text,
	no_ruang char (18) not null, 
	FOREIGN key (no_ruang) REFERENCES ruang (no_ruang)
);
