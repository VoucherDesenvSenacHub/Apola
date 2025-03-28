/*conferindo os banco de dados */
show databases;
drop database pi_artesanato;
/*criando o banco de dados do pi_artesanato*/
create database pi_artesanato;
/*checando os banmcos de dados*/
show databases;


/*usando o banco de dados do pi*/
use pi_artesanato;

/*checando a tabelas*/
show tables;

drop table produtos_perso;
;

/*decrição das tabelas*/
describe sacola;

/*primeiro vou criar as tabelas que não possui id de outras tabelas*/

/*criando a tabela do cliente*/
create table cliente(
	id_cliente int not null unique auto_increment,
    nome varchar(150) not null,
    cep char(9) not null,
    cpf char(11) unique not null,
    email varchar(150) unique not null,
    senha varchar(20) not null,
    telefone char(11) unique not null,
    numero_casa int(5) not null,
    rua varchar(150) not null,
    bairro varchar(150) not null,
    estado varchar(100) not null,
    cidade varchar (150) not null,
    complemento varchar(200) not null,
    constraint primary key(id_cliente)
);

/*criando a tabela categoria*/
create table categoria(
	id_categoria int not null unique auto_increment,
    nome varchar(100) not null,
    status_categoria char(1) not null,
    imagem varchar(100) not null,
    constraint primary key(id_categoria)
);

/*criando a tabela de pagamento*/
create table pagamento(
	id_pagamento int not null unique auto_increment,
    url_whatsapp varchar(100) not null,
    status_pagamento char(1) not null,
    telefone char(11) unique not null,
    constraint primary key(id_pagamento)
);

/*criando a tabela de produtos personalizados*/
create table produto_perso(
	id_produto_perso int not null auto_increment,
    tipo varchar(100) not null,
    descricao longtext not null,
    constraint primary key(id_produto_perso)
);

/*As tabelas com os id´s primarios ja foram criadas acima. Com isso irei dar inicio
a criação das tabelas que irão herdar esses id´s */

/*criando a tabela imagens_produto_perso*/
create table imagens_produto_perso(
	id_imagens_produto_perso int not null auto_increment,
    imagem1 text,
    imagem2 text,
    imagem3 text,
    imagem4 text,
    
    id_produto_perso int not null,
    
    constraint primary key(id_imagens_produto_perso),
    foreign key(id_produto_perso) references produto_perso(id_produto_perso)
);

/*criando a tabela produto*/
create table produto(
	id_produto int not null unique auto_increment,
    nome varchar(100) not null,
    preco decimal(10,2) not null,
    avaliacao longtext,
    quantidade int not null,
    cor varchar(45) not null,
    tamanho float not null,
	imagem varchar(100) not null,
    descricao longtext not null,
    tipo varchar(100) not null,
    constraint primary key(id_produto),
    categoria_id_categoria int not null,
    foreign key(categoria_id_categoria) references categoria(id_categoria)
);

/*criando a tebela de favoritos*/
create table favoritos(
	id_favoritos int not null unique auto_increment,
    constraint primary key(id_favoritos),
    cliente_id_cliente int not null,
    foreign key(cliente_id_cliente) references cliente(id_cliente),
    produto_id_produto int not null,
    foreign key(produto_id_produto) references produto(id_produto)
 );
 
 /*criando a tabela sacola*/
 create table sacola(
	id_sacola int not null unique auto_increment,
    preco_frete decimal(10,2) not null,
    valor_total decimal (10,2) not null,
    cep char(9) not null,
    quant_produto int not null,
    constraint primary key(id_sacola),
    produto_id_produto int not null,
    foreign key(produto_id_produto) references produto(id_produto),
    cliente_id_cliente int not null,
    foreign key(cliente_id_cliente) references cliente(id_cliente),
    produto_categoria_id_categoria int not null,
    foreign key(produto_categoria_id_categoria) references produto(categoria_id_categoria)
 );

/*criando a tabela pedido*/
create table pedido(
	id_pedido int not null unique auto_increment,
    data_pedido datetime not null,
    status_pedido char(1) not null,
    codigo_rastreio varchar(30) unique not null,
    constraint primary key(id_pedido),
    sacola_id_sacola int not null,
	foreign key(sacola_id_sacola) references sacola(id_sacola),
    sacola_produto_id_produto int not null,
    foreign key(sacola_produto_id_produto) references sacola(produto_id_produto),
    sacola_produto_categoria_id_categoria int not null,
    foreign key(sacola_produto_categoria_id_categoria) references sacola(produto_categoria_id_categoria),
    sacola_cliente_id_cliente int not null,
    foreign key(sacola_cliente_id_cliente) references sacola(cliente_id_cliente),
    produto_perso_id_produto_perso int not null,
    foreign key(produto_perso_id_produto_perso) references produto_perso(id_produto_perso)
);

create table administrador(
	id_administrador int not null auto_increment,
    email varchar(100) not null,
    senha varchar(20) not null,
    constraint primary key(id_administrador)
);
create table banner(
	id_banner int not null auto_increment,
    imagem varchar (150) not null,
    constraint primary key(id_banner)
);

show databases;
use pi_artesanato;
use pi_artesanato;
show tables;
use pi_artesanato;
drop table imagens_produto_perso;

select produto_perso.id_produto_perso, produto_perso.tipo, produto_perso.descricao, 
imagens_produto_perso.imagem1, imagens_produto_perso.imagem2, imagens_produto_perso.imagem3, 
imagens_produto_perso.imagem4, imagens_produto_perso.id_produto_perso from produto_perso join imagens_produto_perso on produto_perso.id_produto_perso=
imagens_produto_perso.id_produto_perso;


select * from imagens_produto_perso;
select * from produto_perso;

delete from produto_perso where id_produto_perso >= 1;

delete from imagens_produto_perso where id_produto_perso >= 1;
