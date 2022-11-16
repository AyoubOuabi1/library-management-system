CREATE TABLE `admin` (
  `adminId` int(11)  primary key auto_increment,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
);
CREATE TABLE `book` (
  `bookId` int(11) primary key auto_increment ,
  `bookName` varchar(255)  ,
  `isbn` varchar(13)  ,
  `writer` varchar(255)  ,
  `language` varchar(100)  ,
  `dateBook` date  ,
  `inputedDate` date  ,
  `category` varchar(255)  ,
  `adminId` int(11),
  FOREIGN KEY  (adminId) references admin(adminId)
);
CREATE TABLE `outbook` (
  `outId` int(11) primary key auto_increment,
  `outDate` date,
  `stdName` varchar(255),
  `bookId` int(11),
  `adminId` int(11),
  FOREIGN KEY  (adminId) references admin(adminId),
  FOREIGN KEY  (bookId) references book  (bookId)
);

CREATE  PROCEDURE `insertIntoAdmin` (`firstN` VARCHAR(255), `lastN` VARCHAR(255), `emaill` VARCHAR(255), `passwordd` VARCHAR(255))
begin
    insert into admin (firstName, lastName, email, password) values (firstN,lastN,emaill,passwordd);
end;


CREATE PROCEDURE insertIntoBook(bId int,bName varchar(255),bISBN varchar(13),bWriter varchar(255),bLang varchar(255),bDate date,bCat varchar(255),bAdId int(11))
begin
    insert into book values (null,bId,bName,bISBN,bWriter,bLang,bDate,SYSDATE(),bCat,bAdId);
end;

CREATE PROCEDURE insertIntoOutbook(std varchar(255),bId int(11),aId int(11))
begin
    insert into outbook values (null,sysdate(),std,bId,aId);
end;