use resguardoMEXQv3
select * from equipos

drop table equipos

create table equipos (
id int identity(1,1) Primary key,
codigo varchar(255) not null,
nomina int not null,
nombre varchar(255) not null,
sucursal varchar(255) not null,
area varchar(255) not null,
marca varchar(255) not null,
modelo varchar(255) not null,
no_serie varchar(255) not null,
fecha varchar(255) not null,
no_factura varchar(255) not null,
proveedor varchar(255) not null,
estado varchar(255) not null,
);

INSERT INTO equipos (codigo, nomina, nombre, sucursal, area, marca, modelo, no_serie, fecha, no_factura, proveedor, estado)
VALUES ('Oscar', 35653, 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj');

drop table smartphones

Create table smartphones (
	id int identity(1,1) Primary key,
	codigo varchar(255) not null,
	nomina int not null,
	nombre varchar(255) not null,
	sucursal varchar(255) not null,
	area varchar(255) not null,
	marca varchar(255) not null,
	modelo varchar(255) not null,
	imei varchar(255) not null,
	cuenta_google varchar(255) not null,
	numero_tel int not null,
	fecha varchar(255) not null,
	estado varchar(255) not null,
);

INSERT INTO smartphones (codigo, nomina, nombre, sucursal, area, marca, modelo, imei, cuenta_google, numero_tel, fecha, estado)
VALUES ('Oscar', 35653, 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 35653, 'rhyj', 'rhyj');

select  * from smartphones

Create table google_accounts (
	id int identity(1,1) Primary key,
	sucursal varchar(255) not null,
	cuenta varchar(255) not null,
    clave varchar(255) not null,
    fecha_actualizacion varchar(255) not null,
);

drop table google_accounts

select  * from google_accounts

insert into google_accounts (sucursal, cuenta, clave, fecha_actualizacion) value ('rhyj', 'rhyj', 'rhyj', 'rhyj');

create table admin_users (
    id int identity(1,1) Primary key,
	username varchar(255) not null,
	userpassword varchar(255) not null,
);

drop table admin_users

select * from admin_users;

INSERT INTO admin_users (username, userpassword) VALUES ('Oscar', 'P@ssw0rd');
INSERT INTO admin_users (username, userpassword) VALUES ('Yola', 'P@ssw0rd01');
