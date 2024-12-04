
/*conferindo os banco de dados */
show databases;

/* excluindo banco de daddos */

drop database pi_artesanato;

/*criando o banco de dados do pi_artesanato*/
create database pi_artesanato;

/*usando o banco de dados do pi*/
use pi_artesanato;

/*checando a tabelas*/
show tables;

/*decrição das tabelas*/


/*primeiro vou criar as tabelas que não possui id de outras tabelas*/

/*criando a tabela do cliente*/
create table cliente(
	id_cliente int not null auto_increment,
    nome varchar(150) not null,
    cep char(9) not null,
    cpf char(11) unique not null,
    email varchar(150) unique not null,
    senha varchar(20) not null,
    telefone char(11),
    numero_casa int(5),
    rua varchar(150),
    bairro varchar(150),
    estado varchar(100),
    cidade varchar (150),
    complemento varchar(200),
    
     /*chave primaria*/
    constraint primary key(id_cliente)
);

/*criando a tabela categoria*/
create table categoria(
	id_categoria int not null auto_increment,
    nome varchar(100) not null,
    status_categoria char(1) not null,
    imagem varchar(100) not null,
    
    /*chave primaria*/
    constraint primary key(id_categoria)
);

/*criando a tabela de produtos personalizados*/
create table produto_perso(
	id_produto_perso int not null auto_increment,
    tipo varchar(100) not null,
    descricao longtext not null,
    imagem varchar(100) not null,
    
    /*chave primaria*/
    constraint primary key(id_produto_perso)
);

/*As tabelas com os id primarios que ja foram criados acima. Com isso irei dar inicio
a criação das tabelas que irão puxar esses id*/

/*criando a tabela produto*/
create table produto(
	id_produto int not null auto_increment,
    nome varchar(100) not null,
    preco decimal(10,2) not null,
    quantidade int not null,
    cor varchar(45) not null,
    tamanho float not null,
	imagem varchar(100) not null,
    descricao longtext not null,
    tipo varchar(100) not null,
    id_categoria int not null,
    
    /*chave primaria*/
    constraint primary key(id_produto),
    /*chaves secundarias das tabelas principais*/
    foreign key(id_categoria) references categoria(id_categoria)
);

create table avaliacoes(
	id_avaliacoes int not null auto_increment,
    estrelas char(5),
    text_avaliacao varchar(255),
    id_cliente int not null,
    id_produto int not null,
    
    /*chave primaria*/
    constraint primary key(id_avaliacoes),
    /*chaves secundarias das tabelas principais*/
    foreign key(id_cliente) references cliente(id_cliente),
    foreign key(id_produto) references produto(id_produto)
);

/*criando a tebela de favoritos*/
create table favoritos(
	id_favoritos int not null auto_increment,
	id_cliente int not null,
    id_produto int not null,
    
    /*chave primaria*/
    constraint primary key(id_favoritos),
    /*chaves secundarias das tabelas principais*/
    foreign key(id_cliente) references cliente(id_cliente),
    foreign key(id_produto) references produto(id_produto)
 );
 
 /*criando a tabela sacola*/
 create table sacola(
	id_sacola int not null auto_increment,
    preco_frete decimal(10,2) not null,
    valor_total decimal (10,2) not null,
    cep char(9) not null,
	id_cliente int not null,
     /*chave primaria*/
    constraint primary key(id_sacola),
    /*chaves secundarias das tabelas principais*/
    foreign key(id_cliente) references cliente(id_cliente)
 );
 
 /*criando a tabela produto_sacola*/
 create table item_pedido(
	id_item_pedido int not null auto_increment,
    quantidade_pedido int not null,
    data_pedido datetime not null,
    status_pedido char(3) not null,
    codigo_rastreio varchar(50) not null,
	valor_total decimal (10,2) not null,
	id_produto int,
    id_sacola int not null,
    id_produto_perso int ,
    
    /*chave primaria*/
    constraint primary key(id_item_pedido),
    /*chaves secundarias*/
    foreign key(id_produto) references produto(id_produto),
    foreign key(id_sacola) references sacola(id_sacola),
    foreign key(id_produto_perso) references produto_perso(id_produto_perso)
 );

/*criando a tabela de pagamento*/
create table pagamento(
	id_pagamento int not null auto_increment,
    url_whatsapp varchar(100) not null,
    status_pagamento char(1) not null,
    telefone char(11) not null,
    id_item_pedido int not null,
    
     /*chave primaria*/
    constraint primary key(id_pagamento),
    /*chaves secundarias das tabelas principais*/
	foreign key(id_item_pedido) references item_pedido(id_item_pedido)
);

create table administrador(
	id_administrador int not null auto_increment,
    email varchar(100) unique not null,
    senha varchar(20) not null,
    
     /*chave primaria*/
    constraint primary key(id_administrador)
);
create table banner(
	id_banner int not null auto_increment,
    imagem varchar (150) not null,
    
     /*chave primaria*/
    constraint primary key(id_banner)
);





INSERT INTO cliente (nome, cep, cpf, email, senha, telefone, numero_casa, rua, bairro, estado, cidade, complemento) VALUES
('João Silva', '12345-678', '12345678901', 'joao.silva@email.com', 'senha123', '11987654321', 123, 'Rua A', 'Bairro X', 'SP', 'São Paulo', 'Apto 45'),
('Maria Oliveira', '87654-321', '98765432100', 'maria.oliveira@email.com', 'senha456', '11976543210', 456, 'Rua B', 'Bairro Y', 'RJ', 'Rio de Janeiro', NULL),
('Carlos Pereira', '11223-445', '45678912300', 'carlos.p@email.com', 'senha789', '11912345678', 789, 'Rua C', 'Bairro Z', 'MG', 'Belo Horizonte', NULL),
('Ana Costa', '33445-667', '23456789012', 'ana.costa@email.com', 'senha012', '11923456789', 101, 'Rua D', 'Bairro W', 'PR', 'Curitiba', 'Casa 2'),
('Roberto Santos', '55667-889', '34567890123', 'roberto.s@email.com', 'senha345', '11934567890', 202, 'Rua E', 'Bairro V', 'BA', 'Salvador', NULL),
('Juliana Almeida', '77889-990', '45678901234', 'juliana.a@email.com', 'senha678', '11945678901', 303, 'Rua F', 'Bairro U', 'CE', 'Fortaleza', NULL),
('Felipe Lima', '99001-234', '56789012345', 'felipe.l@email.com', 'senha901', '11956789012', 404, 'Rua G', 'Bairro T', 'RS', 'Porto Alegre', 'Bloco B'),
('Fernanda Rocha', '11122-334', '67890123456', 'fernanda.r@email.com', 'senha234', '11967890123', 505, 'Rua H', 'Bairro S', 'SC', 'Florianópolis', NULL),
('Rafael Mendes', '22233-445', '78901234567', 'rafael.m@email.com', 'senha567', '11978901234', 606, 'Rua I', 'Bairro R', 'ES', 'Vitória', NULL),
('Tatiane Costa', '33344-556', '89012345678', 'tatiane.c@email.com', 'senha890', '11989012345', 707, 'Rua J', 'Bairro Q', 'GO', 'Goiânia', NULL);

INSERT INTO categoria (nome, status_categoria, imagem) VALUES
('Artesanato', 'A', 'artesanato.jpg'),
('Decoração', 'A', 'decoracao.jpg'),
('Acessórios', 'A', 'acessorios.jpg'),
('Presentes Personalizados', 'A', 'presentes_personalizados.jpg'),
('Bijuterias', 'A', 'bijuterias.jpg'),
('Cerâmicas', 'A', 'ceramicas.jpg'),
('Tapeçaria', 'A', 'tapeçaria.jpg'),
('Produtos Sustentáveis', 'A', 'produtos_sustentaveis.jpg'),
('Materiais de Arte', 'A', 'materiais_arte.jpg'),
('Cestas e Trançados', 'A', 'cestas_trancados.jpg');

INSERT INTO produto_perso (tipo, descricao, imagem) VALUES
('Caneca Personalizada', 'Caneca feita à mão com personalização', 'caneca_personalizada.jpg'),
('Camiseta Personalizada', 'Camiseta 100% algodão com estampa única', 'camiseta_personalizada.jpg'),
('Quadro Decorativo', 'Quadro pintado à mão com tintas naturais', 'quadro_decorativo.jpg'),
('Cesta de Café da Manhã', 'Cesta com itens artesanais de café', 'cesta_cafe.jpg'),
('Porta-retratos de Madeira', 'Porta-retratos feito com madeira reciclada', 'porta_retratos.jpg'),
('Bijuteria Artesanal', 'Bijuterias feitas à mão com materiais sustentáveis', 'bijuteria_artesanal.jpg'),
('Velas Aromáticas', 'Velas feitas com ceras naturais e essências', 'velas_aromaticas.jpg'),
('Tapeçaria Colorida', 'Tapeçarias feitas à mão com fios naturais', 'tapecaria_colorida.jpg'),
('Cangas Personalizadas', 'Cangas de praia personalizadas com estampas exclusivas', 'canga_personalizada.jpg'),
('Luminária Artesanal', 'Luminária feita com materiais recicláveis', 'luminaire_artesanal.jpg');

INSERT INTO produto (nome, preco, quantidade, cor, tamanho, imagem, descricao, tipo, id_categoria) VALUES
('Porta-retratos de Madeira', 29.90, 50, 'Natural', 20.0, 'porta_retratos.jpg', 'Porta-retratos feito à mão em madeira reciclada', 'Artesanato', 1),
('Cesta de Palha', 49.90, 30, 'Bege', 25.0, 'cesta_palha.jpg', 'Cesta artesanal perfeita para presentes', 'Artesanato', 1),
('Velas Aromáticas', 19.90, 100, 'Diversas', 10.0, 'velas_aromaticas.jpg', 'Velas feitas à mão com aromas naturais', 'Artesanato', 1),
('Bijuterias Coloridas', 15.90, 200, 'Multicolorido', 0.0, 'bijuterias.jpg', 'Bijuterias artesanais, feitas com materiais recicláveis', 'Artesanato', 1),
('Quadro Decorativo', 39.90, 15, 'Colorido', 30.0, 'quadro_decorativo.jpg', 'Quadro pintado à mão, ideal para decorar sua casa', 'Artesanato', 1),
('Camiseta Personalizada', 59.90, 100, 'Branco', 1.8, 'camiseta_personalizada.jpg', 'Camiseta 100% algodão com estampa personalizada', 'Artesanato', 1),
('Caneca Personalizada', 25.00, 150, 'Branca', 0.3, 'caneca_personalizada.jpg', 'Caneca personalizada com a sua foto', 'Artesanato', 1),
('Canga de Praia', 45.00, 80, 'Colorida', 1.5, 'canga_personalizada.jpg', 'Canga de praia feita à mão com estampas exclusivas', 'Artesanato', 1),
('Luminária de Papel', 35.00, 60, 'Branca', 0.5, 'luminaire_artesanal.jpg', 'Luminária artesanal feita de papel reciclado', 'Artesanato', 1),
('Tapeçaria de Algodão', 70.00, 40, 'Colorida', 2.0, 'tapecaria_colorida.jpg', 'Tapeçaria artesanal de algodão, ideal para decoração', 'Artesanato', 1);

INSERT INTO avaliacoes (estrelas, text_avaliacao, id_cliente, id_produto) VALUES
('⭐⭐⭐⭐⭐', 'Produto incrível, superou minhas expectativas!', 1, 1),
('⭐⭐⭐⭐', 'Muito bom, mas poderia ser um pouco mais durável.', 2, 2),
('⭐⭐⭐⭐⭐', 'Adorei! A qualidade é excepcional.', 3, 3),
('⭐⭐⭐', 'Atendeu, mas esperava mais.', 4, 4),
('⭐⭐⭐⭐', 'Bom produto, entrega rápida.', 5, 5),
('⭐⭐⭐⭐⭐', 'Excelentes acabamentos, recomendo!', 6, 6),
('⭐⭐', 'Não gostei, veio com defeito.', 7, 7),
('⭐⭐⭐⭐', 'Ótima relação custo-benefício.', 8, 8),
('⭐⭐⭐⭐⭐', 'Perfeito para decoração!', 9, 9),
('⭐⭐⭐', 'Achei bonito, mas um pouco frágil.', 10, 10);


INSERT INTO favoritos (id_cliente, id_produto) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

INSERT INTO sacola (preco_frete, valor_total, cep, id_cliente) VALUES
(10.00, 150.00, '12345-678', 1),
(15.00, 75.00, '87654-321', 2),
(20.00, 250.00, '11223-445', 3),
(5.00, 99.90, '33445-667', 4),
(12.00, 185.50, '55667-889', 5),
(8.00, 45.00, '77889-990', 6),
(6.00, 30.00, '99001-234', 7),
(11.00, 120.00, '11122-334', 8),
(14.00, 200.00, '22233-445', 9),
(9.00, 90.00, '33344-556', 10);

show databases;
use pi_artesanato;
select * from produto;	
select * from sacola;
select *from cliente;


select * from item_pedido;


desc item_pedido;

insert into item_pedido(quantidade_pedido,data_pedido,status_pedido,codigo_rastreio,valor_total,id_produto,id_sacola) 
values (5, current_timestamp(),'APR', 'ASDFGHfgh', 123.34, 5,4);

select * from produto;
delete from item_pedido where id_item_pedido = 1;


CREATE TRIGGER baixa_estoque AFTER INSERT 
ON item_pedido
FOR EACH ROW
UPDATE produto set quantidade = (quantidade - NEW.quantidade_pedido) where id_produto = NEW.id_produto;

create trigger aumento_valor after insert
on item_pedido
for each row
update sacola set valor_total = (valor_total + new.valor_total) where id_cliente = new.id_sacola;



drop trigger aumento_valor;
select  * from item_pedido;
select * from item_pedido;





insert into item_pedido(id_item_pedido, quantidade_pedido, data_pedido, status_pedido, codigo_rastreio, valor_total, id_produto, id_sacola, id_produto_perso) 
values (default, 1, current_timestamp(),'APR', 'ASDFGHfgh', 19.90 , 3, 4, null);


insert into item_pedido(id_item_pedido, quantidade_pedido, data_pedido, status_pedido, codigo_rastreio, valor_total, id_produto, id_sacola, id_produto_perso) 
values (default, 1, current_timestamp(),'APR', 'ASDFGHfgh', 19.90 , 3, 4, null);









select cliente.nome as QUEM_AVALIOU, avaliacoes.text_avaliacao as AVALIACOES, produto.nome as QUAL_PRODUTO
from cliente join avaliacoes on cliente.id_cliente = avaliacoes.id_cliente
join produto on avaliacoes.id_produto = produto.id_produto;

select cliente.nome, favoritos.id_produto, produto.nome from cliente join favoritos 
on cliente.id_cliente = favoritos.id_cliente 
join produto on favoritos.id_produto = produto.id_produto;

select cliente.id_cliente, cliente.nome, sacola.id_sacola, sacola.cep, sacola.valor_total from cliente left join sacola
on cliente.id_cliente = sacola.id_sacola;
