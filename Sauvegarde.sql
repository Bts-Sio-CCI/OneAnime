USE [master]
GO
/****** Object:  Database [OneManga]    Script Date: 17/10/2024 09:19:41 ******/
CREATE DATABASE [OneManga]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'OneManga', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER\MSSQL\DATA\OneManga.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 10%)
 LOG ON 
( NAME = N'OneManga_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER\MSSQL\DATA\OneManga_log.ldf' , SIZE = 1024KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [OneManga] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [OneManga].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [OneManga] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [OneManga] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [OneManga] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [OneManga] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [OneManga] SET ARITHABORT OFF 
GO
ALTER DATABASE [OneManga] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [OneManga] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [OneManga] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [OneManga] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [OneManga] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [OneManga] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [OneManga] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [OneManga] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [OneManga] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [OneManga] SET  DISABLE_BROKER 
GO
ALTER DATABASE [OneManga] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [OneManga] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [OneManga] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [OneManga] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [OneManga] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [OneManga] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [OneManga] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [OneManga] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [OneManga] SET  MULTI_USER 
GO
ALTER DATABASE [OneManga] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [OneManga] SET DB_CHAINING OFF 
GO
ALTER DATABASE [OneManga] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [OneManga] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [OneManga] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [OneManga] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'OneManga', N'ON'
GO
ALTER DATABASE [OneManga] SET QUERY_STORE = ON
GO
ALTER DATABASE [OneManga] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [OneManga]
GO
/****** Object:  User [Aldwin]    Script Date: 17/10/2024 09:19:41 ******/
CREATE USER [Aldwin] WITHOUT LOGIN WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Schema [onemanga]    Script Date: 17/10/2024 09:19:42 ******/
CREATE SCHEMA [onemanga]
GO
/****** Object:  Table [dbo].[Administrateur]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Administrateur](
	[idAdmin] [int] NOT NULL,
	[roleAdmin] [varchar](50) NULL,
	[idAdmin_1] [int] NULL,
	[idUtilisateur] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idAdmin] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[idUtilisateur] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Categoriser]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Categoriser](
	[idManga] [int] NOT NULL,
	[idGenre] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idManga] ASC,
	[idGenre] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Client]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Client](
	[idClient] [int] NOT NULL,
	[adresseLivraison] [varchar](100) NULL,
	[moyenPaiement] [varchar](50) NULL,
	[CP] [varchar](5) NULL,
	[idUtilisateur] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idClient] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[idUtilisateur] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Commande]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Commande](
	[idCommande] [int] IDENTITY(1,1) NOT NULL,
	[prixTotal] [decimal](15, 2) NOT NULL,
	[qteManga] [int] NOT NULL,
	[idClient] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idCommande] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Evenement]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Evenement](
	[idEvent] [int] IDENTITY(1,1) NOT NULL,
	[dateDebutEvent] [date] NOT NULL,
	[dateFinEvent] [date] NOT NULL,
	[description] [varchar](100) NOT NULL,
	[niveau] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idEvent] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[genreManga]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[genreManga](
	[idGenre] [int] IDENTITY(1,1) NOT NULL,
	[nomGenre] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idGenre] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Gerer]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Gerer](
	[idEvent] [int] NOT NULL,
	[idAdmin] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idEvent] ASC,
	[idAdmin] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Manga]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Manga](
	[idManga] [int] IDENTITY(1,1) NOT NULL,
	[prix] [decimal](19, 4) NOT NULL,
	[description] [varchar](100) NOT NULL,
	[nomManga] [varchar](50) NOT NULL,
	[dateSortie] [date] NOT NULL,
	[statut] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idManga] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[OrdreDuJour]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[OrdreDuJour](
	[idReunion] [int] NOT NULL,
	[idOrdreJour] [int] IDENTITY(1,1) NOT NULL,
	[libelle] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[idReunion] ASC,
	[idOrdreJour] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Organiser]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Organiser](
	[idAdmin] [int] NOT NULL,
	[idReunion] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idAdmin] ASC,
	[idReunion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Panier]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Panier](
	[idManga] [int] NOT NULL,
	[idCommande] [int] NOT NULL,
	[qteManga] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idManga] ASC,
	[idCommande] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Participer]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Participer](
	[idUtilisateur] [int] NOT NULL,
	[idEvent] [int] NOT NULL,
	[absence] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[idUtilisateur] ASC,
	[idEvent] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Reunions]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Reunions](
	[idReunion] [int] NOT NULL,
	[dateReu] [date] NULL,
	[heureDebut] [time](7) NULL,
	[heureFin] [time](7) NULL,
PRIMARY KEY CLUSTERED 
(
	[idReunion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Utilisateur]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Utilisateur](
	[idUtilisateur] [int] IDENTITY(1,1) NOT NULL,
	[prenom] [varchar](50) NOT NULL,
	[nom] [varchar](50) NOT NULL,
	[dateNaissance] [date] NOT NULL,
	[email] [varchar](100) NOT NULL,
	[motDePasse] [varchar](255) NOT NULL,
	[nomUtilisateur] [varchar](50) NOT NULL,
	[nomCategorie] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[idUtilisateur] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Administrateur]  WITH CHECK ADD FOREIGN KEY([idAdmin_1])
REFERENCES [dbo].[Administrateur] ([idAdmin])
GO
ALTER TABLE [dbo].[Administrateur]  WITH CHECK ADD FOREIGN KEY([idUtilisateur])
REFERENCES [dbo].[Utilisateur] ([idUtilisateur])
GO
ALTER TABLE [dbo].[Categoriser]  WITH CHECK ADD FOREIGN KEY([idGenre])
REFERENCES [dbo].[genreManga] ([idGenre])
GO
ALTER TABLE [dbo].[Categoriser]  WITH CHECK ADD FOREIGN KEY([idManga])
REFERENCES [dbo].[Manga] ([idManga])
GO
ALTER TABLE [dbo].[Client]  WITH CHECK ADD FOREIGN KEY([idUtilisateur])
REFERENCES [dbo].[Utilisateur] ([idUtilisateur])
GO
ALTER TABLE [dbo].[Commande]  WITH CHECK ADD FOREIGN KEY([idClient])
REFERENCES [dbo].[Client] ([idClient])
GO
ALTER TABLE [dbo].[Gerer]  WITH CHECK ADD FOREIGN KEY([idAdmin])
REFERENCES [dbo].[Administrateur] ([idAdmin])
GO
ALTER TABLE [dbo].[Gerer]  WITH CHECK ADD FOREIGN KEY([idEvent])
REFERENCES [dbo].[Evenement] ([idEvent])
GO
ALTER TABLE [dbo].[OrdreDuJour]  WITH CHECK ADD FOREIGN KEY([idReunion])
REFERENCES [dbo].[Reunions] ([idReunion])
GO
ALTER TABLE [dbo].[Organiser]  WITH CHECK ADD FOREIGN KEY([idAdmin])
REFERENCES [dbo].[Administrateur] ([idAdmin])
GO
ALTER TABLE [dbo].[Organiser]  WITH CHECK ADD FOREIGN KEY([idReunion])
REFERENCES [dbo].[Reunions] ([idReunion])
GO
ALTER TABLE [dbo].[Panier]  WITH CHECK ADD FOREIGN KEY([idCommande])
REFERENCES [dbo].[Commande] ([idCommande])
GO
ALTER TABLE [dbo].[Panier]  WITH CHECK ADD FOREIGN KEY([idManga])
REFERENCES [dbo].[Manga] ([idManga])
GO
ALTER TABLE [dbo].[Participer]  WITH CHECK ADD FOREIGN KEY([idEvent])
REFERENCES [dbo].[Evenement] ([idEvent])
GO
ALTER TABLE [dbo].[Participer]  WITH CHECK ADD FOREIGN KEY([idUtilisateur])
REFERENCES [dbo].[Utilisateur] ([idUtilisateur])
GO
/****** Object:  StoredProcedure [dbo].[MettreAJourUtilisateur]    Script Date: 17/10/2024 09:19:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[MettreAJourUtilisateur]
    @idUtilisateur INT,
    @prenom VARCHAR(50),
    @nom VARCHAR(50),
    @dateNaissance DATE,
    @email VARCHAR(100),
    @motDePasse VARCHAR(255),
    @nomUtilisateur VARCHAR(50),
    @nomCategorie VARCHAR(50)
AS
BEGIN
    UPDATE Utilisateur
    SET prenom = @prenom,
        nom = @nom,
        dateNaissance = @dateNaissance,
        email = @email,
        motDePasse = @motDePasse,
        nomUtilisateur = @nomUtilisateur,
        nomCategorie = @nomCategorie
    WHERE idUtilisateur = @idUtilisateur;
END;

GO
USE [master]
GO
ALTER DATABASE [OneManga] SET  READ_WRITE 
GO
