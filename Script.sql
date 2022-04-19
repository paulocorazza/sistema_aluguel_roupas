use loja

create table users(
	id int not null primary key auto_increment,
	name varchar(50),
	login varchar(50),
	email  varchar(255),
	password varchar(255)

)

TRUNCATE table users
	
select * from users


drop table users 

insert into users (
name,login,email,password)
values 
('paulo corazza','paulocorazza','corazza.paulovinicius@gmail.com','$2y$10$55kZnftyCUWNRDnOfgmSFOg.fS3eI2UzfEwZXO7aI7H0GOnDPMC.q')

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
select * from customers c 

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

delete from clothes where type = 'dress'

truncate table clothes 


insert into clothes(code,photo,status,buyPrice,rentPrice,salePrice,size,type)
values 
('1','1.png','disponível',300.00,200.00,100.00,42,'dress')



create table leases(
	id int not null primary key auto_increment,
	customerId int,
	tryDate datetime,
	takeDate datetime,
	returnDate date,
	foreign key (customerId) references customers(id)	

)

select * from leases

insert into leases
(customerId,tryDate,takeDate,returnDate)
values 
(29,'2022-04-18 12:00:00','2022-04-18 12:00:00','2022-04-18 12:00:00')


select name as name,  tryDate as tryDate, takeDate l, returnDate l from customers c , leases l WHERE 
l.customerId  = c.id 








