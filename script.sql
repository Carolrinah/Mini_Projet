create table Contenu(
	idContenu int not null AUTO_INCREMENT,
	Contenu varchar(200),
	resume varchar(200),
	dateContenu date,
	titre varchar(200),
	url varchar(100),
	primary key(idContenu)
);
create table user(
	idUser int not null AUTO_INCREMENT,
	user varchar(20),
	mdp varchar(4),
	primary key(idUser)
);

insert into Contenu(contenu,resume,dateContenu,titre,url) values
('visant a empêcher la temperature mondiale de depasser de 1,5 °C les niveaux preindustriels','la temperature a la surface du globe est superieure denviron 1,1 °C','2020-01-02',
	'Hausse de la temperature','url=idContenu-ito');
insert into Contenu(contenu,resume,dateContenu,titre,url) values('Les villes contribuent significativement aux changements climatiques. Selon ONU-Habitat, 
les villes comptent pour 78 % de la consommation energetique mondiale et
 produisent plus de 60 % des emissions de gaz à effet de serre. 
Pourtant, elles representent moins de 2 % de la surface de la Terre.','Une grande partie des emissions mondiales de gaz a effet de serre provient de l''utilisation
 de combustibles fossiles','2022-02-18','les villes et pollution','url=idContenu-ito');
insert into Contenu(contenu,resume,dateContenu,titre,url) values('
le rechauffement climatique est provoque beaucoup plusieurs effets sur notre planete et surtout dans la vie quotidienne par
 l''augmentation des secheresse afin que la famine s''evalue temps en temps','cette changements provoque plusieurs effets','2019-09-08','consequences','url=idContenu-ito');
 insert into user (user,mdp) values ('carolrinah@gmail.com','1234');