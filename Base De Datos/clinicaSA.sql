create database ClinicaSanAntonio;
use  ClinicaSanAntonio;


create table paciente (idpaciente int(10) auto_increment primary key unique, fechanac date, nompaciente varchar(100), password varchar(20), sexo char, 
tipoSangre varchar(3), peso float(5), estatura float(3), domicilio varchar(130), email varchar(255), telCasa varchar(10), telCel varchar(10),
enfermedades varchar(100), alergias  varchar (100), cirugias_accidentes varchar(100));
 
 create table medicos(NombreMed varchar(100), CedulaP varchar(8) unique, especialidad varchar(30), email varchar(255), password varchar(20), 
 IdMedico int(10) auto_increment primary key unique );

create table citas (fechaC date, hora time, idpaciente int(10), foreign key(idpaciente) references paciente(idpaciente), 
IdMedico int(10), foreign key(idmedico) references medicos(idmedico), fechaCancel datetime,
 idcitas int(10) auto_increment primary key );

-- 5 paciente, 5 medicos y 15 citas 
 insert into paciente
( fechanac, nompaciente, password, sexo, tiposangre, peso, estatura, domicilio, email, telCasa, TelCel, enfermedades,
 alergias, cirugias_accidentes) values ('1990-01-12', 'Jorge Sanchez', '12345', 'M', 'o+', 70.63, 1.60, 'av. libertad y 10 #1433', 'jorge@gmail.com',
6535357910, 6531299818, 'ninguna', 'ninguno', 'niguno');

 insert into paciente
( fechanac, nompaciente, password, sexo, tiposangre, peso, estatura, domicilio, email, telCasa, TelCel, enfermedades,
 alergias, cirugias_accidentes) values ('1990-10-19', 'Javier Lopez', 'fg883297rf', 'M', 'A+', 58.63, 1.73, 'av. sonora y 10 #1003', 'JavierL@gmail.com',
6535357910, 6531299918, 'ninguna', 'paracetamol', 'niguno');

 insert into paciente
( fechanac, nompaciente, password, sexo, tiposangre, peso, estatura, domicilio, email, telCasa, TelCel, enfermedades,
 alergias, cirugias_accidentes) values ('1990-05-25', 'Manuel Hernandez', 'fg3297rf', 'M', 'o+', 120.63, 1.89, 'av. Nayarit y 10 #1023', 'Manu123@gmail.com',
6535357910, 6531299918, 'Diabetes', 'Temazepam', 'Ninguna');

 insert into paciente
( fechanac, nompaciente, password, sexo, tiposangre, peso, estatura, domicilio, email, telCasa, TelCel, enfermedades,
 alergias, cirugias_accidentes) values ('1979-12-24', 'Maria Sanchez', 'hj883297', 'F', 'A+', 140.63, 1.65, 'av. Hidalgo y 30 #3003', 'MariaS@gmail.com',
6535357910, 6531299918, 'Diabetes', 'Ninguna', 'Cirugia en el pie');

 insert into paciente
( fechanac, nompaciente, password, sexo, tiposangre, peso, estatura, domicilio, email, telCasa, TelCel, enfermedades,
 alergias, cirugias_accidentes) values ('1999-5-22', 'Luisa Morales', 'Luisa1234', 'F', 'o+', 90.63, 1.70, 'av. sonora y 10 #1003', 'Lmorales12@gmail.com',
6535359910, 6531139918, 'Presion Alta', 'Ninguna', 'niguno');

-- medicos
insert into medicos (NombreMed, CedulaP, especialidad, email, password ) VALUES ('MANUEL BARRERA','FG76878F','Pediatria','Manu123@gmail.com','12345');

insert into medicos (NombreMed, CedulaP, especialidad, email, password ) VALUES ('Maria Perez','AJ96878F','Medicina Interna','Ma123@gmail.com','12345');

insert into medicos (NombreMed, CedulaP, especialidad, email, password ) VALUES ('Mario Ruiz','IJ76658F','Medicina Intensiva','Mario123@gmail.com','12345');

insert into medicos (NombreMed, CedulaP, especialidad, email, password ) VALUES ('Jorge Rodriguez','KK70878F','Cardiologia','JR@gmail.com','12345');

insert into medicos (NombreMed, CedulaP, especialidad, email, password ) VALUES ('Lorena Lopez','UY46878F','Cirugia','Lore123@gmail.com','12345');


insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-11' ,'10:00', 1, 5, '2022-10-25 14-30-15');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-11' ,'11:00', 5, 2, '2022-11-12 09-10-03');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-11' ,'10:00', 4, 2, '2022-11-13 09-50-03');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-11' ,'11:00', 3, 5, '2022-11-11 12-23-55');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-11' ,'13:00', 1, 2, '2022-11-11 14-10-03');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-11' ,'13:00', 2, 1, '2022-11-12 12-32-33');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-14' ,'10:00', 1, 1, '2022-11-14 10-50-00');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-14' ,'16:00', 3, 4, '2022-11-15 15-59-03');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-14' ,'17:00', 5, 4, '2022-11-16 16-19-55');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-14' ,'18:00', 2, 3, '2022-11-14 18-00-34');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-14' ,'19:00', 1, 4, '2022-11-14 20-15-00');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-15' ,'10:00', 4, 3, '2022-11-15 09-58-31');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-15' ,'13:00', 1, 1, '2022-11-15 11-00-39');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-15' ,'11:00', 5, 2, '2022-11-14 11-35-22');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-15' ,'18:00', 2, 3, '2022-11-15 17-59-03');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-24' ,'18:00', 2, 3, '2022-11-15 17-59-03');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-24' ,'18:00', 2, 3, '');
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-24' ,'18:00', 2, 3,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-25' ,'18:00', 2, 3,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-11-27' ,'18:00', 2, 3,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-12-03' ,'18:00', 3, 1,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-12-03' ,'18:00', 2, 3,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-12-05' ,'18:00', 2, 3,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-12-05' ,'18:00', 3, 5,null);
insert into citas (fechac, hora, idpaciente, idmedico, fechacancel) values
('2022-12-05' ,'18:00', 1, 1,null);
delimiter //
 create procedure citasHoy()
 begin
select * from citas where fechac =now();
end//
delimiter ;
delimiter //
create procedure enfermedadesParecidas()
begin
select * from paciente where enfermedades like "Diabetes%";
end//
delimiter ;

delimiter //
create procedure filtroSexo()
begin
select * from paciente where sexo like "M%";
end//
delimiter ;
delimiter //
create procedure pacientecitascanceladas()
begin
select idpaciente,nompaciente,email,telCasa,telCel,(select count(fechaCancel) from citas where paciente.idpaciente= citas.idcitas and fechaCancel is not null) as CitasCanceladas from paciente order by CitasCanceladas desc limit 5;
end//
delimiter ;
 -- -----------------------------------------------------------------------------------------------------------------------------------------------------------------
 



delimiter //
create procedure enfermedadesParecidas(_enfermedades varchar(100))
begin
select * from paciente where enfermedades like concat("%",_enfermedades,"%");

if(_enfermedades is null)THEN

select "Favor de poner un nombre"msg;
end IF;
END//
delimiter ;


delimiter //
create procedure filtroNombreySexo(_sexo char,_nombre varchar(100))
BEGIN
if(_nombre is null and _sexo is not null) then
select * from paciente where sexo=_sexo;
end if;
if(_nombre is not null and _sexo is null)then
select * from paciente where nompaciente like concat( "%",_nombre,"%"); 
end if;
if(_nombre is null and _sexo is null) then
select * from paciente;
end if;
if(_nombre is not null and _sexo is not null) then 
select * from paciente where nompaciente like concat("%",_nombre,"%") and sexo=_sexo ;
end if;
end //
delimiter ;


select fechac,hora,(select nompaciente from paciente where paciente.idpaciente=citas.idpaciente)as Paciente,(select NombreMed from medicos where medicos.idmedico=citas.idmedico) as Medico from citas where fechac >=curdate() and fechaCancel is null ;
