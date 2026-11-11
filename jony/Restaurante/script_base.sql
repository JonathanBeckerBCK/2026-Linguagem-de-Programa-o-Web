/* 
Tabelas:

- Comidas (CRUD)
- Tipos (Relacinada) -> Massa, Pizza, Carne
- Temperos (Relacionada) -> Fraco, Médio, Forte

-- pk = PRIMARY KEY
-- fk = FOREIGN KEY

*/

CREATE TABLE tipos
(
    id INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(5) NOT NULL,
    CONSTRAINT pk_tipos PRIMARY KEY (id)
);

INSERT INTO tipos(nome) VALUES ("Massa");   
INSERT INTO tipos(nome) VALUES ("Pizza");
INSERT INTO tipos(nome) VALUES ("Carne");


CREATE TABLE intensidades
(
    id INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(6) NOT NULL,
    CONSTRAINT pk_intensidades PRIMARY KEY (id)
);

INSERT INTO intensidades(nome) VALUES ("Fraco");
INSERT INTO intensidades(nome) VALUES ("Médio");
INSERT INTO intensidades(nome) VALUES ("Forte");




CREATE TABLE comidas
(
    id INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    id_tipo INT NOT NULL,
    id_intensidade INT NOT NULL,
    CONSTRAINT pk_comidas PRIMARY KEY (id), 
    CONSTRAINT fk_tipo FOREIGN KEY (id_tipo) REFERENCES tipos(id), 
    CONSTRAINT fk_intensidade FOREIGN KEY (id_intensidade) REFERENCES intensidades(id)
);

