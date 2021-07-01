CREATE TABLE clients(
    c_id int(3) PRIMARY KEY AUTO_INCREMENT,
    c_name varchar(20) NOT NULL,
    c_mail varchar(20) UNIQUE,
    c_balance int(10) NOT NULL
    );
    
INSERT INTO `clients`(`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES 
	(101,'Shravani.k','ssk163@gmail.com',80000),
    (102,'Sharvari.m','sm07@gmail.com',775000),
    (103,'Yukta P.','ypp16@gmail.com',55000),
    (104,'Hardik.L.','hlad@gmail.com',555000),
    (105,'Sanika.G','sanikag@gmail.com',85000),
    (106,'Shruti.M','shruti@gmail.com',60000),
    (107,'Siddharth P.','gvmm@gmail.com',42000),
    (108,'Shreya b.','shreyab@gmail.com',45510),
    (109,'Sagarika.T','sagarikat@gmail.com',3500),
    (110,'Jairaj S.','jairajs@gmail.com',25000)
    ;

CREATE TABLE transaction (
  sr_no int(3) PRIMARY KEY AUTO_INCREMENT,
  sender text NOT NULL,
  receiver text NOT NULL,
  balance int(10) NOT NULL,
  date_time datetime NOT NULL DEFAULT current_timestamp()
);


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

COMMIT