create database climatique;
	use climatique;
	create table categorie(
			idCategorie int not null AUTO_INCREMENT,
			NomCategorie varchar(20),
			primary key(idCategorie)
		);

create table Contenu(
	idContenu int not null AUTO_INCREMENT,
	idCategorie int not null,
	Contenu varchar(20),
	resume varchar(20),
	dateContenu date,
	primary key(idContenu),
	foreign key(idCategorie) references categorie(idCategorie)
);

