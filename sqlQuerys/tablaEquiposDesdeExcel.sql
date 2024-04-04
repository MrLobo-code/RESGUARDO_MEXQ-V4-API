USE [resguardoMEXQv3]
GO
/****** Object:  Table [dbo].[equiposDeComputo]    Script Date: 31/03/2024 01:31:05 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- CREATE TABLE [dbo].[equiposDeComputo](
-- 	[codigo] [nvarchar](255) NULL,
-- 	[nomina] [float] NULL,
-- 	[nombre] [nvarchar](255) NULL,
-- 	[sucursal] [nvarchar](255) NULL,
-- 	[area] [nvarchar](255) NULL,
-- 	[marca] [nvarchar](255) NULL,
-- 	[modelo] [nvarchar](255) NULL,
-- 	[no_serie] [nvarchar](255) NULL,
-- 	[fecha] [datetime] NULL,
-- 	[no_factura] [nvarchar](255) NULL,
-- 	[proveedor] [nvarchar](255) NULL,
-- 	[estado] [nvarchar](255) NULL,
-- 	 [accion] [nvarchar](255) NULL
-- ) ON [PRIMARY]

create table [equiposDeComputo] (
-- id int identity(1,1) Primary key,
codigo varchar(255) null,
nombre varchar(255) null,
nomina int null,
num_tel int null,
puesto varchar(255),
email varchar(255),
sucursal varchar(255) null,
depto varchar(255),
area varchar(255) null,
marca varchar(255) null,
modelo varchar(255) null,
no_serie varchar(255) null,
fecha varchar(255) null,
no_factura varchar(255) null,
proveedor varchar(255) null,
estado varchar(255) null,
notas varchar(max) null,
accion varchar(255) null
);

GO


select * from equiposDeComputo

ALTER TABLE equiposDeComputo DROP COLUMN accion;
ALTER TABLE equiposDeComputo add accion varchar(255) null;

select * from equiposDeComputo where codigo = 'MQ155'

delete from equiposDeComputo 


-- BORRAMOS REGISTROS DUPLICADOS
 WITH C AS
 (
  SELECT codigo, nombre, nomina, num_tel, puesto, email, sucursal, depto, area, marca, modelo, no_serie, fecha, no_factura, proveedor, estado, notas, accion,
  ROW_NUMBER() OVER (PARTITION BY 
                    codigo
                    ORDER BY codigo) AS DUPLICADO
  FROM dbo.equiposDeComputo
 )
 DELETE FROM C 
 WHERE DUPLICADO > 1
--------------------------------
