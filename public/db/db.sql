use datapepit;

create table empresas (
	id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	RUC char(11) NOT NULL,
	razon_social varchar(100) NOT NULL,
	representante varchar(100) NULL,
	dni varchar (100) NULL,
	contacto varchar (100) NULL,
	telefono1 varchar (10) NULL,
	anexo1 varchar (5) NULL,
	telefono2 varchar (10) NULL,
	telefono3 varchar (10) NULL,
	correo1 varchar (200) NULL,
	correo2 varchar (200) NULL
)