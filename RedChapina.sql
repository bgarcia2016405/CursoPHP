Drop database if exists RedChapina;
create database RedChapina;
use RedChapina;
delimiter &&
create procedure Usuarios()
begin
create table Usuarios(
						IdUsuarios int not null auto_increment primary key,
                        nombre varchar(15) not null,
                        apellido varchar(15) not null,
                        edad int not null);
end &&
delimiter ;
delimiter &&
create procedure Perfiles()
begin
create table Perfiles(
							IdPerfiles int not null auto_increment primary key,
							tipo_perfil varchar(15) not null);
end &&
delimiter ;
delimiter &&
create procedure Usuarios_Perfiles()
begin
create table Usuarios_Perfiles(
							IdUsuarioPerfiles int not null auto_increment primary key,
                            usuario_id int not null,
                            perfiles_id int not null,
foreign key (usuario_id) references Usuarios(IdUsuarios) on delete cascade,
foreign key (perfiles_id) references Perfiles(idPerfiles) on delete cascade);
end &&
delimiter ;

call Usuarios();
call Perfiles();
call Usuarios_Perfiles();
#======================Agregar===========================#
delimiter &&
create procedure sp_AgregarUsuario(	in nombre varchar(15),
									in apellido varchar(15), 
                                    in edad int)
begin
insert into Usuarios(	nombre,
						apellido, 
                        edad) values (	nombre,
										apellido, 
                                        edad);
end &&
delimiter ;
delimiter &&
create procedure sp_AgregarPerfil(	in tipo_perfil varchar(15))
begin
insert into Perfiles(tipo_perfil) values (tipo_perfil);
end &&
delimiter ;
delimiter &&
create procedure sp_AgregarUsuariosPerfiles(in usuario int,
											in perfil int)
begin
insert into Usuarios_Perfiles(usuario_id,perfiles_id) values (usuario,perfil);
end &&
delimiter ;
call sp_AgregarUsuario("Byron","García",19);
call sp_AgregarPerfil("Admin");
call sp_AgregarUsuariosPerfiles(1,1);