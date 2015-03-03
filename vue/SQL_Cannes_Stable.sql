/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  02/03/2015 11:16:47                      */
/*==============================================================*/


drop table if exists ACTEUR;

drop table if exists CHAMBRE_MH;

drop table if exists FILMS;

drop table if exists HEBERGEMENT;

drop table if exists INDIVIDU;

drop table if exists JOUER;

drop table if exists JUGER;

drop table if exists JURY;

drop table if exists PROJETER;

drop table if exists PROPOSER;

drop table if exists REALISATEUR;

drop table if exists REALISER;

drop table if exists RESERVER;

drop table if exists SALLE;

drop table if exists SERVICE;

/*==============================================================*/
/* Table : ACTEUR                                               */
/*==============================================================*/
create table ACTEUR
(
   ID_INDIVIDU          smallint not null auto_increment,
   ID_ACTEUR		   smallint       not null,
   PERSONNAGE_INTERPRETE char(50),
   primary key (ID_INDIVIDU)
);

/*==============================================================*/
/* Table : CHAMBRE_MH                                           */
/*==============================================================*/
create table CHAMBRE_MH
(
   ID_TYPE_DE_CHAMBRE_MH smallint not null auto_increment,
   ID_HEBERGEMENT       int not null,
   NOM_TYPE_DE_CHAMBRE_MH varchar(20),
   NOMBRE_LITS          smallint,
   CAPACITE_MAXIMALE    smallint,
   ETAT                 smallint,
   NUMERO_CHAMBRE       tinyint,
   primary key (ID_TYPE_DE_CHAMBRE_MH)
);

/*==============================================================*/
/* Table : FILMS                                                */
/*==============================================================*/
create table FILMS
(
   ID_FILM              smallint not null auto_increment,
   NOM_FILM             varchar(50),
   GENRE_FILM           varchar(50),
   DUREE                double,
   CATEGORIE            varchar(20),
   primary key (ID_FILM)
);

/*==============================================================*/
/* Table : HEBERGEMENT                                          */
/*==============================================================*/
create table HEBERGEMENT
(
   ID_HEBERGEMENT       smallint not null auto_increment,
   NOM_HEBERGEMENT      varchar(50),
   TEL_HEBERGEMENT      numeric(50,0),
   CAPACITE_HEBERGEMENT smallint,
   NOMBRE_ETOILES       tinyint,
   RIB                  varchar(30),
   NUMERO_RUE_HEBERGEMENT smallint,
   RUE_HEBERGEMENT      varchar(200),
   CODE_POSTAL_HEBERGEMENT int,
   VILLE_HEBERGEMENT    varchar(50),
   NOM_CONTACT          varchar(50),
   PRENOM_CONTACT       varchar(50),
   MAIL_CONTACT         varchar(50),
   TEL_CONTACT          numeric(50),
   TYPE_HEBERGEMENT     char(20),
   primary key (ID_HEBERGEMENT)
);

/*==============================================================*/
/* Table : INDIVIDU                                             */
/*==============================================================*/
create table INDIVIDU
(
   ID_INDIVIDU          smallint not null auto_increment,
   NOM_INDIVIDU         varchar(20),
   PRENOM_INDIVIDU      varchar(20),
   TEL_INDIVIDU         numeric(20,0),
   TYPE_INDIVIDU        char(12),
   primary key (ID_INDIVIDU)
);

/*==============================================================*/
/* Table : JOUER                                                */
/*==============================================================*/
create table JOUER
(
   ID_INDIVIDU          smallint not null auto_increment,
   ID_FILM              smallint not null,
   primary key (ID_INDIVIDU, ID_FILM)
);

/*==============================================================*/
/* Table : JUGER                                                */
/*==============================================================*/
create table JUGER
(
   ID_INDIVIDU          smallint not null,
   ID_FILM              smallint not null,
   primary key (ID_INDIVIDU, ID_FILM)
);

/*==============================================================*/
/* Table : JURY                                                 */
/*==============================================================*/
create table JURY
(
   ID_INDIVIDU          smallint not null,
   N__JURY              smallint,
   primary key (ID_INDIVIDU)
);

/*==============================================================*/
/* Table : PROJETER                                             */
/*==============================================================*/
create table PROJETER
(
   ID_FILM              smallint not null,
   ID_SALLE             smallint not null,
   ID_PROJECTION        smallint,
   DATE_DEBUT_PROJECTION timestamp,
   DATE_FIN_PROJECTION  timestamp,
   primary key (ID_FILM, ID_SALLE)
);

/*==============================================================*/
/* Table : PROPOSER                                             */
/*==============================================================*/
create table PROPOSER
(
   ID_HEBERGEMENT       smallint not null,
   ID_SERVICE           smallint not null,
   primary key (ID_HEBERGEMENT, ID_SERVICE)
);

/*==============================================================*/
/* Table : REALISATEUR                                          */
/*==============================================================*/
create table REALISATEUR
(
   ID_INDIVIDU          smallint not null auto_increment,
   ID_REALISATEUR	   smallint, 
   NOMBRE_DE_FILMS_PRESENTES smallint,
   primary key (ID_INDIVIDU)
);

/*==============================================================*/
/* Table : REALISER                                             */
/*==============================================================*/
create table REALISER
(
   ID_INDIVIDU          smallint not null auto_increment,
   ID_FILM              smallint not null,
   primary key (ID_INDIVIDU, ID_FILM)
);

/*==============================================================*/
/* Table : RESERVER                                             */
/*==============================================================*/
create table RESERVER
(
   ID_TYPE_DE_CHAMBRE_MH smallint not null,
   ID_INDIVIDU          smallint not null,
   ID_RESERVATION       varchar(10),
   DATE_DEBUT_SEJOUR    timestamp,
   DATE_FIN_SEJOUR      timestamp,
   NOMBRE_DE__PERSONNES int,
   primary key (ID_TYPE_DE_CHAMBRE_MH, ID_INDIVIDU)
);

/*==============================================================*/
/* Table : SALLE                                                */
/*==============================================================*/
create table SALLE
(
   ID_SALLE             tinyint not null auto_increment,
   NOM_SALLE            varchar(50),
   CAPACITE             smallint,
   NUMERO_RUE_SALLE     smallint,
   RUE_SALLE            varchar(200),
   CODE_POSTAL_SALLE    int,
   VILLE_SALLE          varchar(50),
   primary key (ID_SALLE)
);

/*==============================================================*/
/* Table : SERVICE                                              */
/*==============================================================*/
create table SERVICE
(
   ID_SERVICE           smallint not null auto_increment,
   NOM_SERVICE          varchar(50),
   primary key (ID_SERVICE)
);

alter table ACTEUR add constraint FK_ETRE foreign key (ID_INDIVIDU)
      references INDIVIDU (ID_INDIVIDU) on delete restrict on update restrict;

alter table CHAMBRE_MH add constraint FK_APPARTENIR foreign key (ID_HEBERGEMENT)
      references HEBERGEMENT (ID_HEBERGEMENT) on delete restrict on update restrict;

alter table JOUER add constraint FK_JOUER foreign key (ID_FILM)
      references FILMS (ID_FILM) on delete restrict on update restrict;

alter table JOUER add constraint FK_JOUER2 foreign key (ID_INDIVIDU)
      references ACTEUR (ID_INDIVIDU) on delete restrict on update restrict;

alter table JUGER add constraint FK_JUGER foreign key (ID_FILM)
      references FILMS (ID_FILM) on delete restrict on update restrict;

alter table JUGER add constraint FK_JUGER2 foreign key (ID_INDIVIDU)
      references JURY (ID_INDIVIDU) on delete restrict on update restrict;

alter table JURY add constraint FK_ETRE3 foreign key (ID_INDIVIDU)
      references INDIVIDU (ID_INDIVIDU) on delete restrict on update restrict;

alter table PROJETER add constraint FK_PROJETER foreign key (ID_SALLE)
      references SALLE (ID_SALLE) on delete restrict on update restrict;

alter table PROJETER add constraint FK_PROJETER2 foreign key (ID_FILM)
      references FILMS (ID_FILM) on delete restrict on update restrict;

alter table PROPOSER add constraint FK_PROPOSER foreign key (ID_SERVICE)
      references SERVICE (ID_SERVICE) on delete restrict on update restrict;

alter table PROPOSER add constraint FK_PROPOSER2 foreign key (ID_HEBERGEMENT)
      references HEBERGEMENT (ID_HEBERGEMENT) on delete restrict on update restrict;

alter table REALISATEUR add constraint FK_ETRE2 foreign key (ID_INDIVIDU)
      references INDIVIDU (ID_INDIVIDU) on delete restrict on update restrict;

alter table REALISER add constraint FK_REALISER foreign key (ID_FILM)
      references FILMS (ID_FILM) on delete restrict on update restrict;

alter table REALISER add constraint FK_REALISER2 foreign key (ID_INDIVIDU)
      references REALISATEUR (ID_INDIVIDU) on delete restrict on update restrict;

alter table RESERVER add constraint FK_RESERVER foreign key (ID_INDIVIDU)
      references INDIVIDU (ID_INDIVIDU) on delete restrict on update restrict;

alter table RESERVER add constraint FK_RESERVER2 foreign key (ID_TYPE_DE_CHAMBRE_MH)
      references CHAMBRE_MH (ID_TYPE_DE_CHAMBRE_MH) on delete restrict on update restrict;

