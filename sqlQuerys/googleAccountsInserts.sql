USE resguardoMEXQv3
GO
/****** Object:  Table [dbo].[google_accounts]    Script Date: 19/04/2024 09:26:57 a. m. ******/
-- SET ANSI_NULLS ON
-- GO
-- SET QUOTED_IDENTIFIER ON
-- GO

drop table google_accounts

CREATE TABLE [dbo].google_accounts(
	id int identity(1,1) Primary key,
	sucursal [nvarchar](255) NULL,
	cuenta [nvarchar](255) NULL,
	clave [nvarchar](255) NULL,
	fecha_actualizacion [nvarchar](255) NULL,
	notas [nvarchar](255) NULL,
	-- accion [nvarchar](255) NULL
)
-- ) ON [PRIMARY]

INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'Corporativo', N'desarrolloorganizacional712@gmail.com', N'desarrollo_mexq99_orga', CAST(N'2024-04-17T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'Henkel', N'henkel.mexq@gmail.com', N'F%A0Y54Hd', CAST(N'2023-02-16T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'Jalisco', N'mexqjalisco@gmail.com', N'P@ssw0rdJal', CAST(N'2023-01-16T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'HELLA', N'hellamexq17', N'P@ssw0rdHella', CAST(N'2023-01-13T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'operaciones.mexq2', N'yuhh*$O3698u', CAST(N'2022-11-15T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'ags.mexq@gmail.com', N'jPh0x9y0!iu1', CAST(N'2022-11-07T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'mexqnissan@gmail.com', N'P@ssw0rdNissan', CAST(N'2022-11-04T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'Nissan', N'staffnissan0', N'P@ssw0rd012', CAST(N'2022-09-22T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'transportesmexq21', N'P@ssw0rd_Tran', CAST(N'2022-07-26T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'choferagscorporativo2@gmail.com', N'P@ssw0rd_Chofer', CAST(N'2022-07-18T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'choferagscorporativo3@gmail.com', N'P@ssw0rd_Chofer', CAST(N'2022-07-18T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'guanajuatomexq8@gmail.com', N'2018-jmC', CAST(N'2022-07-18T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'transportes', N'choferagscorporativo1', N'P@ssw0rd_Chofer', CAST(N'2022-07-12T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'ventas', N'mexq.ventas2', N'Ph4NAxwy', CAST(N'2022-06-01T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'capscitacion@gmail.com', N'P@ssw0rdCAP', CAST(N'2022-04-08T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'Morelos', N'morelos.mexq@gmail.com', N'P@ssw0rd_MORe', CAST(N'2021-10-29T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'PUE', N'puebla.mexq@gmail.com', N'P@ssw0rd_Puebla', CAST(N'2021-10-15T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'nomina.mexq@gmail.com', N'P@ssw0rdNOM', CAST(N'2021-10-15T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'qr.emarca@outlook.com', N'P@ssw0rd_COR', CAST(N'2021-10-12T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'calidad.cdn.mexq', N'P@ssw0rdCAL', CAST(N'2021-09-30T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'sistemas.mexq@gmail.com', N'P@ssw0rd_rfc', CAST(N'2021-09-22T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'choferes.mexq@gmail.com', N'P@ssw0rd_Chof', CAST(N'2021-08-31T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'emarca.mexq@gmail.com', N'P@ssw0rd_EMarca', CAST(N'2021-08-27T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'rm.mexq@gmail.com', N'P@ssw0rd_RecMat', CAST(N'2021-08-20T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'admonserv.qobro@gmail.com', N'P@ssw0rd_COR', CAST(N'2021-08-20T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'Nuevo Leon', N'NUEVOLEON.MEXQ@gmail.com', N'P@ssw0rd_NLMx', CAST(N'2021-08-19T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'SLW', N'coah.mexq@gmail.com', N'P@ssw0rd_CoAh', CAST(N'2021-07-28T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'SON', N'son.mexq@gmail.com', N'Tf.EHw$J8A#T', CAST(N'2021-07-14T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'GTO', N'coordinadora.gto1', N'YmLTzrErzs95', CAST(N'2021-06-24T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'archivosdrive.mexq@gmail.com', N'P@ssw0rd99', CAST(N'2020-11-26T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'mexq.sac@gmail.com', N'P@ssw0rd_COR', CAST(N'2020-11-02T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'rebote-crm@gmail.com', N'P@ssw0rdCRM', CAST(N'2020-04-16T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'QRO', N'queretaro.mexq@gmail.com', N'whEeRqEC', CAST(N'2019-07-05T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'aguascalientes.mexq@gmail.com', N'h%]e?m,w2L&L', CAST(N'2019-02-22T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'operaciones.mexqags@gmail.com', N'kifmF8uR', CAST(N'2019-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'cobranza.mexq@gmail.com', N'rCS9uS9EUB1c', CAST(N'2019-02-13T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'MET', N'metro.mexq@gmail.com', N'V!ub?^%;Dp#Q', CAST(N'2019-01-08T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'mci.mexq@gmail.com', N'P@ssw0rd_MCI', CAST(N'2018-10-09T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'sistemas.mexq@gmail.com', N'P@ssw0rdCOR', CAST(N'2018-07-12T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'captura.mexq@gmail.com', N'P@ssw0rd_INFO', CAST(N'2018-07-12T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'direccion.mexq@gmail.com', N'P@ssw0rdDIR', CAST(N'2018-07-04T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'rh.mexq@gmail.com', N'P@ssw0rd_RH', CAST(N'2018-06-28T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'GTO', N'mexq.gto@gmail.com', N'P@ssw0rd_GTO', CAST(N'2018-06-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'BCN', N'bcalifornia.mexq@gmail.com', N'bcn.m3xq2018', CAST(N'2018-06-07T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'SLP', N'slp.mexq@gmail.com', N'slp.m3xq2018', CAST(N'2018-05-23T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CHI', N'chihuahua.mexq@gmail.com', N'drefadR2', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'jefeoperaciones.mexq@gmail.com', N'wapk@-qz', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'PUE', N'jcpinales.mexq@gmail.com', N'xZU0FbYo', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'BCN', N'omunguia.mexq@gmail.com', N'sPj2TQ9N', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'GTO', N'eortega.mexq@gmail.com', N'CQrdTRiN', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'GTO', N'guanajuato.mq@gmail.com', N'2018-jmC', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'JAL', N'jalisco.mexq@gmail.com', N'iiSHIXGb', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'mexqrm@gmail.com', N'M3xq_RM99', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'mexq.ventas@gmail.com', N'Ph4NAxwy', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'AGS', N'reclutamientoags.mexq@gmail.com', N'PArurek3', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'corporativo.mexq@gmail.com', N'P@ssw0rdCOR', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)
INSERT [dbo].[google_accounts] ([sucursal], [cuenta], [clave], [fecha_actualizacion], [notas]) VALUES (N'CORPORATIVO', N'ljimenez.mexq@gmail.com', N'YAKYes00', CAST(N'2018-02-21T00:00:00.000' AS DateTime), NULL)

select * from google_accounts
