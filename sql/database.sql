drop database IF EXISTS animal_adoption;
CREATE DATABASE animal_adoption;
use animal_adoption;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL
);

CREATE TABLE `petType`(
    `idTypePet` int(11) NOT NULL PRIMARY KEY,
    `nametype` varchar(30) NOT NULL
);

CREATE TABLE `statusPet`(
    `idStatus` int(11) NOT NULL PRIMARY KEY,
    `namestatus` varchar(30) NOT NULL
);

CREATE TABLE `pet`(
    `idPet` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idTypePet` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `age` int(11) NOT NULL,
    `image` varchar(100) NOT NULL,
    `idStatus` int(11) NOT NULL,
    `iduser` int(11) NULL,
    CONSTRAINT FK_pet_petType FOREIGN KEY (`idTypePet`)
    REFERENCES petType(`idTypePet`) ,
    CONSTRAINT FK_pet_status FOREIGN KEY (`idStatus`)
    REFERENCES statusPet(`idStatus`),
    CONSTRAINT FK_pet_user FOREIGN KEY (`iduser`)
    REFERENCES user(`id`)
);

CREATE TABLE `history_adoption`(
    `idhistoryadoption` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `idPet` int(11) NOT NULL,
    `iduser` int(11) NULL,
    `idStatus` int(11) NOT NULL,
    `date` datetime NOT NULL,
    CONSTRAINT FK_history_pet FOREIGN KEY (`idPet`)
    REFERENCES pet(`idPet`) ,
    CONSTRAINT FK_history_status FOREIGN KEY (`idStatus`)
    REFERENCES statusPet(`idStatus`),
    CONSTRAINT FK_history_user FOREIGN KEY (`iduser`)
    REFERENCES user(`id`)    
);

insert into statusPet values(1,'active');
insert into statusPet values(2,'in process');
insert into statusPet values(3,'adopted');

insert into petType values(1,'dog');
insert into petType values(2,'cat');

INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone_number`, `address`) VALUES
(1, 'user1@gmail.com', 'user1', 'Ruy', '123456', 'adress');
INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone_number`, `address`) VALUES
(2, 'user2@udjd.com', 'user2', 'Angel', '123444', 'adress');
INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone_number`, `address`) VALUES
(3, 'user3@admin.com', 'user3', 'Luis Brayan', '123456', 'adress');
INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone_number`, `address`) VALUES
(4, 'admin@admin.com', 'admin', 'Admin', '123456', 'adress');

insert into pet values(0,1,'Haku',6,'',1,null);
insert into pet values(0,1,'Simba',6,'',1,null);
insert into pet values(0,2,'Polo',6,'',1,null);

commit;

DELIMITER $$
CREATE TRIGGER pet_trig
AFTER UPDATE ON `pet` FOR EACH ROW
begin

    IF OLD.idstatus != NEW.idstatus THEN

       insert into history_adoption
        values(0,NEW.idpet,NEW.iduser,NEW.idstatus,NOW());
       
	END IF;
       
END;
$$
DELIMITER ;