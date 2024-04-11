use resguardoMEXQv3
select * from equipos
select * from equiposDeComputo
select *from Sheet0$

select * from equiposDeComputo where codigo = 'MQ399'

select * from equiposDeComputo where codigo = NULL

delete from equiposDeComputo where codigo = NULL

drop table equiposDeComputo

drop table equipos

create table equipos (
id int identity(1,1) Primary key,
codigo varchar(255) not null,
nombre varchar(255) not null,
nomina int not null,
num_tel int not null,
puesto varchar(255),
email varchar(255),
sucursal varchar(255) not null,
depto varchar(255),
area varchar(255) not null,+
marca varchar(255) not null,
modelo varchar(255) not null,
no_serie varchar(255) not null,
fecha varchar(255) not null,
no_factura varchar(255) not null,
proveedor varchar(255) not null,
estado varchar(255) not null,
notas varchar(max)
);


CREATE TABLE [dbo].[equiposDeComputo] (
[codigo] varchar(255),
[nomina] int,
[nombre] varchar(255),
[sucursal] varchar(255),
[area] varchar(255),
[marca] varchar(255),
[modelo] varchar(255),
[no_erie] varchar(255),
[fecha] varchar(255),
[no_actura] varchar(255),
[proveedor] varchar(255),
[estado] varchar(255),
[accion] varchar(255),
[num_tel] int,
[puesto] varchar(255),
[email] varchar(255), 
[depto]  varchar(255),
[notas] varchar(255)
)


INSERT INTO equipos (codigo, nomina, nombre, sucursal, area, marca, modelo, no_serie, fecha, no_factura, proveedor, estado, notas)
VALUES ('Oscar', 35653, 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'rhyj', 'Split the text into chunks that your database can actually handle. And, put the split up text in another table. Use the id from the text_chunk table as text_chunk_id in your original table. You might want another column in your table to keep text that fits within your largest text data type.');

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
    notas varchar(max)
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
    notas varchar(max)
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


use resguardomexqV2

