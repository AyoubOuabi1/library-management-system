CREATE TABLE `admin` (
  `adminId` int(11)  primary key auto_increment,
  `firstName` varchar(255)  ,
  `lastName` varchar(255)  ,
  `email` varchar(255)  ,
  `password` varchar(255)
);
CREATE TABLE `book` (
  `bookId` int(11) primary key auto_increment ,
  `bookName` varchar(255)  ,
  `isbn` varchar(13)  ,
  `writer` varchar(255)  ,
  `language` varchar(100)  ,
  `releaseDate` date  ,
  `inputedDate` date  ,
  `category` varchar(255)  ,
  `adminId` int(11),
   quqntity int(11),
  FOREIGN KEY  (adminId) references admin(adminId) on delete cascade  on update  cascade
);

CREATE TABLE `outbook` (
  `outId` int(11) primary key auto_increment,
  `outDate` date,
  `stdName` varchar(255),
  `bookId` int(11),
  `adminId` int(11),
  FOREIGN KEY  (adminId) references admin(adminId) on delete cascade  on update  cascade,
  FOREIGN KEY  (bookId) references book  (bookId) on delete cascade  on update  cascade
);

CREATE  PROCEDURE `insertIntoAdmin` (`firstN` VARCHAR(255), `lastN` VARCHAR(255), `emaill` VARCHAR(255), `passwordd` VARCHAR(255))
begin
    insert into admin (firstName, lastName, email, password) values (firstN,lastN,emaill,passwordd);
end;


CREATE PROCEDURE insertIntoBook(bName varchar(255),bISBN varchar(13),bWriter varchar(255),bLang varchar(255),bDate date,bCat varchar(255),bAdId int(11),qnt int(11))
begin
    insert into book values (null,bName,bISBN,bWriter,bLang,bDate,SYSDATE(),bCat,bAdId,qnt);
end;

CREATE PROCEDURE insertIntoOutbook(std varchar(255),bId int(11),aId int(11))
begin
    insert into outbook values (null,sysdate(),std,bId,aId);
end;

create view booksData as
    select bookId,bookName,isbn,writer,language,releaseDate,inputedDate,category,quqntity,a.firstName,a.lastName from book join admin a on a.adminId = book.adminId where quqntity>0;


create view outedBooksData as
    select outId,outDate,stdName, b.bookId,b.bookName,b.isbn,b.writer,b.language,b.releaseDate,b.inputedDate,b.category,b.quqntity,a.firstName,a.lastName from outbook join admin a on a.adminId = outbook.adminId join book b on b.bookId = outbook.bookId;

create procedure updateBook(bkId int(11),bName varchar(255),bISBN varchar(13),bWriter varchar(255),bLang varchar(255),bDate date,bCat varchar(255),qnt int(11))
begin
    UPDATE `book` SET  `bookName`=bName,`isbn`=bISBN,`writer`=bWriter,`language`=bLang,`releaseDate`=bDate,`category`=bCat,`quqntity`=qnt WHERE `bookId`=bkId;
end;
create procedure deleteFromBook(bkId int(11))
begin
    DELETE FROM `book` WHERE `bookId`=bkId;
end;
CREATE PROCEDURE updateOutbook(outBkId int,std varchar(255))
begin
    UPDATE `outbook` SET `stdName`=std WHERE `outId`=outBkId;
end;
create procedure deleteFromOutedBook(outBkId int(11))
begin
    DELETE FROM `outbook` WHERE `outId`=outBkId;
end;
create procedure updateAdmin(adminIdd int(11), firstNamee varchar(255)  ,lastNamee varchar(255)  ,emaill varchar(255)  ,passwordd varchar(255))
begin
    UPDATE `admin` SET `firstName`=firstNamee,`lastName`=lastNamee,`email`=emaill,`password`=passwordd WHERE adminId=adminIdd;
end;