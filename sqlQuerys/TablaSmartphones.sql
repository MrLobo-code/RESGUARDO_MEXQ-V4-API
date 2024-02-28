use resguardoMEXQv3
select * from equipos

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
