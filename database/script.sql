/* mer: */

CREATE TABLE clientes (
    id_cliente int PRIMARY KEY,
    cpf_cnpj_cliente char(20),
    email char(50),
    senha char(50),
    nm_cliente char(50),
    cep_cliente char(10),
    cidade_cliente char(50),
    estado_cliente char(30),
    bairro_cliente char(50),
    logradouro_cliente char(50),
    nr_cliente int,
    UNIQUE (cpf_cnpj_cliente, email)
);

CREATE TABLE vendedores (
    id_vendedor int PRIMARY KEY,
    cpf_cnpj_vendedor char(20),
    nm_vendedor char(50)
);

CREATE TABLE compras (
    id_compra int PRIMARY KEY,
    vl_comissao decimal(10,2),
    vl_transporte decimal(10,2),
    cpf_cnpj_cliente int,
    cpf_cnpj_vendedor int,
    cpf_cnpj_transportadora int
);

CREATE TABLE itens_compra (
    id_item_compra int PRIMARY KEY,
    vl_item_compra decimal(10,2),
    qt_item_compra decimal(10,2),
    id_compra int,
    id_produto int
);

CREATE TABLE produtos (
    id_produto int PRIMARY KEY,
    nm_produto char(50),
    ds_produto varchar(200),
    vl_produto decimal(10,2),
    qt_estoque decimal(10,2),
    dimensoes_produto char(50),
    peso_produto decimal(7,3),
    id_unidade_medida int,
    id_categoria int
);

CREATE TABLE categorias (
    id_categoria int PRIMARY KEY,
    ds_categoria char(100)
);

CREATE TABLE unidades_medida (
    id_unidade_medida int PRIMARY KEY,
    ds_unidade_medida char(100)
);

CREATE TABLE imagens (
    id_imagem int PRIMARY KEY,
    nm_imagem char(100),
    id_produto int
);

CREATE TABLE transportadoras (
    id_transportadora int PRIMARY KEY,
    cpf_cnpj_transportadora char(20) UNIQUE,
    nm_transportadora char(50),
    cep_transportadora char(10),
    cidade_transportadora char(50),
    estado_transportadora char(30),
    bairro_transportadora char(50),
    logradouro_transportadora char(50),
    nr_transportadora int
);
 
ALTER TABLE compras ADD CONSTRAINT FK_compras_2
    FOREIGN KEY (cpf_cnpj_cliente)
    REFERENCES clientes (id_cliente);
 
ALTER TABLE compras ADD CONSTRAINT FK_compras_3
    FOREIGN KEY (cpf_cnpj_transportadora)
    REFERENCES transportadoras (id_transportadora);
 
ALTER TABLE compras ADD CONSTRAINT FK_compras_4
    FOREIGN KEY (cpf_cnpj_vendedor)
    REFERENCES vendedores (id_vendedor);
 
ALTER TABLE itens_compra ADD CONSTRAINT FK_itens_compra_2
    FOREIGN KEY (id_compra)
    REFERENCES compras (id_compra);
 
ALTER TABLE itens_compra ADD CONSTRAINT FK_itens_compra_3
    FOREIGN KEY (id_produto)
    REFERENCES produtos (id_produto);
 
ALTER TABLE produtos ADD CONSTRAINT FK_produtos_2
    FOREIGN KEY (id_unidade_medida)
    REFERENCES unidades_medida (id_unidade_medida);
 
ALTER TABLE produtos ADD CONSTRAINT FK_produtos_3
    FOREIGN KEY (id_categoria)
    REFERENCES categorias (id_categoria);
 
ALTER TABLE imagens ADD CONSTRAINT FK_imagens_2
    FOREIGN KEY (id_produto)
    REFERENCES produtos (id_produto);