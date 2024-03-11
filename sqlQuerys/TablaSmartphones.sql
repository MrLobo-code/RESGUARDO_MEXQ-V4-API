use resguardoMEXQv3
select * from equipos

drop table equipos

create table equipos (
id int identity(1,1) Primary key,
codigo varchar(255) not null,
nomina varchar(255) not null,
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

Create table smartphones (
	id int identity(1,1) Primary key,
	codigo varchar(255) not null,
	nomina varchar(255) not null,
	nombre varchar(255) not null,
	sucursal varchar(255),
	area varchar(255) not null,
	marca varchar(255) not null,
	modelo varchar(255) not null,
	imei varchar(255) not null,
	cuenta_google varchar(255) not null,
	numero_tel int,
	fecha varchar(255) not null,
	estado varchar(255) not null,
);

select  * from smartphones

Create table google_accounts (
	id int identity(1,1) Primary key,
	sucursal varchar(255),
	cuenta varchar(255) not null,
    clave varchar(255) not null,
    fecha_actualizacion varchar(255),
);

select  * from google_accounts

create table admin_users (
    id int identity(1,1) Primary key,
	username varchar(255) not null,
	pass varchar(255) not null,
);

select * from admin_users;

INSERT INTO admin_users (username, pass) VALUES ('Oscar', 'P@ssw0rd');
INSERT INTO admin_users (username, pass) VALUES ('Yola', 'P@ssw0rd01');
