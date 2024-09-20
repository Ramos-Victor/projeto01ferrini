create database db_remake_travel;

use db_remake_travel;

create table tb_usuario (
cd_usuario int primary key auto_increment,
nm_usuario varchar(80) not null,
nm_email varchar(80) not null unique,
cd_senha varchar(128) not null,
dt_registro datetime not null default current_timestamp
);

insert into tb_usuario set
nm_usuario = 'Victor',
nm_email= 'victor@mail.com',
cd_senha = sha2('123',256);

create table tb_carousel (
cd_carousel int auto_increment primary key,
url_imagem_carousel varchar(100) not null,
ds_carousel varchar(120),
ic_active char(1),
st_carousel char(1) not null
);

select * from tb_carousel;

SET SQL_SAFE_UPDATES=0;
delete from tb_carousel;

create table tb_pacote(
  cd_pacote int auto_increment primary key,
  nm_destino_pacote varchar(80) not null,
  ds_periodo varchar(80) not null,
  ds_acomodacao longtext not null,
  vl_pacote decimal(8,2) not null,
  qt_parcela_pacote int not null,
  url_imagem_pacote varchar(80) not null,
  st_pacote char(1) not null default "1",
  ic_active char(1)
);

select * from tb_pacote;	

create table tb_servicos(
cd_servico int auto_increment primary key,
nm_servico varchar (60) not null,
ds_servico longtext not null,
url_imagem_servico varchar(100) not null
);

select * from tb_servicos;	
