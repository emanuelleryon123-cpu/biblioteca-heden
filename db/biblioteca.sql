CREATE TABLE editora ( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(50) NOT NULL, 
 email VARCHAR(50) NOT NULL ,
 telefone VARCHAR(50) NOT NULL  
); 

CREATE TABLE autor 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(50) NOT NULL  
); 

CREATE TABLE obra 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 titulo VARCHAR(50) NOT NULL,  
 id_autor_obra INT,  
 id_genero INT
); 

CREATE TABLE livro 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 isbn INT NOT NULL,  
 paginas INT NOT NULL,  
 ano INT NOT NULL,  
 id_obra INT,  
 id_editora INT 
); 

CREATE TABLE genero 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(50) NOT NULL,  
 idobra INT
); 

CREATE TABLE usuario 
( 
 cpf VARCHAR(50) PRIMARY KEY,  
 nome VARCHAR(50) NOT NULL,  
 email VARCHAR(50) NOT NULL,  
 telefone VARCHAR(50) NOT NULL,  
 endereco VARCHAR(50) NOT NULL,  
 numero INT NOT NULL,  
 bairro VARCHAR(50) NOT NULL,  
 cidade VARCHAR(50) NOT NULL,  
 uf VARCHAR(50) NOT NULL,  
 data_nascimento DATE NOT NULL,  
 id_tipo_usuario INT 
); 

CREATE TABLE tipo_usuario 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(50) NOT NULL  
); 

CREATE TABLE emprestimo 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 data_inicio DATE NOT NULL,  
 data_fim DATE NOT NULL,  
 id_livro INT,  
 id_usuario INT,  
 id_bibliotecario INT NOT NULL  
); 

CREATE TABLE autor_obra 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 id_autor INT,  
 id_obra INT  
); 


