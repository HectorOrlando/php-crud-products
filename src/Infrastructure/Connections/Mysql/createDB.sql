-- CREATE DATABASE IN MYSQL
CREATE DATABASE crud_products;

-- CREATE TABLE
CREATE TABLE product (id INT(10) NOT NULL AUTO_INCREMENT, name VARCHAR(100), price DOUBLE, active TINYINT(1), PRIMARY KEY (id));

-- INSERT PRODUCTS
INSERT INTO product VALUES(null, 'Teclado', 20.99, 1);
INSERT INTO product VALUES(null, 'Pantalla', 150, 1);
INSERT INTO product VALUES(null, 'Mouse Cable', 33, 1);
INSERT INTO product VALUES(null, 'Mouse Bluetooth', 66, 0);
INSERT INTO product VALUES(null, 'Pendrive', 25.33, 0);
INSERT INTO product VALUES(null, 'Cable USB', 5, 1);