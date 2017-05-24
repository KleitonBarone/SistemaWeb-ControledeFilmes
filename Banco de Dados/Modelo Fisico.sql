-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Filme (
Nome_filme Texto(1) PRIMARY KEY,
imagem image,
data de lancamento date,
duracao time,
sinopse Texto(1)
)

CREATE TABLE nota_ListaRep (
nota number,
Id_listareproducao number,
Nome_usuario Texto(1),
PRIMARY KEY(Id_listareproducao,Nome_usuario)
)

CREATE TABLE ListaRep (
Id_listareproducao number PRIMARY KEY,
nome Texto(1),
Nome_usuario Texto(1)
)

CREATE TABLE nota_Filme (
nota number,
Nome_filme Texto(1),
Nome_usuario Texto(1),
PRIMARY KEY(Nome_filme,Nome_usuario),
FOREIGN KEY(Nome_filme) REFERENCES Filme (Nome_filme)
)

CREATE TABLE Genero_Filme (
Nome_genero Texto(1),
Nome_filme Texto(1),
FOREIGN KEY(Nome_filme) REFERENCES Filme (Nome_filme)
)

CREATE TABLE Ator (
Nome_ator Texto(1) PRIMARY KEY,
imagem image,
data de nascimento date,
biografia Texto(1)
)

CREATE TABLE Ator_Filme (
Nome_ator Texto(1),
Nome_filme Texto(1),
FOREIGN KEY(Nome_ator) REFERENCES Ator (Nome_ator),
FOREIGN KEY(Nome_filme) REFERENCES Filme (Nome_filme)
)

CREATE TABLE Genero (
Nome_genero Texto(1) PRIMARY KEY
)

CREATE TABLE Filme_ListaRep (
Id_listareproducao number,
Nome_filme Texto(1),
FOREIGN KEY(Id_listareproducao) REFERENCES ListaRep (Id_listareproducao),
FOREIGN KEY(Nome_filme) REFERENCES Filme (Nome_filme)/*falha: chave estrangeira*/
)

CREATE TABLE Usuario (
Nome_usuario Texto(1) PRIMARY KEY,
senha Texto(1),
imagem image
)

ALTER TABLE nota_ListaRep ADD FOREIGN KEY(Id_listareproducao) REFERENCES ListaRep (Id_listareproducao)
ALTER TABLE nota_ListaRep ADD FOREIGN KEY(Nome_usuario) REFERENCES Usuario (Nome_usuario)
ALTER TABLE ListaRep ADD FOREIGN KEY(Nome_usuario) REFERENCES Usuario (Nome_usuario)
ALTER TABLE nota_Filme ADD FOREIGN KEY(Nome_usuario) REFERENCES Usuario (Nome_usuario)
ALTER TABLE Genero_Filme ADD FOREIGN KEY(Nome_genero) REFERENCES Genero (Nome_genero)
