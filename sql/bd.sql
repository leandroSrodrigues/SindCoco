create table anuncio(
     id int auto_increment primary key,
     nome varchar(150) not null,
     email varchar(100) not null,
     titulo varchar(100) not null,
     descricao blob not null,
     preco float not null,
     foto varchar(256) not null,
     telefone varchar(200) not null,
     data_anuncio TIMESTAMP not null,
     valido tinyint not null
);

create table usuario( 
    id int auto_increment primary key,
    nome varchar(100),
    login varchar(15),
    senha varchar(61),
    adm tinyint
);

create table acoes( 
    id int auto_increment primary key,
    titulo varchar(100),
    data date,
    arquivo varchar(100)
);

create table midia(
    id int auto_increment primary key,
    titulo varchar(100),
    data date,
    capa varchar(100)
);

create table imagem_midia(
    id int auto_increment primary key,
    id_midia int,
    imagem varchar(100)
);

create table pragas( 

    id int primary key auto_increment,
    imagem char(100),
    nome char(80),
    nome_cientifico char(100)

);

create table descricao_praga(
    id int primary key auto_increment,
    id_praga int,
    descricao char(255)
);

create table plantas_praga(

    id int primary key auto_increment,
    id_praga int,
    descricao char(255)

);

create table distribuicao_praga(

    id int primary key auto_increment,
    id_praga int,
    descricao char(255)

);

create table danos_praga(
    id int primary key auto_increment,
    id_praga int,
    descricao char(255)
);

create table amostragem_praga(
    id int primary key auto_increment,
    id_praga int,
    descricao char(255)
);

create table tatica_praga(

    id int primary key auto_increment,
    id_praga int,
    descricao char(255)

);

create table imagens_praga(

    id int primary key auto_increment,
    id_praga int,
    larva char(100),
    pupa char(100),
    adulta char(100),
    larva char(100)


);

create table imagens_dano(

    id int primary key auto_increment,
    id_praga int,
    id_dano int,
    nome char(100),
    arquivo char(100)

);

