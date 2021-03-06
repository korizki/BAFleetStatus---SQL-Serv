USE [master]
GO
/****** Object:  Database [ptba_cisea]    Script Date: 3/25/2022 09:15:55 ******/
CREATE DATABASE [ptba_cisea]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'ptba_cisea', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\ptba_cisea.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'ptba_cisea_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\ptba_cisea_log.ldf' , SIZE = 73728KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [ptba_cisea] SET COMPATIBILITY_LEVEL = 140
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [ptba_cisea].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [ptba_cisea] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [ptba_cisea] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [ptba_cisea] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [ptba_cisea] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [ptba_cisea] SET ARITHABORT OFF 
GO
ALTER DATABASE [ptba_cisea] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [ptba_cisea] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [ptba_cisea] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [ptba_cisea] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [ptba_cisea] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [ptba_cisea] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [ptba_cisea] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [ptba_cisea] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [ptba_cisea] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [ptba_cisea] SET  DISABLE_BROKER 
GO
ALTER DATABASE [ptba_cisea] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [ptba_cisea] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [ptba_cisea] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [ptba_cisea] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [ptba_cisea] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [ptba_cisea] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [ptba_cisea] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [ptba_cisea] SET RECOVERY FULL 
GO
ALTER DATABASE [ptba_cisea] SET  MULTI_USER 
GO
ALTER DATABASE [ptba_cisea] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [ptba_cisea] SET DB_CHAINING OFF 
GO
ALTER DATABASE [ptba_cisea] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [ptba_cisea] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [ptba_cisea] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [ptba_cisea] SET QUERY_STORE = OFF
GO
USE [ptba_cisea]
GO
/****** Object:  User [developer]    Script Date: 3/25/2022 09:15:56 ******/
CREATE USER [developer] WITHOUT LOGIN WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Schema [ptba_cisea]    Script Date: 3/25/2022 09:15:56 ******/
CREATE SCHEMA [ptba_cisea]
GO
/****** Object:  Table [dbo].[t_area]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_area](
	[id_area] [int] IDENTITY(18,1) NOT NULL,
	[area_type] [nvarchar](20) NOT NULL,
	[area_name] [nvarchar](100) NOT NULL,
 CONSTRAINT [PK_t_area_id_area] PRIMARY KEY CLUSTERED 
(
	[id_area] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_bbm]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_bbm](
	[no_trx] [int] IDENTITY(6,1) NOT NULL,
	[fuel_truck] [nvarchar](10) NOT NULL,
	[user_id] [nvarchar](40) NOT NULL,
	[no_id] [nvarchar](40) NOT NULL,
	[equipment] [nvarchar](30) NOT NULL,
	[material] [nvarchar](20) NOT NULL,
	[quantity] [int] NOT NULL,
	[meter_read] [real] NOT NULL,
	[type] [nvarchar](15) NOT NULL,
	[hm_awal] [real] NOT NULL,
	[hm_akhir] [real] NOT NULL,
	[petugas] [nvarchar](40) NOT NULL,
	[restock] [real] NOT NULL,
	[flow_awal] [real] NOT NULL,
	[flow_akhir] [real] NOT NULL,
 CONSTRAINT [PK_t_bbm_no_trx] PRIMARY KEY CLUSTERED 
(
	[no_trx] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_epa]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_epa](
	[ID] [int] IDENTITY(4841,1) NOT NULL,
	[HARI] [nvarchar](15) NOT NULL,
	[DATE] [date] NOT NULL,
	[SUPERVISOR] [nvarchar](30) NOT NULL,
	[SHIFT] [nvarchar](50) NOT NULL,
	[GROUPS] [nvarchar](2) NOT NULL,
	[LOKASI] [nvarchar](25) NOT NULL,
	[EQUIPMENT] [nvarchar](25) NOT NULL,
	[RITASE] [int] NOT NULL,
	[HM_AWAL] [real] NOT NULL,
	[HM_AKHIR] [real] NOT NULL,
	[HM_OPERASI] [real] NOT NULL,
	[JAM_OPERASI] [real] NOT NULL,
	[JAM_PENUNJANG] [real] NOT NULL,
	[JAM_LAIN] [real] NOT NULL,
	[BREAKDOWN] [real] NOT NULL,
	[NO_OPERATOR] [real] NOT NULL,
	[HUJAN] [real] NOT NULL,
	[STANDBY] [real] NOT NULL,
	[FUEL_TRUCK] [nvarchar](10) NOT NULL,
	[BBM_AWAL] [int] NOT NULL,
	[BBM_AKHIR] [int] NOT NULL,
	[HM_PENGISIAN] [real] NOT NULL,
	[REFUELLING] [int] NOT NULL,
	[JARAK_ANGKUT] [int] NOT NULL,
	[KETERANGAN] [nvarchar](200) NOT NULL,
 CONSTRAINT [PK_t_epa_ID] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_fleet]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_fleet](
	[id_fleet] [int] IDENTITY(28,1) NOT NULL,
	[fleet_unit] [nvarchar](100) NOT NULL,
	[fleet_hauler] [int] NOT NULL,
	[fleet_updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_t_fleet_id_fleet] PRIMARY KEY CLUSTERED 
(
	[id_fleet] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_flow]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_flow](
	[id_flow] [int] IDENTITY(31,1) NOT NULL,
	[fl_unit_name] [nvarchar](100) NOT NULL,
	[fl_info] [nvarchar](100) NOT NULL,
	[fl_updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_t_flow_id_flow] PRIMARY KEY CLUSTERED 
(
	[id_flow] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_historybd]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_historybd](
	[id_his] [int] IDENTITY(4,1) NOT NULL,
	[his_unit_name] [nvarchar](30) NOT NULL,
	[his_type] [nvarchar](20) NOT NULL,
	[his_detail] [nvarchar](200) NULL,
	[his_updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_t_historybd_id_his] PRIMARY KEY CLUSTERED 
(
	[id_his] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_hpp]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_hpp](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[penambangan] [nvarchar](30) NOT NULL,
	[lokasi] [nvarchar](35) NOT NULL,
	[rkap_biaya] [int] NOT NULL,
	[real_biaya] [int] NOT NULL,
	[persen_biaya] [real] NOT NULL,
	[rkap_hpp] [int] NOT NULL,
	[real_hpp] [int] NOT NULL,
	[persen_hpp] [real] NOT NULL,
 CONSTRAINT [PK_t_hpp_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_location]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_location](
	[id_data] [int] IDENTITY(43,1) NOT NULL,
	[loc_unit_name] [nvarchar](100) NOT NULL,
	[loc_area] [nvarchar](100) NOT NULL,
	[loc_location] [nvarchar](100) NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_t_location_id_data] PRIMARY KEY CLUSTERED 
(
	[id_data] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_losscategory]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_losscategory](
	[id_cat] [int] IDENTITY(106,1) NOT NULL,
	[status] [nvarchar](50) NOT NULL,
	[obstacle] [nvarchar](100) NOT NULL,
	[category] [nvarchar](100) NOT NULL,
 CONSTRAINT [PK_t_losscategory_id_cat] PRIMARY KEY CLUSTERED 
(
	[id_cat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_losstime]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_losstime](
	[id] [int] IDENTITY(47,1) NOT NULL,
	[date] [date] NOT NULL,
	[unit] [nvarchar](50) NOT NULL,
	[start_time] [smalldatetime] NOT NULL,
	[end_time] [smalldatetime] NOT NULL,
	[duration] [numeric](4, 2) NOT NULL,
	[obstacle] [nvarchar](100) NOT NULL,
	[keterangan] [nvarchar](200) NOT NULL,
 CONSTRAINT [PK_t_losstime_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_pekerja]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_pekerja](
	[id] [int] IDENTITY(31,1) NOT NULL,
	[nama] [nvarchar](40) NOT NULL,
	[jabatan] [nvarchar](30) NULL,
 CONSTRAINT [PK_t_pekerja_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[t_unit]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[t_unit](
	[id_unit] [int] IDENTITY(229,1) NOT NULL,
	[unit_name] [nvarchar](20) NOT NULL,
	[unit_type] [nvarchar](20) NULL,
	[area] [nvarchar](100) NOT NULL,
	[location] [nvarchar](100) NOT NULL,
	[status] [nvarchar](100) NOT NULL,
 CONSTRAINT [PK_t_unit_id_unit] PRIMARY KEY CLUSTERED 
(
	[id_unit] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [ptba_cisea].[t_losscategory]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [ptba_cisea].[t_losscategory](
	[id_cat] [int] IDENTITY(106,1) NOT NULL,
	[status] [nvarchar](50) NOT NULL,
	[obstacle] [nvarchar](100) NOT NULL,
	[category] [nvarchar](100) NOT NULL,
 CONSTRAINT [PK_t_losscategory_id_cat] PRIMARY KEY CLUSTERED 
(
	[id_cat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [ptba_cisea].[t_losstime]    Script Date: 3/25/2022 09:15:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [ptba_cisea].[t_losstime](
	[id] [int] IDENTITY(47,1) NOT NULL,
	[date] [date] NOT NULL,
	[unit] [nvarchar](50) NOT NULL,
	[start_time] [datetime2](0) NOT NULL,
	[end_time] [datetime2](0) NOT NULL,
	[duration] [numeric](4, 2) NOT NULL,
	[obstacle] [nvarchar](100) NOT NULL,
	[keterangan] [nvarchar](200) NOT NULL,
 CONSTRAINT [PK_t_losstime_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[t_fleet] ADD  DEFAULT (getdate()) FOR [fleet_updated_at]
GO
ALTER TABLE [dbo].[t_flow] ADD  DEFAULT (getdate()) FOR [fl_updated_at]
GO
ALTER TABLE [dbo].[t_historybd] ADD  DEFAULT (getdate()) FOR [his_updated_at]
GO
ALTER TABLE [dbo].[t_location] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [dbo].[t_pekerja] ADD  DEFAULT (NULL) FOR [jabatan]
GO
ALTER TABLE [dbo].[t_unit] ADD  DEFAULT (NULL) FOR [unit_type]
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_area' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_area'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_bbm' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_bbm'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_epa' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_epa'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_fleet' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_fleet'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_flow' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_flow'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_historybd' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_historybd'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_hpp' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_hpp'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_location' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_location'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_losscategory' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_losscategory'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_losstime' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_losstime'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_pekerja' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_pekerja'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_unit' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N't_unit'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_losscategory' , @level0type=N'SCHEMA',@level0name=N'ptba_cisea', @level1type=N'TABLE',@level1name=N't_losscategory'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'ptba_cisea.t_losstime' , @level0type=N'SCHEMA',@level0name=N'ptba_cisea', @level1type=N'TABLE',@level1name=N't_losstime'
GO
USE [master]
GO
ALTER DATABASE [ptba_cisea] SET  READ_WRITE 
GO
