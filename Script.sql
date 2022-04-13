use loja

TRUNCATE table users

select * from users

insert into users (
name,email,password)
values 
('paulo corazza','corazza.pausdlovinicius@fgmail.com','$2y$10$puzo.OACMoGS1ephOM7k7uYS8TttD2txLKMMIPFoQGbBjuoh5pEly')

alter table users drop column date

alter table users add column date TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()


SELECT @@global.time_zone, @@session.time_zone;

CREATE table customers(
   id int not null primary key auto_increment,
   name varchar(50),
   surname varchar(50),
   street varchar(50),
   addressNumber int,
   addressComplement varchar(50),
   state varchar(25),
   city varchar(25),
   phoneNumber varchar(20),
   email varchar(50),
   birthday date,
   created_at TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

select * from customers 

insert into customers 
(name,surname,street,addressNumber,addressComplement,state,city,phoneNumber,email,birthday)
values 
('Paulo',
'Corazza',
'Turquesa',
29,
'vila preciosa',
'São Paulo',
'Cabreúva',
'11 97281-3500',
'corazza.paulovinicius@gmail.com',
'1992-09-23')

describe customers 

update customers set name = 'John' where city = 'Cabreúva'

create table clothes(
	id int not null auto_increment primary key,
	code varchar(10),
	photo varchar(255),
	status varchar(25),
	buyPrice decimal(6,2),
	rentPrice decimal(6,2),
	salePrice decimal(6,2),
	size int,
	type varchar(25)
)

select * from clothes 

insert into clothes(code,photo,status,buyPrice,rentPrice,salePrice,size,type)
values 
('1','1.png','disponível',300.00,200.00,100.00,42,'dress')