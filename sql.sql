CREATE TABLE t_product(
	product_id INT AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	product_description VARCHAR(250) NOT NULL,
	price DECIMAL NOT NULL,
	PRIMARY KEY (product_id)
);


CREATE TABLE t_customer(
	customer_id INT AUTO_INCREMENT,
	name VARCHAR(250) NOT NULL,
	email VARCHAR(250) NOT NULL,
	PRIMARY KEY (customer_id)
);

CREATE TABLE t_customer_product(
	customer_id INT NOT NULL,
	product_id INT(11) NOT NULL,
	FOREIGN KEY (customer_id) REFERENCES t_customer (customer_id),
	FOREIGN KEY (product_id) REFERENCES t_product (product_id)
);

CREATE TABLE t_order(
	order_id INT AUTO_INCREMENT,
	customer_id INT NOT NULL,
	total DECIMAL NOT NULL,
	creation_date DATE,
	PRIMARY KEY (order_id),
	FOREIGN KEY (customer_id) REFERENCES t_customer (customer_id)
);

CREATE TABLE t_order_detail(
	order_detail_id INT AUTO_INCREMENT,
	order_id INT NOT NULL,
	product_description VARCHAR(255) NOT NULL,
	price DECIMAL,
	quantily INT,
	PRIMARY KEY (order_detail_id),
	FOREIGN KEY (order_id) REFERENCES t_order (order_id)
);


INSERT INTO t_product (name,product_description,price) VALUES 
('mesa','mesa de madera',50000),
('silla','silla de oficina',90000),
('computador', 'de segunda',500000);

INSERT INTO t_customer (name,email) VALUES
('juan','juan@gmail.com'),
('andres','andres2019@gmail.com'),
('alejandra','aleja@gmail.com');

INSERT INTO t_customer_product (customer_id,product_id) VALUES 
(1,1),
(2,2),
(3,3);

INSERT INTO t_order (customer_id,total,creation_date) VALUES
(1,50000,'2019/11/05'),
(2,90000,'2019/11/08'),
(1,500000,'2019/11/10');

INSERT INTO t_order_detail (order_id,product_description,price,quantily) VALUES 
(1,'mesa de madera',100000,2),
(2,'silla de oficina',180000,2),
(3,'de segunda',1000000,2);




